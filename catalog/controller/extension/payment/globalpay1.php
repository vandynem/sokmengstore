<?php
class ControllerExtensionPaymentGlobalpay extends Controller {
	public function index() {
		$this->load->language('extension/payment/globalpay');

		$this->load->model('checkout/order');

		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

		if ($this->config->get('payment_globalpay_live_demo') == 1) {
			$data['action'] = $this->config->get('payment_globalpay_live_url');
		} else {
			$data['action'] = $this->config->get('payment_globalpay_demo_url');
		}

		/*if ($this->config->get('payment_globalpay_card_select') == 1) {
			$card_types = array(
				'visa' => $this->language->get('text_card_visa'),
				'mc' => $this->language->get('text_card_mc'),
				'amex' => $this->language->get('text_card_amex'),
				'switch' => $this->language->get('text_card_switch'),
				'laser' => $this->language->get('text_card_laser'),
				'diners' => $this->language->get('text_card_diners'),
			);*/

		/*	$data['cards'] = array();

			$accounts = $this->config->get('payment_globalpay_account');

			foreach ($accounts as $card => $account) {
				if (isset($account['enabled']) && $account['enabled'] == 1) {
					$data['cards'][] = array(
						'type' => $card_types[$card],
						'account' => (isset($account['default']) && $account['default'] == 1 ? $this->config->get('payment_globalpay_merchant_id') : $account['merchant_id']),
					);
				}
			}

			$data['card_select'] = true;
		} else {
			$data['card_select'] = false;
		}*/

		//if ($this->config->get('payment_globalpay_auto_settle') == 0) {
		//	$data['settle'] = 0;
		//} elseif ($this->config->get('payment_globalpay_auto_settle') == 1) {
		//	$data['settle'] = 1;
		//} elseif ($this->config->get('payment_globalpay_auto_settle') == 2) {
		//	$data['settle'] = 'MULTI';
	//	}

		$data['tss'] = (int)$this->config->get('payment_globalpay_tss_check');
		$data['merchant_id'] = $this->config->get('payment_globalpay_merchant_id');

		$data['timestamp'] = strftime("%Y%m%d%H%M%S");
		//$data['order_id'] = $this->session->data['order_id'] . 'T' . $data['timestamp'] . mt_rand(1, 999);
		$data['order_id'] = $this->session->data['order_id'];

		$data['amount'] = round($this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false)*100);
		$data['currency'] = $order_info['currency_code'];

		$tmp = $data['timestamp'] . '.' . $data['merchant_id'] . '.' . $data['order_id'] . '.' . $data['amount'] . '.' . $data['currency'];
		$hash = sha1($tmp);
		$tmp = $hash . '.' . $this->config->get('payment_globalpay_secret');
		$data['hash'] = sha1($tmp);

		$data['billing_code'] = filter_var(str_replace('-', '', $order_info['payment_postcode']), FILTER_SANITIZE_NUMBER_INT) . '|' . filter_var(str_replace('-', '', $order_info['payment_address_1']), FILTER_SANITIZE_NUMBER_INT);
		$data['payment_country'] = $order_info['payment_iso_code_2'];

		if ($this->cart->hasShipping()) {
			$data['shipping_code'] = filter_var(str_replace('-', '', $order_info['shipping_postcode']), FILTER_SANITIZE_NUMBER_INT) . '|' . filter_var(str_replace('-', '', $order_info['shipping_address_1']), FILTER_SANITIZE_NUMBER_INT);
			$data['shipping_country'] = $order_info['shipping_iso_code_2'];
		} else {
			$data['shipping_code'] = filter_var(str_replace('-', '', $order_info['payment_postcode']), FILTER_SANITIZE_NUMBER_INT) . '|' . filter_var(str_replace('-', '', $order_info['payment_address_1']), FILTER_SANITIZE_NUMBER_INT);
			$data['shipping_country'] = $order_info['payment_iso_code_2'];
		}

		$data['response_url'] = HTTPS_SERVER . 'index.php?route=extension/payment/globalpay/notify';
		
		$data['api_key'] = $this->config->get('payment_globalpay_secret');
		
