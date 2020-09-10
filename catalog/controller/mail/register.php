<?php
class ControllerMailRegister extends Controller {
	public function index(&$route, &$args, &$output) {
		$this->load->language('mail/register');

		$data['text_welcome'] = sprintf($this->language->get('text_welcome'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
		$data['text_login'] = $this->language->get('text_login');
		$data['text_approval'] = $this->language->get('text_approval');
		$data['text_service'] = $this->language->get('text_service');
		$data['text_thanks'] = $this->language->get('text_thanks');

		$this->load->model('account/customer_group');
			
		if (isset($args[0]['customer_group_id'])) {
			$customer_group_id = $args[0]['customer_group_id'];
		} else {
			$customer_group_id = $this->config->get('config_customer_group_id');
		}
					
		$customer_group_info = $this->model_account_customer_group->getCustomerGroup($customer_group_id);
		
		if ($customer_group_info) {
			$data['approval'] = $customer_group_info['approval'];
		} else {
			$data['approval'] = '';
		}
			
		$data['login'] = $this->url->link('account/login', '', true);		
		$data['store'] = html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8');

		$mail = new Mail($this->config->get('config_mail_engine'));
		$mail->parameter = $this->config->get('config_mail_parameter');
		$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
		$mail->smtp_username = $this->config->get('config_mail_smtp_username');
		$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
		$mail->smtp_port = $this->config->get('config_mail_smtp_port');
		$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

		$mail->setTo($args[0]['email']);
		$mail->setFrom($this->config->get('config_email'));
		$mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
		$mail->setSubject(sprintf($this->language->get('text_subject'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8')));
		$mail->setText($this->load->view('mail/register', $data));
		$mail->send(); 
	}
	
	public function alert(&$route, &$args, &$output) {
		// Send to main admin email if new account email is enabled
		if (in_array('account', (array)$this->config->get('config_mail_alert'))) {
			$this->load->language('mail/register');
			
			$data['text_signup'] = $this->language->get('text_signup');
			$data['text_firstname'] = $this->language->get('text_firstname');
			$data['text_lastname'] = $this->language->get('text_lastname');
			$data['text_customer_group'] = $this->language->get('text_customer_group');
			$data['text_email'] = $this->language->get('text_email');
			$data['text_telephone'] = $this->language->get('text_telephone');
			
			$data['firstname'] = $args[0]['firstname'];
			$data['lastname'] = $args[0]['lastname'];
			
			$this->load->model('account/customer_group');
			
			if (isset($args[0]['customer_group_id'])) {
				$customer_group_id = $args[0]['customer_group_id'];
			} else {
				$customer_group_id = $this->config->get('config_customer_group_id');
			}
			
			$customer_group_info = $this->model_account_customer_group->getCustomerGroup($customer_group_id);
			
			if ($customer_group_info) {
				$data['customer_group'] = $customer_group_info['name'];
			} else {
				$data['customer_group'] = '';
			}
			
			$data['email'] = $args[0]['email'];
			$data['telephone'] = $args[0]['telephone'];

			$mail = new Mail($this->config->get('config_mail_engine'));
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

			$mail->setTo($this->config->get('config_email'));
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode($this->language->get('text_new_customer'), ENT_QUOTES, 'UTF-8'));
			$mail->setText($this->load->view('mail/register_alert', $data));
			$mail->send();

			// Send to additional alert emails if new account email is enabled
			$emails = explode(',', $this->config->get('config_mail_alert_email'));

			foreach ($emails as $email) {
				if (utf8_strlen($email) > 0 && filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$mail->setTo($email);
					$mail->send();
				}
			}
		}	
	}

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