<?php
class ControllerEventStatistics extends Controller {
	// model/catalog/review/addReview/after
	public function addReview(&$route, &$args, &$output) {
		$this->load->model('report/statistics');

		$this->model_report_statistics->addValue('review', 1);	
	}
		
	// model/account/return/addReturn/after
	public function addReturn(&$route, &$args, &$output) {
		$this->load->model('report/statistics');

		$this->model_report_statistics->addValue('return', 1);	
	}
	
	// model/checkout/order/addOrderHistory/before
	public function addOrderHistory(&$route, &$args, &$output) {
		$this->load->model('checkout/order');
			
		$order_info = $this->model_checkout_order->getOrder($args[0]);

		if ($order_info) {
			
			 $this->log->write('okay statistics');
				$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL, 'https://konfulononline.com/index.php?route=checkout/sendnofiy');
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_POST, 1);
						curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
						
						 curl_setopt($ch, CURLOPT_TIMEOUT, 1);
						 curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
						//curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"to\":\ePpFPbR1oHU:APA91bFhsMXxvDo7v0iHrw8kuZHxX31YppFKX65tSNYqbl6xTgasrFIZIkq9h66GcQs-HjFqgBL9YCB_Dz1M_p3Kh_M5U-SPeJ7K6dJ-MHrfE90ZMp9jxT97N6Bkblq98Xyf-SMgoVVQ\",\"notification\":{\"body\":\"Your Order has been Updated\",\"title\":\"Test Ecom Server\"},\"priority\":10}");
						//curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"to\":\"".$firebase_token."\",\"notification\":{\"body\":\"".$message."\",\"title\":\"Order Successful\"},\"priority\":10}");
						curl_setopt($ch, CURLOPT_POSTFIELDS, "order_id=".$args[0]."&postvar2=".$args[1]."");
						//$headers = array();
						//$headers[] = 'Authorization: key=AAAALrhPccY:APA91bHGTNfjXr8dg26OVgtlrFEexP8TJWN7sAPwkjLb8-nGYjIiuo_aF3RXW8ZlCfzqmwZ_pLP3_I85HllEro42a94KfwJc8sIEbxRw52PM9QOTLLMXxGBUfUEilYsp0shmgE8r3vOg';
						//$headers[] = 'Content-Type: application/json';
						//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
						
						 
						$result1 = curl_exec($ch);
					//	echo($result);
						if (curl_errno($ch)) {
					//	    echo 'Error:' . curl_error($ch);
					 $this->log->write('curl error');
					$this->log->write(curl_error($ch));
						}
						
			$this->log->write("order_id=".$args[0]."&postvar2=".$args[1]."");
			$this->log->write($result1);
			 $this->log->write(curl_getinfo($ch));
			curl_close($ch);
			
			
			$this->load->model('report/statistics');
			
			// If order status in complete or proccessing add value to sale total
			if (in_array($args[1], array_merge($this->config->get('config_processing_status'), $this->config->get('config_complete_status')))) {
				$this->model_report_statistics->addValue('order_sale', $order_info['total']);	
			}
			
			// If order status not in complete or proccessing remove value to sale total
			if (!in_array($args[1], array_merge($this->config->get('config_processing_status'), $this->config->get('config_complete_status')))) {
				$this->model_report_statistics->removeValue('order_sale', $order_info['total']);
			}
			
			// Remove from processing status if new status is not array
			if (in_array($order_info['order_status_id'], $this->config->get('config_processing_status')) && !in_array($args[1], $this->config->get('config_processing_status'))) {
				$this->model_report_statistics->removeValue('order_processing', 1);
			}
			
			// Add to processing status if new status is not array		
			if (!in_array($order_info['order_status_id'], $this->config->get('config_processing_status')) && in_array($args[1], $this->config->get('config_processing_status'))) {
				$this->model_report_statistics->addValue('order_processing', 1);
			}
			
			// Remove from complete status if new status is not array
			if (in_array($order_info['order_status_id'], $this->config->get('config_complete_status')) && !in_array($args[1], $this->config->get('config_complete_status'))) {
				$this->model_report_statistics->removeValue('order_complete', 1);
			}
			
			// Add to complete status if new status is not array		
			if (!in_array($order_info['order_status_id'], $this->config->get('config_complete_status')) && in_array($args[1], $this->config->get('config_complete_status'))) {
				$this->model_report_statistics->addValue('order_complete', 1);
			}			
		}
	}
}