<?php
class ModelExtensionPaymentGlobalpay extends Model {
	public function getMethod($address, $total) {
		$this->load->language('extension/payment/globalpay');

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('payment_globalpay_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");

		if ($this->config->get('payment_globalpay_total') > 0 && $this->config->get('payment_globalpay_total') > $total) {
			$status = false;
		} elseif (!$this->config->get('payment_globalpay_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}

		$method_data = array();

		if ($status) {
			$method_data = array(
				'code'       => 'globalpay',
				'title'      => $this->language->get('text_title'),
				'terms'      => '',
				'sort_order' => $this->config->get('payment_globalpay_sort_order')
			);
		}

		return $method_data;
	}

	public function addOrder($order_info, $pas_ref, $auth_code, $account, $order_ref) {
		if ($this->config->get('payment_globalpay_auto_settle') == 1) {
			$settle_status = 1;
		} else {
			$settle_status = 0;
		}

		$this->db->query("INSERT INTO `" . DB_PREFIX . "globalpay_order` SET `order_id` = '" . (int)$order_info['order_id'] . "', `settle_type` = '" . (int)$this->config->get('payment_globalpay_auto_settle') . "', `order_ref` = '" . $this->db->escape($order_ref) . "', `order_ref_previous` = '" . $this->db->escape($order_ref) . "', `date_added` = now(), `date_modified` = now(), `capture_status` = '" . (int)$settle_status . "', `currency_code` = '" . $this->db->escape($order_info['currency_code']) . "', `pasref` = '" . $this->db->escape($pas_ref) . "', `pasref_previous` = '" . $this->db->escape($pas_ref) . "', `authcode` = '" . $this->db->escape($auth_code) . "', `account` = '" . $this->db->escape($account) . "', `total` = '" . $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false) . "'");

		return $this->db->getLastId();
	}

	public function addTransaction($globalpay_order_id, $type, $order_info) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "globalpay_order_transaction` SET `globalpay_order_id` = '" . (int)$globalpay_order_id . "', `date_added` = now(), `type` = '" . $this->db->escape($type) . "', `amount` = '" . $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false) . "'");
	}

	public function addHistory($order_id, $order_status_id, $comment) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "order_history SET order_id = '" . (int)$order_id . "', order_status_id = '" . (int)$order_status_id . "', notify = '0', comment = '" . $this->db->escape($comment) . "', date_added = NOW()");
	}

	public function logger($message) {
		if ($this->config->get('payment_globalpay_debug') == 1) {
			$log = new Log('globalpay.log');
			$log->write($message);
		}
	}
	
	public function getOrderStatus($orderid,$hash) {
	    
	    
	    $post_data = array(
	        'tran_id'			=> $orderid,
	        'hash'			=> $hash
	       
	    );
	  
		$this->log->write("ABA model ");
	    $this->log->write($orderid);
	    $this->log->write("hash to check:".$hash);
	    $curl = curl_init();
	    
	    curl_setopt($curl, CURLOPT_HEADER, false);
	    curl_setopt($curl, CURLINFO_HEADER_OUT, true);
	    curl_setopt($curl, CURLOPT_USERAGENT, 'OpenCart Two Factor Authentication');
	    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	    curl_setopt($curl, CURLOPT_FORBID_REUSE, false);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($curl, CURLOPT_URL, 'https://payway.ababank.com/api/pwkonfulonk/check/transaction/');
	    curl_setopt($curl, CURLOPT_POST, true);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post_data));
	    
	    $response = curl_exec($curl);
	  //  $this->log->write($curl);
	    
	    if (curl_errno($curl)) {
	        $curl_error = 'SmsAlert cURL Error ' . curl_errno($curl) . ': ' . curl_error($curl);
	    } else {
	        $curl_error = '';
	    }
	    
	    if ($curl_error) {
	        $this->log->write($curl_error);
	    }
	    
	    if ($this->config->get('smsalert_debug')) {
	        $this->log->write($response);
	    }
	    
	    curl_close($curl);
	    //$this->log->write(print_r($response));
	    return json_decode($response, true);
	    
	    
	}
}