		$data['merchant_id'] = $this->config->get('payment_globalpay_merchant_id');
		$data['transactionId'] = $this->session->data['order_id'];
		$data['amount'] = $order_info['total'];
		$data['firstName'] = $order_info['firstname'];
		$data['lastName'] = $order_info['lastname'];
		$data['phone'] =  $order_info['telephone'];
		$data['email'] =  $order_info['email'];
		
		$data['hash'] = base64_encode(hash_hmac('sha512', $data['merchant_id'] .$data['transactionId'] . $data['amount'], $data['api_key'], true));
		$this->log->write("hash post:".$data['hash']);
		$this->session->data['order_totalforcheckout'] = $order_info['total'];
		return $this->load->view('extension/payment/globalpay', $data);
	}

	public function notify() {
		$this->load->model('extension/payment/globalpay');

		$this->model_extension_payment_globalpay->logger(print_r($this->request->post, 1));

		$this->load->language('extension/payment/globalpay');

		
			$this->load->model('checkout/order');
			
			$order_info = $this->model_checkout_order->getOrder($this->request->get['orderID']);
			
			$data['api_key'] = $this->config->get('payment_globalpay_secret');
			
			$data['merchant_id'] = $this->config->get('payment_globalpay_merchant_id');
			$data['transactionId'] = $this->session->data['order_id'];
			$data['order_totalforcheckout']=$this->session->data['order_totalforcheckout'];
			
			
			
			//$data['hash'] = base64_encode(hash_hmac('sha512', $data['merchant_id'] .$data['transactionId'] . $order_info['total'], $data['api_key'], true));
			$data['hash'] = base64_encode(hash_hmac('sha512', $data['merchant_id'].$data['transactionId'],$data['api_key'] , true));
			
			$order_status = $this->model_extension_payment_globalpay->getOrderStatus( $this->session->data['order_id'],$data['hash']);

			
			$this->model_extension_payment_globalpay->logger(print_r($order_status));
		
			$order_id=$this->session->data['order_id'];

		

			if ($order_status['status'] == "0") {
				$globalpay_order_id = $this->model_extension_payment_globalpay->addOrder($order_info, $this->request->post['PASREF'], $this->request->post['AUTHCODE'], $this->request->post['ACCOUNT'], $this->request->post['ORDER_ID']);

				if ($auto_settle == 1) {
					$this->model_extension_payment_globalpay->addTransaction($globalpay_order_id, 'payment', $order_info);
					$this->model_checkout_order->addOrderHistory($order_id, $this->config->get('globalpay_order_status_success_settled_id'), $message, false);
				} else {
					$this->model_extension_payment_globalpay->addTransaction($globalpay_order_id, 'auth', 0.00);
					$this->model_checkout_order->addOrderHistory($order_id, $this->config->get('payment_globalpay_order_status_success_unsettled_id'), $message, false);
				}
				//$this->model_checkout_order->confirm((int)$this->session->data['order_id'], (int)$this->config->get('paypal_order_status_id'));
				$data['text_response'] = $this->language->get('text_success');
				$data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/success', '', true));
			} elseif ($order_status['status'] == "1") {
				// Decline
				$this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_id'), $message);
				$data['text_response'] = $this->language->get('text_decline');
				$data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
			} elseif ($order_status['status'] == "2") {
				// Referal B
				$this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_pending_id'), $message);
				$data['text_response'] = $this->language->get('text_decline');
				$data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
			} elseif ($order_status['status'] == "3") {
				// Referal A
				$this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_stolen_id'), $message);
				$data['text_response'] = $this->language->get('text_decline');
				$data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
			} elseif ($order_status['status'] == "4") {
				// Error Connecting to Bank
				$this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_bank_id'), $message);
				$data['text_response'] = $this->language->get('text_bank_error');
				$data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
			} elseif ($order_status['status'] == "11") {
				// Error Connecting to Bank
				$this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_bank_id'), $message);
				$data['text_response'] = $this->language->get('text_bank_error');
				$data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
			}  else {
				// Other error
				$this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_id'), $message);
				$data['text_response'] = $this->language->get('text_generic_error');
				$data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
			}
		

		$this->response->setOutput($this->load->view('extension/payment/globalpay_response', $data));
	}
	
	public function notify_mobile() {
	    $this->load->model('extension/payment/globalpay');
	    
	    $this->model_extension_payment_globalpay->logger(print_r($this->request->post, 1));
	    
	    $this->load->language('extension/payment/globalpay');
	    
	    
	    $this->load->model('checkout/order');
	    
	    $order_info = $this->model_checkout_order->getOrder($this->request->get['orderID']);
	    
	    $data['api_key'] = $this->config->get('payment_globalpay_secret');
	    
	    $data['merchant_id'] = $this->config->get('payment_globalpay_merchant_id');
	    $data['transactionId'] = $this->session->data['order_id'];
	    $data['order_totalforcheckout']=$this->session->data['order_totalforcheckout'];
	    
	    
	    
	   // $data['hash'] = base64_encode(hash_hmac('sha512', $data['merchant_id'] .$data['transactionId'] . $order_info['total'], $data['api_key'], true));
	    $data['hash'] = base64_encode(hash_hmac('sha512', $data['merchant_id'].$data['transactionId'],$data['api_key'] , true));
	    
	    $order_status = $this->model_extension_payment_globalpay->getOrderStatus( $this->session->data['order_id'],$data['hash']);
	    
	    
	    $this->model_extension_payment_globalpay->logger(print_r($order_status));
	    
	    $order_id=$this->session->data['order_id'];
	    
	    
	    
	    if ($order_status['status'] == "0") {
	        $globalpay_order_id = $this->model_extension_payment_globalpay->addOrder($order_info, $this->request->post['PASREF'], $this->request->post['AUTHCODE'], $this->request->post['ACCOUNT'], $this->request->post['ORDER_ID']);
	        
	        if ($auto_settle == 1) {
	            $this->model_extension_payment_globalpay->addTransaction($globalpay_order_id, 'payment', $order_info);
	            $this->model_checkout_order->addOrderHistory($order_id, $this->config->get('globalpay_order_status_success_settled_id'), $message, false);
	        } else {
	            $this->model_extension_payment_globalpay->addTransaction($globalpay_order_id, 'auth', 0.00);
	            $this->model_checkout_order->addOrderHistory($order_id, $this->config->get('payment_globalpay_order_status_success_unsettled_id'), $message, false);
	        }
	        $this->model_checkout_order->confirm((int)$this->session->data['order_id'], (int)$order_status['status']);
	        //$this->model_checkout_order->confirm((int)$this->session->data['order_id'], (int)$this->config->get('paypal_order_status_id'));
	       // $data['text_response'] = $this->language->get('text_success');
	        $data['text_response']=$data['hash'].'-'.$data['description'];
	        $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/success', '', true));
	    } elseif ($order_status['status'] == "1") {
	        // Decline
	        $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_id'), $message);
	       // $data['text_response'] = $this->language->get('text_decline');
	        $data['text_response']=$data['hash'].'-'.$data['description'];
	        $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
	    } elseif ($order_status['status'] == "2") {
	        // Referal B
	        $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_pending_id'), $message);
	      //  $data['text_response'] = $this->language->get('text_decline');
	        $data['text_response']=$data['hash'].'-'.$data['description'];
	        $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
	    } elseif ($order_status['status'] == "3") {
	        // Referal A
	        $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_stolen_id'), $message);
	       // $data['text_response'] = $this->language->get('text_decline');
	        $data['text_response']=$data['hash'].'-'.$data['description'];
	        $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
	    } elseif ($order_status['status'] == "4") {
	        // Error Connecting to Bank
	        $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_bank_id'), $message);
	      //  $data['text_response'] = $this->language->get('text_bank_error');
	        $data['text_response']=$data['hash'].'-'.$data['description'];
	        $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
	    } elseif ($order_status['status'] == "11") {
	        // Error Connecting to Bank
	        $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_bank_id'), $message);
	      //  $data['text_response'] = $this->language->get('text_bank_error');
	        $data['text_response']=$data['hash'].'-'.$data['description'];
	        $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
	    }  else {
	        // Other error
	        $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_id'), $message);
	    //    $data['text_response'] = $this->language->get('text_generic_error');
	        $data['text_response']=$data['hash'].'-'.$data['description'];
	        $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
	    }
	    
	    
	    $this->response->setOutput($this->load->view('extension/payment/globalpay_response_mobile', $data));
	}
	
	
}