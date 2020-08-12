<?php

/**
 * login.php
 *
 * Login management
 *
 * @author     Opencart-api.com
 * @copyright  2017
 * @license    License.txt
 * @version    2.0
 * @link       https://opencart-api.com/product/shopping-cart-rest-api/
 * @documentations https://opencart-api.com/opencart-rest-api-documentations/
 */
require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestLogin extends RestController
{

    const FACEBOOK_USER_INFORMATION_URL = 'https://graph.facebook.com/me?fields=email,name';
    const GOOGLE_USER_INFORMATION_URL = 'https://www.googleapis.com/plus/v1/people/me';

    public function login()
    {

        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $post = $this->getPost();

            $this->language->load('checkout/checkout');

            if ($this->customer->isLogged()) {
                $this->json['error'][] = "User is logged.";
                $this->statusCode = 400;
            } else {
                if (!$this->customer->login($post['email'], $post['password'])) {
                    $this->json['error'][] = $this->language->get('error_login');
                    $this->statusCode = 403;
                } else {
                    $this->load->model('account/customer');

                    $email = $post['email'];

                    $customer_info = $this->model_account_customer->getCustomerByEmail($email);

                    if ($customer_info && !$customer_info['status']) {
                        $this->json['error'][] = $this->language->get('error_approved');
                        $this->statusCode = 403;
                    }
                }
            }

            if (empty($this->json['error'])) {

                unset($this->session->data['guest']);

                // Default Addresses
                $this->load->model('account/address');

                if ($this->config->get('config_tax_customer') == 'payment') {
                    $this->session->data['payment_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                }

                if ($this->config->get('config_tax_customer') == 'shipping') {
                    $this->session->data['shipping_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                }

                unset($customer_info['password']);
                unset($customer_info['token']);
                unset($customer_info['salt']);

                $customer_info['address_id'] = $this->customer->getAddressId();


                $this->load->model('account/custom_field');

                $customer_info['custom_fields'] = $this->model_account_custom_field->getCustomFields($this->config->get('config_customer_group_id'));

                if ($this->opencartVersion < 2100) {
                    $customer_info['account_custom_field'] = unserialize($customer_info['custom_field']);
                } else {
                    $customer_info['account_custom_field'] = json_decode($customer_info['custom_field'], true);
                }

                unset($customer_info['custom_field']);
                unset($customer_info['cart']);

                unset($customer_info['custom_field']);
                unset($customer_info['cart']);

                $this->registry->set('cart', new Cart\Cart($this->registry));

                $wishlist = array();

                //get wishlist data
                $this->load->model('account/wishlist');
                $list = $this->model_account_wishlist->getWishlist();

                if(!empty($list)) {
                    foreach ($list as $item) {
                        $wishlist[$item['product_id']] = $item['product_id'];
                    }
                }

                $customer_info['wishlist'] = array_values($wishlist);
                $customer_info['wishlist_total'] = $this->model_account_wishlist->getTotalWishlist();

                $customer_info['cart_count_products'] = $this->cart->countProducts();
                //$customer_info['cart_total'] = $this->currency->format($this->cart->getTotal(), $this->currency->getRestCurrencyCode());

                $this->json['data'] = $customer_info;
            }

        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("POST");
        }

        $this->sendResponse();
    }

    
    public function wechatlogin()
     {
         $this->checkPlugin();
         
         
         $customer_info = array();
         
         $firstname = "";
         $lastname = "";
         $this->log->write('wechat login');
         
         
         
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
             
             $this->log->write('in post');
             
             $this->log->write('before get post');
                     $post = $this->getPost();
                     $this->log->write('after get post');
                     //$this->log->write($post);
                     
                     
                     $this->language->load('checkout/checkout');
                     
                     if ($this->customer->isLogged()) {
                         $this->json['error'][] = "User is logged.";
                         $this->statusCode = 400;
                     }
                     
                     
                     if (empty($this->json['error'])) {
                         
                         
                         $this->log->write('empty json err');
                         
                         $this->load->model('account/customer');
                         
                         
                         if(isset($post['acc_tkn'])) {
                             $access_token = $post['acc_tkn'];
                         } else {
                             $access_token = $post['acc_tkn'];
                         }
                         if(isset($post['openid'])) {
                             $openid = $post['openid'];
                         } else {
                             $openid = $post['openid'];
                         }
                         
                         $this->log->write('access_token:'.$access_token);
                         
                         $this->log->write('access_token:'.$openid);  
                         
                         $url="https://api.weixin.qq.com/sns/userinfo?access_token=".$access_token."&openid=".$openid;
                         
                         $curl = curl_init();
                         
                         curl_setopt($curl, CURLOPT_HEADER, false);
                         curl_setopt($curl, CURLINFO_HEADER_OUT, true);
                         curl_setopt($curl, CURLOPT_USERAGENT, 'OpenCart Two Factor Authentication');
                         curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                         curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                         curl_setopt($curl, CURLOPT_FORBID_REUSE, false);
                         curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                         curl_setopt($curl, CURLOPT_URL, $url);
                         //  curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, 'GET' );
                         // curl_setopt($curl, CURLOPT_POST, true);
                         //  curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post_data));
                         
                         $response = curl_exec($curl);
                         //  $this->log->write($curl);
                         
                         if (curl_errno($curl)) {
                             $curl_error = 'cURL Error ' . curl_errno($curl) . ': ' . curl_error($curl);
                         } else {
                             $curl_error = '';
                         }
                         
                         if ($curl_error) {
                             //   $this->log->write($curl_error);
                             echo $curl_error;
                         }
                         
                         //  if ($this->config->get('smsalert_debug')) {
                         //$this->log->write($response);
                         //	echo $response;
                         //  }
                         
                         curl_close($curl);
                       //  print $response;
                         //$this->log->write(print_r($response));
                         // return json_decode($response, true);
                         $ret=json_decode($response, true);
                         
                         $this->log->write('res:'.$ret);  
                         
                         if ( empty($ret["openid"]) )
                         {
                            // echo "No Open id";
                             $this->json['error'][] = $ret["errmsg"];
                             $this->statusCode = 400;
                         }
                         else
                         {
                             //echo "Open id";
                             
                           //  $social['email'] = $ret['openid'].'@noemailkonfulononline.com';
                           //  $post['email']=$ret['openid'].'@noemailkonfulononline.com';
                             $social['email'] = substr($ret['openid'],0,4).'@noemailkonfulononline.com';
							$post['email']= substr($ret['openid'],0,4).'@noemailkonfulononline.com';
                             $post['code']=$ret['openid'];
                             
                             $firstname=$ret['nickname'];
                             $city=$ret['city'];
                             
                             $this->log->write('code:'.$ret['openid']);  
                             $this->log->write('nickname:'.$ret['nickname']);  
                             $this->log->write('city:'.$ret['city']);  
                             $this->log->write('country:'.$ret['country']);  
                             $this->log->write('PROVINCE:'.$ret['province']);  
                              $this->log->write('Email:'.$post['email']);  
							 
							 
                             $customer_info = $this->model_account_customer->getCustomerByCode($post['code']);
                             
                             if (empty($this->json['error'])) {
                                 //if email does not exist, register as a new customer
                                 if (!$customer_info) {
                                    $data['email'] = $post['email'];
                                  //   $data['email']="";
                                     $data['code']=$post['code'];
                                     $data['firstname'] = $firstname;
                                     $data['lastname'] = $firstname;
                                     $data['telephone'] = "";
                                     $data['address_1'] = "";
                                     $data['city'] = $city;
                                     $data['postcode'] = "";
                                     $data['country'] = "";
                                     $data['zone_id'] = "";
                                     $data['fax'] = "";
                                     $data['company'] = "";
                                     $data['address_2'] = "";
                                     $data['country_id'] = "";
                                     $data['approved'] = 1;
                                     $data['status'] = 1;
                                     $data['password'] = md5(microtime());
                                     $data1['image']="";
                                     $this->model_account_customer->addCustomerWithCode($data,$data1);
                                     $customer_info = $this->model_account_customer->getCustomerByCode($post['code']);
                                 }
                                 
                                 if ($customer_info) {
									     $this->log->write('not null customer info:'.$customer_info['email']);  
                                     if (!$this->customer->login($customer_info['email'], "", true)) {
                                         $this->json['error'][] = $this->language->get('error_login');
                                         $this->statusCode = 400;
                                     }
                                 }
                                 
                                 if ($customer_info && !$customer_info['status']) {
                                     $this->json['error'][] = $this->language->get('error_approved');
                                     $this->statusCode = 400;
                                 }
                         }
                         
                        
                         
                       
                         
                         
                         }
                         
                         
                     }
					 
					  if (empty($this->json['error']) && !empty($customer_info)) {
						  
						     $this->log->write('In not json err and no blank customer info:'.$ret['province']);  
                unset($this->session->data['guest']);

                // Default Addresses
                $this->load->model('account/address');

                if ($this->config->get('config_tax_customer') == 'payment') {
                    $this->session->data['payment_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                }

                if ($this->config->get('config_tax_customer') == 'shipping') {
                    $this->session->data['shipping_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                }

                unset($customer_info['password']);
                unset($customer_info['token']);
                unset($customer_info['salt']);

                // Custom Fields
                $this->load->model('account/custom_field');

                $customer_info['custom_fields'] = $this->model_account_custom_field->getCustomFields($this->config->get('config_customer_group_id'));

                if ($this->opencartVersion < 2100) {
                    $customer_info['account_custom_field'] = unserialize($customer_info['custom_field']);
                } else {
                    $customer_info['account_custom_field'] = json_decode($customer_info['custom_field'], true);
                }

                unset($customer_info['custom_field']);

                $this->json['data'] = $customer_info;
            }
             
                   
         }
		  else {
                             $this->statusCode = 405;
                             $this->allowedHeaders = array("POST");
                         }
						 
						  $this->log->write('Wechat Response:');
						  $this->log->write( $this->sendResponse());
						 
           $this->sendResponse();
     }
    
    
    
    
    
    

    public function sociallogin()
    {
        
        $this->checkPlugin();
        
        $customer_info = array();
        
        $firstname = "";
        $lastname = "";
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $post = $this->getPost();
            
            $this->language->load('checkout/checkout');
            
            if ($this->customer->isLogged()) {
                $this->json['error'][] = "User is logged.";
                $this->statusCode = 400;
            }
            
            if (empty($this->json['error'])) {
                $this->load->model('account/customer');
                
                // $customer_info = $this->model_account_customer->getCustomerByEmail($post['email']);
                
                if (!isset($post['provider']) || ($post['provider'] != 'facebook' && $post['provider'] != 'google')) {
                    $this->json['error'][] = "Invalid social provider. Valid providers: facebook, google";
                    $this->statusCode = 400;
                }
                
                if (isset($post['provider']) && ($post['provider'] == 'facebook' || $post['provider'] == 'google')) {
                    
                    if(isset($post['social_access_token'])) {
                        $access_token = $post['social_access_token'];
                    } else {
                        $access_token = $post['access_token'];
                    }
                    
                    $social = $this->requestUserDataFromProvider($post['provider'], $access_token);
                    
                    
                    //Added by Avinash
                    
                    $this->log->write('Facebook login');
                    $this->log->write("Social email: ".$social['email']);
                    $this->log->write("Post Email :".$post['email']);
                    
                    
                    if ($social['email'])
                    {
                        $social['email']= $social['email'];
                    }
                    else
                    {
                        $social['email'] = $social['id'].'@noemailkonfulononline.com';
                        $post['email']=$social['id'].'@noemailkonfulononline.com';
                    }
                    
                    $this->log->write("New Soccial emai Email :".$social['email']);
                    
                    
                    if (empty($social) || $social['email'] != $post['email'])
                    {
                        $this->json['error'][] = "Social email and posted email mismatch";
                        $this->statusCode = 400;
                    } else {
                        if (isset($social['name'])) {
                            $exploded = explode(' ', $social['name']);
                            $firstname = array_shift($exploded);
                            $lastname = implode(' ', $exploded);
                        }
                    }
                }
                
                if (empty($this->json['error'])) {
                    //if email does not exist, register as a new customer
                    if (!$customer_info) {
                        $data['email'] = $post['email'];
                        $data['firstname'] = $firstname;
                        $data['lastname'] = $lastname;
                        $data['telephone'] = "";
                        $data['address_1'] = "";
                        $data['city'] = "";
                        $data['postcode'] = "";
                        $data['country'] = "";
                        $data['zone_id'] = "";
                        $data['fax'] = "";
                        $data['company'] = "";
                        $data['address_2'] = "";
                        $data['country_id'] = "";
                        $data['approved'] = 1;
                        $data['status'] = 1;
                        $data['password'] = md5(microtime());
                        $data1['image']="";
                        $this->model_account_customer->addCustomer($data,$data1);
                        $customer_info = $this->model_account_customer->getCustomerByEmail($post['email']);
                    }
                    
                    if ($customer_info) {
                        if (!$this->customer->login($post['email'], "", true)) {
                            $this->json['error'][] = $this->language->get('error_login');
                            $this->statusCode = 400;
                        }
                    }
                    
                    if ($customer_info && !$customer_info['status']) {
                        $this->json['error'][] = $this->language->get('error_approved');
                        $this->statusCode = 400;
                    }
                }
            }
            
            if (empty($this->json['error']) && !empty($customer_info)) {
                unset($this->session->data['guest']);
                
                // Default Addresses
                $this->load->model('account/address');
                
                if ($this->config->get('config_tax_customer') == 'payment') {
                    $this->session->data['payment_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                }
                
                if ($this->config->get('config_tax_customer') == 'shipping') {
                    $this->session->data['shipping_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                }
                
                unset($customer_info['password']);
                unset($customer_info['token']);
                unset($customer_info['salt']);
                
                // Custom Fields
                $this->load->model('account/custom_field');
                
                $customer_info['custom_fields'] = $this->model_account_custom_field->getCustomFields($this->config->get('config_customer_group_id'));
                
                if ($this->opencartVersion < 2100) {
                    $customer_info['account_custom_field'] = unserialize($customer_info['custom_field']);
                } else {
                    $customer_info['account_custom_field'] = json_decode($customer_info['custom_field'], true);
                }
                
                unset($customer_info['custom_field']);
                
                $this->json['data'] = $customer_info;
            }
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("POST");
        }
        
        $this->sendResponse();
    }
    
    private function requestUserDataFromProvider($provider, $access_token) {
        $ch = curl_init();
        if($provider == 'facebook'){
            curl_setopt($ch, CURLOPT_URL, static::FACEBOOK_USER_INFORMATION_URL);
            
        } elseif ($provider == 'google') {
            curl_setopt($ch, CURLOPT_URL, static::GOOGLE_USER_INFORMATION_URL);
        }
        
        $headers = array("Authorization: Bearer " . $access_token);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        
        // execute the CURL request.
        $data = curl_exec($ch);
        if(!curl_errno($ch)){
            curl_close($ch);
            $ret = json_decode($data, true);
            
            if ($provider == 'google') {
                $ret["email"] = $ret['emails'][0]['value'];
                $ret["name"] = $ret['displayName'];
            }
            
            return $ret;
        } else {
            curl_close($ch);
            return NULL;
        }
    }
}