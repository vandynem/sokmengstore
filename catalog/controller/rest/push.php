<?php

require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestPush extends RestController {

    public function index()
    {
        // $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->pushNotification();
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("POST");
        }

        $this->sendResponse();
    }

    public function pushNotification(){
        $this->load->language('api/voucher');

        if (isset($this->request->get['id'])) {

            $this->load->model('extension/module/cron');
            $cron_id = $this->request->get['id'];
            $cron_info = $this->model_extension_module_cron->getCron($cron_id);
            // Now
            $current =  date('Y-m-d'); 

            // Start Cron Job Date
            $date = strtotime($cron_info['start_at']);
			$start_date = date('Y-m-d', $date);

			if($current >= $start_date){

                $title = $cron_info['campaign_name'];
                $message = $cron_info['campaign_desc'] ;
                $firebase_api = 'AAAA3KZs6c0:APA91bEM20VQ41JqfUImxJdfz3MOoOCkyg-bipCWpWwo4nPA4r5CtMepKNR-lG8WcrmVsW2VMYdlY4MqITJ784f2S3c0dRfHW5b0VIExffFWwE3gC4s_OTLhNTNbK7GuPdxOyj4jjnns';
                $vandy = 'cg0uJOUySUmJizBRq1a8FW:APA91bGC4_PAJ993K8yFUX7ca9ln-hwgXqGTuxiFqJIdOMlulQN4TKHplEpzmpvae8_cYnPNGDjOxZsmP5QsN-s5KITvG7hdmdiDUQrH2V5Xi7e36tDCqdgM87I-x2g_d6Nvxm2pt0-C';
                
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"to\":\"".$vandy."\",\"notification\":{\"body\":\"".$message."\",\"title\":\"".$title."\"},\"priority\":10}");
                $headers = array();
                $headers[] = 'Authorization: key=' .$firebase_api;
                $headers[] = 'Content-Type: application/json';
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_exec($ch);
                
                if (curl_errno($ch)) {
                    echo 'Error:' . curl_error($ch);
                }
                curl_close($ch);
                $this->json['data'] = 'Notification sent successfully';
            } else {
                $this->json['data'] = 'Coming soon';
            }
		}else{
			$this->json['error']['push'] = $this->language->get('error_email');
		}
    }

}
