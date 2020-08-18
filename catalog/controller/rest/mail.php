<?php

require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestMail extends RestController {

    public function index()
    {
        // $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->send();
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("POST");
        }

        $this->sendResponse();
    }

    public function send(){

        $this->load->language('api/voucher');
        $this->load->language('mail/voucher');
        if (isset($this->request->get['id'])) {
            $this->load->model('extension/module/cron');

            $cron_id = $this->request->get['id'];
            $cron_info = $this->model_extension_module_cron->getCron($cron_id);
            $customer_group_id =  $cron_info['customer_group'];

            $customer_email = $this->model_extension_module_cron->getCustomerEmailByCustomerGroupId($customer_group_id);
        
            $data['title'] = $cron_info['campaign_name'];
            $data['store_name'] = $this->config->get('config_name');
            $data['message'] = "Good morning Beloved Customer";

            $mail = new Mail($this->config->get('config_mail_engine'));
            $mail->parameter = $this->config->get('config_mail_parameter');
            $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
            $mail->smtp_username = $this->config->get('config_mail_smtp_username');
            $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
            $mail->smtp_port = $this->config->get('config_mail_smtp_port');
            $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

            foreach ($customer_email as $email) {
                $mail->setTo($email);
                $mail->setFrom($this->config->get('config_email'));
                $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                $mail->setSubject(sprintf($this->language->get('text_subject'), html_entity_decode($cron_info['campaign_name'], ENT_QUOTES, 'UTF-8')));
                $mail->setHtml($this->load->view('mail/voucher', $data));
                $mail->send();
            }

            $this->json['data'] = 'Mail has been sent successfully';
            
		}

       
    }

}
