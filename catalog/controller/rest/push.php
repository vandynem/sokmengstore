<?php

require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestPush extends RestController {

    public function pushNotification(){

        if (isset($this->request->get['id'])) {

			$log = new Log('notificationflashsale.log');
			$log->write($customer);
			// $log->write("test");
			$this->load->model('extension/module/cron');
			$cron_info = $this->model_extension_module_cron->getCron($cron_id);
			$test = $cron_info['customer_group'];
			var_dump($test,"here");
			$json = array();

			$cron_id = $this->request->get['id'];

			// $json['title'] = $this->request->post['title'];
			$json['title'] = "សួរស្តី អតិថិជនជាទីស្រឡាញ់";
			$json['message'] = $this->request->post['message'] ;
			$firebase_api = 'AAAA3KZs6c0:APA91bEM20VQ41JqfUImxJdfz3MOoOCkyg-bipCWpWwo4nPA4r5CtMepKNR-lG8WcrmVsW2VMYdlY4MqITJ784f2S3c0dRfHW5b0VIExffFWwE3gC4s_OTLhNTNbK7GuPdxOyj4jjnns';
			
			// $token='konfulonPramotions';
			
			//$title = 'Order Successful';
			//$message = 'Dear '.$customer_info['firstname']. ' Your Order No. '.$order_info1['order_id'].' has been Added. ' ;
			
			
			//echo $message;
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			// curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"to\":\"eqhawKzvQh6e2f6vVZv7UE:APA91bEo2JWp6OrPbM6rENzINwDfCcikxhDUM6XRcw9M8JxiAG08MjUK8hHzMNwGqJgofyrYdCBtz3MZqE3x9IMkuXzt5kk5_f1YQ8sgF1HWK6TyP_i1d_8zD3V0QqzjjAJAfP20EE-0\",\"notification\":{\"body\":\"Your Order has been Updated\",\"title\":\"Hello Emily\"},\"priority\":10}");
			// curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"to\":\"/topics/konfulonPramotions\",\"notification\":{\"body\":\"".$message."\",\"title\":\"".$title."\"},\"priority\":10}");
			curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"to\":\"eqhawKzvQh6e2f6vVZv7UE:APA91bEo2JWp6OrPbM6rENzINwDfCcikxhDUM6XRcw9M8JxiAG08MjUK8hHzMNwGqJgofyrYdCBtz3MZqE3x9IMkuXzt5kk5_f1YQ8sgF1HWK6TyP_i1d_8zD3V0QqzjjAJAfP20EE-0\",\"notification\":{\"body\":\"".$json['message']."\",\"title\":\"".$json['title']."\"},\"priority\":10}");
			$headers = array();
			$headers[] = 'Authorization: key=AAAA3KZs6c0:APA91bEM20VQ41JqfUImxJdfz3MOoOCkyg-bipCWpWwo4nPA4r5CtMepKNR-lG8WcrmVsW2VMYdlY4MqITJ784f2S3c0dRfHW5b0VIExffFWwE3gC4s_OTLhNTNbK7GuPdxOyj4jjnns';
			$headers[] = 'Content-Type: application/json';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$result = curl_exec($ch);
			//echo($result);
			if (curl_errno($ch)) {
				echo 'Error:' . curl_error($ch);
			}
			curl_close($ch);
			
			
			$log->write($result);
			
			// $this->load->language('marketing/flashsale');
		
			// $this->json['data'] = 'Message has been pushed successfully';
			
			$this->response->setOutput(json_encode("Message has been pushed successfully"));

		}else{
			$this->response->setOutput(json_encode("fail"));
		}
    }

}
