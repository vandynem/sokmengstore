<?php
class ControllerCheckoutSuccess extends Controller {
	public function index() {
		$this->load->language('checkout/success');

		if (isset($this->session->data['order_id'])) {
			
			 $this->load->model('checkout/order'); 
			 $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']); 
	
	$this->log->write("sucess");
	$order_status_id="";
	$comment="";
	$notify="";
	
	////
	
	
	$order_products = $this->model_checkout_order->getOrderProducts($order_info['order_id']);
		
		foreach ($order_products as $order_product) {
			// Check if there are any linked downloads
			$product_download_query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "product_to_download` WHERE product_id = '" . (int)$order_product['product_id'] . "'");

			if ($product_download_query->row['total']) {
				$download_status = true;
			}
		}
	
	
		// Load the language for any mails that might be required to be sent out
		$language = new Language($order_info['language_code']);
		$language->load($order_info['language_code']);
		$language->load('mail/order_add');

		// HTML Mail
		$data['title'] = sprintf($language->get('text_subject'), $order_info['store_name'], $order_info['order_id']);

		$data['text_greeting'] = sprintf($language->get('text_greeting'), $order_info['store_name']);
		$data['text_link'] = $language->get('text_link');
		$data['text_download'] = $language->get('text_download');
		$data['text_order_detail'] = $language->get('text_order_detail');
		$data['text_instruction'] = $language->get('text_instruction');
		$data['text_order_id'] = $language->get('text_order_id');
		$data['text_date_added'] = $language->get('text_date_added');
		$data['text_payment_method'] = $language->get('text_payment_method');
		$data['text_shipping_method'] = $language->get('text_shipping_method');
		$data['text_email'] = $language->get('text_email');
		$data['text_telephone'] = $language->get('text_telephone');
		$data['text_ip'] = $language->get('text_ip');
		$data['text_order_status'] = $language->get('text_order_status');
		$data['text_payment_address'] = $language->get('text_payment_address');
		$data['text_shipping_address'] = $language->get('text_shipping_address');
		$data['text_product'] = $language->get('text_product');
		$data['text_model'] = $language->get('text_model');
		$data['text_quantity'] = $language->get('text_quantity');
		$data['text_price'] = $language->get('text_price');
		$data['text_total'] = $language->get('text_total');
		$data['text_footer'] = $language->get('text_footer');

		$data['logo'] = $order_info['store_url'] . 'image/' . $this->config->get('config_logo');
		$data['store_name'] = $order_info['store_name'];
		$data['store_url'] = $order_info['store_url'];
		$data['customer_id'] = $order_info['customer_id'];
		$data['link'] = $order_info['store_url'] . 'index.php?route=account/order/info&order_id=' . $order_info['order_id'];

	/*	if ($download_status) {
			$data['download'] = $order_info['store_url'] . 'index.php?route=account/download';
		} else {
			$data['download'] = '';
		}*/

		$data['order_id'] = $order_info['order_id'];
		$data['date_added'] = date($language->get('date_format_short'), strtotime($order_info['date_added']));
		$data['payment_method'] = $order_info['payment_method'];
		$data['shipping_method'] = $order_info['shipping_method'];
		$data['email'] = $order_info['email'];
		$data['telephone'] = $order_info['telephone'];
		$data['ip'] = $order_info['ip'];

		$order_status_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE order_status_id = '" . (int)$order_status_id . "' AND language_id = '" . (int)$order_info['language_id'] . "'");
	
		if ($order_status_query->num_rows) {
			$data['order_status'] = $order_status_query->row['name'];
		} else {
			$data['order_status'] = '';
		}

		if ($comment && $notify) {
			$data['comment'] = nl2br($comment);
		} else {
			$data['comment'] = '';
		}

		if ($order_info['payment_address_format']) {
			$format = $order_info['payment_address_format'];
		} else {
			$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
		}

		$find = array(
			'{firstname}',
			'{lastname}',
			'{company}',
			'{address_1}',
			'{address_2}',
			'{city}',
			'{postcode}',
			'{zone}',
			'{zone_code}',
			'{country}'
		);

		$replace = array(
			'firstname' => $order_info['payment_firstname'],
			'lastname'  => $order_info['payment_lastname'],
			'company'   => $order_info['payment_company'],
			'address_1' => $order_info['payment_address_1'],
			'address_2' => $order_info['payment_address_2'],
			'city'      => $order_info['payment_city'],
			'postcode'  => $order_info['payment_postcode'],
			'zone'      => $order_info['payment_zone'],
			'zone_code' => $order_info['payment_zone_code'],
			'country'   => $order_info['payment_country']
		);

		$data['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

		if ($order_info['shipping_address_format']) {
			$format = $order_info['shipping_address_format'];
		} else {
			$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
		}

		$find = array(
			'{firstname}',
			'{lastname}',
			'{company}',
			'{address_1}',
			'{address_2}',
			'{city}',
			'{postcode}',
			'{zone}',
			'{zone_code}',
			'{country}'
		);

		$replace = array(
			'firstname' => $order_info['shipping_firstname'],
			'lastname'  => $order_info['shipping_lastname'],
			'company'   => $order_info['shipping_company'],
			'address_1' => $order_info['shipping_address_1'],
			'address_2' => $order_info['shipping_address_2'],
			'city'      => $order_info['shipping_city'],
			'postcode'  => $order_info['shipping_postcode'],
			'zone'      => $order_info['shipping_zone'],
			'zone_code' => $order_info['shipping_zone_code'],
			'country'   => $order_info['shipping_country']
		);

		$data['shipping_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

		$this->load->model('tool/upload');

	
	
	//
	
		// Products
		$data['products'] = array();

		foreach ($order_products as $order_product) {
			$option_data = array();

			$order_options = $this->model_checkout_order->getOrderOptions($order_info['order_id'], $order_product['order_product_id']);

			foreach ($order_options as $order_option) {
				if ($order_option['type'] != 'file') {
					$value = $order_option['value'];
				} else {
					$upload_info = $this->model_tool_upload->getUploadByCode($order_option['value']);

					if ($upload_info) {
						$value = $upload_info['name'];
					} else {
						$value = '';
					}
				}

				$option_data[] = array(
					'name'  => $order_option['name'],
					'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
				);
			}

			$data['products'][] = array(
				'name'     => $order_product['name'],
				'model'    => $order_product['model'],
				'option'   => $option_data,
				'quantity' => $order_product['quantity'],
				'price'    => $this->currency->format($order_product['price'] + ($this->config->get('config_tax') ? $order_product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
				'total'    => $this->currency->format($order_product['total'] + ($this->config->get('config_tax') ? ($order_product['tax'] * $order_product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value'])
			);
		}

		// Vouchers
		$data['vouchers'] = array();

		$order_vouchers = $this->model_checkout_order->getOrderVouchers($order_info['order_id']);

		foreach ($order_vouchers as $order_voucher) {
			$data['vouchers'][] = array(
				'description' => $order_voucher['description'],
				'amount'      => $this->currency->format($order_voucher['amount'], $order_info['currency_code'], $order_info['currency_value']),
			);
		}

		// Order Totals
		$data['totals'] = array();
		
		$order_totals = $this->model_checkout_order->getOrderTotals($order_info['order_id']);

		foreach ($order_totals as $order_total) {
			$data['totals'][] = array(
				'title' => $order_total['title'],
				'text'  => $this->currency->format($order_total['value'], $order_info['currency_code'], $order_info['currency_value']),
			);
		}
	
		$this->load->model('setting/setting');
		
		$from = $this->model_setting_setting->getSettingValue('config_email', $order_info['store_id']);
		
		if (!$from) {
			$from = $this->config->get('config_email');
		}
		
			
	
	//
	/////
	
	
	$email=$order_info['email'];
		$ignorEmail='noemailkonfulononline.com';
		if  (  substr($order_info['email'], strpos($order_info['email'], "@") + 1) !==  $ignorEmail )
		{
			$this->log->write("if mail");
		$mail = new Mail($this->config->get('config_mail_engine'));
		$mail->parameter = $this->config->get('config_mail_parameter');
		$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
		$mail->smtp_username = $this->config->get('config_mail_smtp_username');
		$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
		$mail->smtp_port = $this->config->get('config_mail_smtp_port');
		$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

		$mail->setTo($order_info['email']);
		$mail->setFrom($from);
		$mail->setSender(html_entity_decode($order_info['store_name'], ENT_QUOTES, 'UTF-8'));
		$mail->setSubject(html_entity_decode(sprintf($language->get('text_subject'), $order_info['store_name'], $order_info['order_id']), ENT_QUOTES, 'UTF-8'));
		$mail->setHtml($this->load->view('mail/order_add', $data));
			$this->log->write("before send mail");
			$this->log->write($mail);
		$mail->send();
		$this->log->write("after send mail");
	}
	
	
	     //Send firebase notifiation
			   
			   $this->load->model('checkout/order');
			   $order_info1 = $this->model_checkout_order->getOrder($order_info['order_id']);
			   $this->load->model('account/customer');
			 $customer_info = $this->model_account_customer->getCustomer($order_info1['customer_id']);
			 $log = new Log('notificationorder.log');
			   //$log->write($order_info1);
			   //$log->write($customer_info);
			  
			  /*  require_once(DIR_SYSTEM . 'notification/notification.php');
				$log->write("test");
				
				 $notification = new Notification();
			  
						$title = 'Order Successful';
						$message = 'Dear '.$customer_info['firstname']. ' Your Order No. '.$order_info1['order_id'].' has been Added. ' ;
						$imageUrl ='';
						$action='';
						$actionDestination ='';
						$firebase_token = $customer_info['token'];
						$firebase_api = 'AAAALrhPccY:APA91bHGTNfjXr8dg26OVgtlrFEexP8TJWN7sAPwkjLb8-nGYjIiuo_aF3RXW8ZlCfzqmwZ_pLP3_I85HllEro42a94KfwJc8sIEbxRw52PM9QOTLLMXxGBUfUEilYsp0shmgE8r3vOg';
			  $notification->setTitle($title);
						$notification->setMessage($message);
						$notification->setImage($imageUrl);
						$notification->setAction($action);
						$notification->setActionDestination($actionDestination);
						
						$requestData = $notification->getNotificatin();
						 $log->write($requestData);
						
						$fields = array(
								'to' => $firebase_token,
								'data' => $requestData,
							);
						//	 $log->write($fields);
							// Set POST variables
						$url = 'https://fcm.googleapis.com/fcm/send';
 
						$headers = array(
							'Authorization: key=' . $firebase_api,
							'Content-Type: application/json'
						);*/
						// Open connection
			   $title = 'Order Successful';
			   $message = 'Dear '.$customer_info['firstname']. ' Your Order No. '.$order_info1['order_id'].' has been Added. ' ;
			   
			   $log->write($title);
			   $log->write($message);
			   
			   $firebase_token = $customer_info['token'];
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_POST, 1);
						//curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"to\":\ePpFPbR1oHU:APA91bFhsMXxvDo7v0iHrw8kuZHxX31YppFKX65tSNYqbl6xTgasrFIZIkq9h66GcQs-HjFqgBL9YCB_Dz1M_p3Kh_M5U-SPeJ7K6dJ-MHrfE90ZMp9jxT97N6Bkblq98Xyf-SMgoVVQ\",\"notification\":{\"body\":\"Your Order has been Updated\",\"title\":\"Test Ecom Server\"},\"priority\":10}");
						//curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"to\":\"".$firebase_token."\",\"notification\":{\"body\":\"".$message."\",\"title\":\"Order Successful\"},\"priority\":10}");
						curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"to\":\"".$firebase_token."\",\"notification\":{\"body\":\"".$message."\",\"title\":\"".$title."\"},\"priority\":10}");
						$headers = array();
						$headers[] = 'Authorization: key=AAAALrhPccY:APA91bHGTNfjXr8dg26OVgtlrFEexP8TJWN7sAPwkjLb8-nGYjIiuo_aF3RXW8ZlCfzqmwZ_pLP3_I85HllEro42a94KfwJc8sIEbxRw52PM9QOTLLMXxGBUfUEilYsp0shmgE8r3vOg';
						$headers[] = 'Content-Type: application/json';
						curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
						
						 $log->write($ch);
						$result1 = curl_exec($ch);
					//	echo($result);
						if (curl_errno($ch)) {
					//	    echo 'Error:' . curl_error($ch);
						}
						curl_close($ch);
						
						
			   $log->write($result1);
			  
			  //

	
	
	
	////
			/*$curl = curl_init();
        
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);
        curl_setopt($curl, CURLOPT_USERAGENT, 'OpenCart Two Factor Authentication');
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_FORBID_REUSE, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, 'https://47.74.221.54/index.php?route=mail/order&add');
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($order_info));
        
        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            $curl_error = 'Sucess cURL Error ' . curl_errno($curl) . ': ' . curl_error($curl);
        } else {
            $curl_error = '';
        }
        
        if ($curl_error) {
            $this->log->write($curl_error);
        }
        
        if ($this->config->get('smsalert_debug')) {
            $this->log->write($response);
        }
        
        curl_close($curl);*/
			
	
	/////
	
	

			
			$this->cart->clear();

			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['guest']);
			unset($this->session->data['comment']);
			unset($this->session->data['order_id']);
			unset($this->session->data['coupon']);
			unset($this->session->data['reward']);
			unset($this->session->data['voucher']);
			unset($this->session->data['vouchers']);
			unset($this->session->data['totals']);
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_basket'),
			'href' => $this->url->link('checkout/cart')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_checkout'),
			'href' => $this->url->link('checkout/checkout', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_success'),
			'href' => $this->url->link('checkout/success')
		);

		if ($this->customer->isLogged()) {
			$data['text_message'] = sprintf($this->language->get('text_customer'), $this->url->link('account/account', '', true), $this->url->link('account/order', '', true), $this->url->link('account/download', '', true), $this->url->link('information/contact'));
		} else {
			$data['text_message'] = sprintf($this->language->get('text_guest'), $this->url->link('information/contact'));
		}

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/success', $data));
	}
	
	 public function sucess()
 {
	    $this->log->write("test"); 
 }
}