<?php
/**
 * confirm.php
 *
 * Confirm order
 *
 * @author     Opencart-api.com
 * @copyright  2017
 * @license    License.txt
 * @version    2.0
 * @link       https://opencart-api.com/product/shopping-cart-rest-api/
 * @documentations https://opencart-api.com/opencart-rest-api-documentations/
 */

require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestConfirm extends RestController
{

    const PAY_RIGHT_NOW = 'pay_right_now';
    const ROUTE_OF_CONFIRMATION = 'route_of_confirmation';
    const AUTOMATIC_PAY_BUTTON_CLICK = 'automatic_pay_button_click';

    private static $paymentMethods = array(
        "authorizenet_aim" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "bank_transfer" => array(
            self::PAY_RIGHT_NOW => false,
            self::ROUTE_OF_CONFIRMATION => "payment/bank_transfer/confirm",
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "cheque" => array(
            self::PAY_RIGHT_NOW => false,
            self::ROUTE_OF_CONFIRMATION => "payment/cheque/confirm",
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "cod" => array(
            self::PAY_RIGHT_NOW => false,
            self::ROUTE_OF_CONFIRMATION => "payment/cod/confirm",
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "free_checkout" => array(
            self::PAY_RIGHT_NOW => false,
            self::ROUTE_OF_CONFIRMATION => "payment/free_checkout/confirm",
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "klarna_account" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "klarna_invoice" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "liqpay" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "moneybookers" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "nochex" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "paymate" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "paypoint" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "payza" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "payu" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "perpetual_payments" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "pp_express" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "pp_pro" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "pp_pro_iframe" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "pp_pro_pf" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "pp_pro_uk" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "pp_standard" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "sagepay" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "sagepay_direct" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "sagepay_us" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "skrill" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "twocheckout" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "worldpay" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "multisafepay" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "multisafepay_amex" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "multisafepay_banktrans" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "multisafepay_dirdeb" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "multisafepay_directbank" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "multisafepay_giropay" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "multisafepay_ideal" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => false
        ),
        "multisafepay_maestro" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "multisafepay_mastercard" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "multisafepay_mistercash" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "multisafepay_payafter" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "multisafepay_paypal" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "multisafepay_visa" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "multisafepay_wallet" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "bpm" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "pasargad" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
        "ccavenue" => array(
            self::PAY_RIGHT_NOW => true,
            self::ROUTE_OF_CONFIRMATION => null,
            self::AUTOMATIC_PAY_BUTTON_CLICK => true
        ),
    );

    public function confirm()
    {

        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
            $this->saveOrderToDatabase();
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->confirmOrder();
        } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            return $this->confirmOrder("payment");
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("GET", "POST", "PUT");
        }

        $this->sendResponse();
    }

    public function saveOrderToDatabase()
    {


        $this->load->model('checkout/order');
        $this->load->model('account/order');

        if (isset($this->session->data['order_id'])) {
            $order_status_id = 1;
            $cod_status = $this->config->get('payment_cod_order_status_id');

            if (!empty($cod_status)) {
                $order_status_id = $cod_status;
            }
            if (!isset($this->session->data['payment_method']) || empty($this->session->data['payment_method'])) {
                $this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $order_status_id, isset($this->session->data['comment']) ? $this->session->data['comment'] : '');
            } else {
                $status = $this->model_account_order->getOrderStatusById($this->session->data['order_id']);
                if (empty($status)) {
                    $defaultStatus = $this->config->get("payment_" . $this->session->data['payment_method']['code'] . '_order_status_id');
                    $defaultStatus = is_null($defaultStatus) ? $order_status_id : $defaultStatus;

                    $this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $defaultStatus, isset($this->session->data['comment']) ? $this->session->data['comment'] : '');
                }
            }


            if (isset($this->session->data['order_id'])) {
                $this->json['data']['order_id'] = $this->session->data['order_id'];
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

                if(isset($this->session->data['tracking'])){
                    unset($this->session->data['tracking']);
                }

            }
        } else {
            $this->json["error"][] = "No order in session";
        }
    }

    public function confirmOrder($page = "confirm")
    {
        if ($this->cart->hasShipping()) {
            // Validate if shipping address has been set.
            if (!isset($this->session->data['shipping_address'])) {
                $this->json["error"][] = "Empty shipping address.";
            }

            // Validate if shipping method has been set.
            if (!isset($this->session->data['shipping_method'])) {
                $this->json["error"][] = "Shipping method validation failed.";

            }
        } else {
            unset($this->session->data['shipping_address']);
            unset($this->session->data['shipping_method']);
            unset($this->session->data['shipping_methods']);
        }

        // Validate if payment address has been set.
        if (!isset($this->session->data['payment_address'])) {
            $this->json["error"][] = "Empty payment address.";
        }

        // Validate if payment method has been set.
        if (!isset($this->session->data['payment_method'])) {
            $this->json["error"][] = "Empty payment method.";
        }

        // Validate cart has products and has stock.
        if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
            $this->json["error"][] = "Your cart is empty or a product is out of stock";
            return false;
        }

        // Validate minimum quantity requirements.
        $products = $this->cart->getProducts();

        foreach ($products as $product) {
            $product_total = 0;

            foreach ($products as $product_2) {
                if ($product_2['product_id'] == $product['product_id']) {
                    $product_total += $product_2['quantity'];
                }
            }

            if ($product['minimum'] > $product_total) {
                $this->json["error"][] = "Product minimum is greater than product total";
                break;
            }
        }

        if (empty($this->json["error"])) {

            $order_data = array();
            $totals = array();

            $order_data['totals'] = array();
            $total = 0;
            $taxes = $this->cart->getTaxes();


            // Because __call can not keep var references so we put them into an array.
            $total_data = array(
                'totals' => &$totals,
                'taxes' => &$taxes,
                'total' => &$total
            );


            $this->load->model('setting/extension');

            $sort_order = array();

            $results = $this->model_setting_extension->getExtensions('total');

            foreach ($results as $key => $value) {
                $sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
            }

            array_multisort($sort_order, SORT_ASC, $results);

            foreach ($results as $result) {
                if ($this->config->get('total_' . $result['code'] . '_status')) {
                    $this->load->model('extension/total/' . $result['code']);

                    // We have to put the totals in an array so that they pass by reference.
                    $this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
                }
            }

            $sort_order = array();

            foreach ($totals as $key => $value) {
                $sort_order[$key] = $value['sort_order'];
            }

            array_multisort($sort_order, SORT_ASC, $totals);

            $order_data['totals'] = $totals;

            $this->load->language('checkout/checkout');

            $order_data['invoice_prefix'] = $this->config->get('config_invoice_prefix');
            $order_data['store_id'] = $this->config->get('config_store_id');
            $order_data['store_name'] = $this->config->get('config_name');

            if ($this->request->server['HTTPS']) {
                $order_data['store_url'] = HTTPS_SERVER;
            } else {
                $order_data['store_url'] = HTTP_SERVER;
            }

            if ($this->customer->isLogged()) {
                $this->load->model('account/customer');

                $customer_info = $this->model_account_customer->getCustomer($this->customer->getId());

                $order_data['customer_id'] = $this->customer->getId();
                $order_data['customer_group_id'] = $customer_info['customer_group_id'];
                $order_data['firstname'] = $customer_info['firstname'];
                $order_data['lastname'] = $customer_info['lastname'];
                $order_data['email'] = $customer_info['email'];
                $order_data['telephone'] = $customer_info['telephone'];
                $order_data['fax'] = $customer_info['fax'];
                $order_data['custom_field'] = json_decode($customer_info['custom_field'], true);

            } elseif (isset($this->session->data['guest'])) {
                $order_data['customer_id'] = 0;
                $order_data['customer_group_id'] = $this->session->data['guest']['customer_group_id'];
                $order_data['firstname'] = $this->session->data['guest']['firstname'];
                $order_data['lastname'] = $this->session->data['guest']['lastname'];
                $order_data['email'] = $this->session->data['guest']['email'];
                $order_data['telephone'] = $this->session->data['guest']['telephone'];
                $order_data['fax'] = $this->session->data['guest']['fax'];
                $order_data['custom_field'] = $this->session->data['guest']['custom_field'];
            } else {
                $this->json["error"][] = "Please login or set user data";
            }

            if (empty($this->json["error"])) {
                $order_data['payment_firstname'] = $this->session->data['payment_address']['firstname'];
                $order_data['payment_lastname'] = $this->session->data['payment_address']['lastname'];
                $order_data['payment_company'] = $this->session->data['payment_address']['company'];
                $order_data['payment_address_1'] = $this->session->data['payment_address']['address_1'];
                $order_data['payment_address_2'] = $this->session->data['payment_address']['address_2'];
                $order_data['payment_city'] = $this->session->data['payment_address']['city'];
                $order_data['payment_postcode'] = $this->session->data['payment_address']['postcode'];
                $order_data['payment_zone'] = $this->session->data['payment_address']['zone'];
                $order_data['payment_zone_id'] = $this->session->data['payment_address']['zone_id'];
                $order_data['payment_country'] = $this->session->data['payment_address']['country'];
                $order_data['payment_country_id'] = $this->session->data['payment_address']['country_id'];
                $order_data['payment_address_format'] = $this->session->data['payment_address']['address_format'];
                $order_data['payment_custom_field'] = $this->session->data['payment_address']['custom_field'];


					 $this->log->write("Confirm API log");
					$this->log->write("Session payment method ".$this->session->data['payment_method']);
                if (isset($this->session->data['payment_method'])) {
                   // $order_data['payment_method'] = $this->session->data['payment_method'];
				   
					if ($this->session->data['payment_method'] ==='realex')
					{
						$order_data['payment_method'] ='PIPay';
					}
					elseif ( $this->session->data['payment_method'] ==='globalpay')
					{
						$order_data['payment_method'] ='ABAPayway';
					}
					elseif ( $this->session->data['payment_method'] ==='cod')
					{
						$order_data['payment_method'] ='CashOnDelivery';
					}
					else
					{
						$order_data['payment_method'] ='';
					}
				   
				   
                } else {
                    $order_data['payment_method'] = '';
                }
$this->log->write("set payment method ".$order_data['payment_method']);
           //     if (isset($this->session->data['payment_method']['code'])) {
            //        $order_data['payment_code'] = $this->session->data['payment_method']['code'];
             //   } else {
              //      $order_data['payment_code'] = '';
             //   }
             
                if (isset($this->session->data['payment_method'])) {
                  //  $order_data['payment_code'] = $this->session->data['payment_method'];
				  
				  if ( $this->session->data['payment_method'] ==='realex')
					{
						$order_data['payment_code'] ='PIPay';
					}
					elseif ( $this->session->data['payment_method'] ==='globalpay')
					{
						$order_data['payment_code'] ='ABAPayway';
					}
					elseif ( $this->session->data['payment_method'] ==='cod')
					{
						$order_data['payment_code'] ='CashOnDelivery';
					}
					else
					{
						$order_data['payment_code'] ='';
					}
				  
				  
                } else {
                    $order_data['payment_code'] = '';
                }

$this->log->write("set payment code ".$order_data['payment_code']);

                if ($this->cart->hasShipping()) {
                    $order_data['shipping_firstname'] = $this->session->data['shipping_address']['firstname'];
                    $order_data['shipping_lastname'] = $this->session->data['shipping_address']['lastname'];
                    $order_data['shipping_company'] = $this->session->data['shipping_address']['company'];
                    $order_data['shipping_address_1'] = $this->session->data['shipping_address']['address_1'];
                    $order_data['shipping_address_2'] = $this->session->data['shipping_address']['address_2'];
                    $order_data['shipping_city'] = $this->session->data['shipping_address']['city'];
                    $order_data['shipping_postcode'] = $this->session->data['shipping_address']['postcode'];
                    $order_data['shipping_zone'] = $this->session->data['shipping_address']['zone'];
                    $order_data['shipping_zone_id'] = $this->session->data['shipping_address']['zone_id'];
                    $order_data['shipping_country'] = $this->session->data['shipping_address']['country'];
                    $order_data['shipping_country_id'] = $this->session->data['shipping_address']['country_id'];
                    $order_data['shipping_address_format'] = $this->session->data['shipping_address']['address_format'];
                    $order_data['shipping_custom_field'] = isset($this->session->data['shipping_address']['custom_field']) ? $this->session->data['shipping_address']['custom_field'] : array();

                    if (isset($this->session->data['shipping_method']['title'])) {
                        $order_data['shipping_method'] = $this->session->data['shipping_method']['title'];
                    } else {
                        $order_data['shipping_method'] = '';
                    }

                    if (isset($this->session->data['shipping_method']['code'])) {
                        $order_data['shipping_code'] = $this->session->data['shipping_method']['code'];
                    } else {
                        $order_data['shipping_code'] = '';
                    }
                } else {
                    $order_data['shipping_firstname'] = '';
                    $order_data['shipping_lastname'] = '';
                    $order_data['shipping_company'] = '';
                    $order_data['shipping_address_1'] = '';
                    $order_data['shipping_address_2'] = '';
                    $order_data['shipping_city'] = '';
                    $order_data['shipping_postcode'] = '';
                    $order_data['shipping_zone'] = '';
                    $order_data['shipping_zone_id'] = '';
                    $order_data['shipping_country'] = '';
                    $order_data['shipping_country_id'] = '';
                    $order_data['shipping_address_format'] = '';
                    $order_data['shipping_custom_field'] = array();
                    $order_data['shipping_method'] = '';
                    $order_data['shipping_code'] = '';
                }

                $order_data['products'] = array();

                foreach ($this->cart->getProducts() as $product) {
                    $option_data = array();

                    foreach ($product['option'] as $option) {
                        $option_data[] = array(
                            'product_option_id' => $option['product_option_id'],
                            'product_option_value_id' => $option['product_option_value_id'],
                            'option_id' => $option['option_id'],
                            'option_value_id' => $option['option_value_id'],
                            'name' => $option['name'],
                            'value' => $option['value'],
                            'type' => $option['type']
                        );
                    }

                    $order_data['products'][] = array(
                        'product_id' => $product['product_id'],
                        'name' => $product['name'],
                        'model' => $product['model'],
                        'option' => $option_data,
                        'download' => $product['download'],
                        'quantity' => $product['quantity'],
                        'subtract' => $product['subtract'],
                        'price' => $product['price'],
                        'total' => $product['total'],
                        'tax' => $this->tax->getTax($product['price'], $product['tax_class_id']),
                        'reward' => $product['reward']
                    );
                }

                // Gift Voucher
                $order_data['vouchers'] = array();

                if (!empty($this->session->data['vouchers'])) {
                    foreach ($this->session->data['vouchers'] as $voucher) {
                        $order_data['vouchers'][] = array(
                            'description' => $voucher['description'],
                            'code' => substr(md5(mt_rand()), 0, 10),
                            'to_name' => $voucher['to_name'],
                            'to_email' => $voucher['to_email'],
                            'from_name' => $voucher['from_name'],
                            'from_email' => $voucher['from_email'],
                            'voucher_theme_id' => $voucher['voucher_theme_id'],
                            'message' => $voucher['message'],
                            'amount' => $voucher['amount']
                        );
                    }
                }

                $order_data['comment'] = $this->session->data['comment'];

                $order_data['total'] = $total_data['total'];


                if (isset($this->session->data['tracking']) && !empty($this->session->data['tracking'])) {
                    $order_data['tracking'] = $this->session->data['tracking'];

                    $subtotal = $this->cart->getSubTotal();

                    // Affiliate
                    $affiliate_info = $this->model_account_customer->getAffiliateByTracking($this->session->data['tracking']);

                    if ($affiliate_info) {
                        $order_data['affiliate_id'] = $affiliate_info['customer_id'];
                        $order_data['commission'] = ($subtotal / 100) * $affiliate_info['commission'];
                    } else {
                        $order_data['affiliate_id'] = 0;
                        $order_data['commission'] = 0;
                    }

                    // Marketing
                    $this->load->model('checkout/marketing');

                    $marketing_info = $this->model_checkout_marketing->getMarketingByCode($this->session->data['tracking']);

                    if ($marketing_info) {
                        $order_data['marketing_id'] = $marketing_info['marketing_id'];
                    } else {
                        $order_data['marketing_id'] = 0;
                    }
                } else {
                    $order_data['affiliate_id'] = 0;
                    $order_data['commission'] = 0;
                    $order_data['marketing_id'] = 0;
                    $order_data['tracking'] = '';
                }

                $order_data['language_id'] = $this->config->get('config_language_id');
                $order_data['currency_id'] = $this->currency->getId($this->currency->getRestCurrencyCode());
                $order_data['currency_code'] = $this->currency->getRestCurrencyCode();
                $order_data['currency_value'] = $this->currency->getValue($this->currency->getRestCurrencyCode());

                $order_data['ip'] = $this->request->server['REMOTE_ADDR'];

                if (!empty($this->request->server['HTTP_X_FORWARDED_FOR'])) {
                    $order_data['forwarded_ip'] = $this->request->server['HTTP_X_FORWARDED_FOR'];
                } elseif (!empty($this->request->server['HTTP_CLIENT_IP'])) {
                    $order_data['forwarded_ip'] = $this->request->server['HTTP_CLIENT_IP'];
                } else {
                    $order_data['forwarded_ip'] = '';
                }

                if (isset($this->request->server['HTTP_USER_AGENT'])) {
                    $order_data['user_agent'] = $this->request->server['HTTP_USER_AGENT'];
                } else {
                    $order_data['user_agent'] = '';
                }

                if (isset($this->request->server['HTTP_ACCEPT_LANGUAGE'])) {
                    $order_data['accept_language'] = $this->request->server['HTTP_ACCEPT_LANGUAGE'];
                } else {
                    $order_data['accept_language'] = '';
                }

                $this->load->model('checkout/order');

                $data = $order_data;

                if (!isset($this->request->get['page']) && $page == "confirm") {
                    $this->session->data['order_id'] = $this->model_checkout_order->addOrder($order_data);
                    $data['order_id'] = $this->session->data['order_id'];
                }

                $this->load->model('tool/upload');
                $this->load->model('tool/image');

                $data['products'] = array();

                foreach ($this->cart->getProducts() as $product) {
                    $option_data = array();

                    foreach ($product['option'] as $option) {
                        if ($option['type'] != 'file') {
                            $value = $option['value'];
                        } else {
                            $upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

                            if ($upload_info) {
                                $value = $upload_info['name'];
                            } else {
                                $value = '';
                            }
                        }

                        $option_data[] = array(
                            'name' => $option['name'],
                            'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
                        );
                    }

                    $recurring = '';

                    if ($product['recurring']) {
                        $frequencies = array(
                            'day' => $this->language->get('text_day'),
                            'week' => $this->language->get('text_week'),
                            'semi_month' => $this->language->get('text_semi_month'),
                            'month' => $this->language->get('text_month'),
                            'year' => $this->language->get('text_year'),
                        );

                        if ($product['recurring']['trial']) {
                            $recurring = sprintf($this->language->get('text_trial_description'), $this->currency->format($this->tax->calculate($product['recurring']['trial_price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['trial_cycle'], $frequencies[$product['recurring']['trial_frequency']], $product['recurring']['trial_duration']) . ' ';
                        }

                        if ($product['recurring']['duration']) {
                            $recurring .= sprintf($this->language->get('text_payment_description'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
                        } else {
                            $recurring .= sprintf($this->language->get('text_payment_cancel'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
                        }

                    }

                    if (isset($product['image']) && !empty($product['image']) && file_exists(DIR_IMAGE . $product['image'])) {
                        $image = $this->model_tool_image->resize($product['image'], $this->config->get('config_shopping_cart_rest_api_image_width'), $this->config->get('config_shopping_cart_rest_api_image_height'));
                    } else {
                        $image = $this->model_tool_image->resize('no_image.png', $this->config->get('config_shopping_cart_rest_api_image_width'), $this->config->get('config_shopping_cart_rest_api_image_height'));
                    }

                    $data['products'][] = array(
                        'key' => isset($product['cart_id']) ? $product['cart_id'] : (isset($product['key']) ? $product['key'] : ""),
                        'product_id' => $product['product_id'],
                        'name' => $product['name'],
                        'model' => $product['model'],
                        'option' => $option_data,
                        'recurring' => $recurring,
                        'image' => $image,
                        'quantity' => $product['quantity'],
                        'subtract' => $product['subtract'],
                        'price' => $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->currency->getRestCurrencyCode()),
                        'total' => $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')) * $product['quantity'], $this->currency->getRestCurrencyCode()),
                        'href' => ""
                    );
                }


                // Gift Voucher
                $data['vouchers'] = array();

                if (!empty($this->session->data['vouchers'])) {
                    foreach ($this->session->data['vouchers'] as $voucher) {
                        $data['vouchers'][] = array(
                            'description' => $voucher['description'],
                            'amount' => $this->currency->format($voucher['amount'], $this->currency->getRestCurrencyCode())
                        );
                    }
                }

                $data['totals'] = array();

                foreach ($order_data['totals'] as $total) {
                    $data['totals'][] = array(
                        'title' => $total['title'],
                        'text' => $this->currency->format($total['value'], $this->currency->getRestCurrencyCode()),
                    );
                }

                $data['order_id'] = $this->session->data['order_id'];

               
                $this->session->data['order_id_mobile']=$this->session->data['order_id'];
                $this->log->write("Confirm API log Order");
                $this->log->write("Session order id : ".$this->session->data['order_id']);
                $this->log->write("Session mobile order id : ".$this->session->data['order_id_mobile']);
              //  $data['payment'] = $this->load->controller('extension/payment/' . $this->session->data['payment_method']['code']);
                $data['payment'] = $this->load->controller('extension/payment/' . $this->session->data['payment_method']);

                $this->json["data"] = $data;
            }
        }

        if (!isset($this->request->get['page']) && $page == "confirm") {
        } else {
            if (isset($this->session->data['order_id']) && !empty($this->session->data['order_id'])) {
                return $this->pay($data);
            } else {
                $this->json["error"][] = "No order in session";
            }
        }
    }


    private function pay($data)
    {
        $this->response->addHeader('Content-Type: text/html');

        $data['styles'] = $this->document->getStyles();
        $data['scripts'] = $this->document->getScripts();

        $this->template = 'checkout/restapi_pay';

        $data['payment'] = $this->load->controller('extension/payment/' . $this->session->data['payment_method']['code']);

        $data['autosubmit'] = false;

        if (isset(static::$paymentMethods[$this->session->data['payment_method']['code']])) {
            $method = static::$paymentMethods[$this->session->data['payment_method']['code']];
            if ($method[self::PAY_RIGHT_NOW] === true) {
                if ($method[self::AUTOMATIC_PAY_BUTTON_CLICK] === true) {
                    $data['autosubmit'] = true;
                }
            } else {
                $method = static::$paymentMethods[$this->session->data['payment_method']['code']];
                $this->load->controller($method[self::ROUTE_OF_CONFIRMATION]);
            }
        }

        $this->response->setOutput($this->load->view($this->template, $data));
    }
}