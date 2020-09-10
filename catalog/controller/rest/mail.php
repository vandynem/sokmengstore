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

        $this->load->model('extension/module/cron');
        $this->load->model('account/customer');

        if (isset($this->request->get['id'])) {

            $cron_id = $this->request->get['id'];
            $cron_info = $this->model_extension_module_cron->getCron($cron_id);
            // Now
            $current =  date('Y-m-d'); 

            // Start Cron Job Date
            $date = strtotime($cron_info['start_at']);
            $start_date = date('Y-m-d', $date);

            if($current >= $start_date){
                $customer = $cron_info['customer'];
                $emails = array();

                switch ($customer) {
                    case 'All':
                        $customer_data = array(
                            'start' => ($page - 1) * 10,
                            'limit' => 100
                        );

                        $this->load->model('customer/customer');

                        $results = $this->model_customer_customer->getCustomers($customer_data);

                        foreach ($results as $result) {
                            $emails[] = $result['email'];
                        }
                        break;
                    case 'Group':

                        $customer_group_id =  $cron_info['customer_group'];
                        $results = $this->model_extension_module_cron->getCustomerEmailByCustomerGroupId($customer_group_id);

                        foreach ($results as $result) {
                            $emails[] = $result['email'];
                        }
                        break;
                } // End of Check Customer

                if ($emails) {
                    $this->json['data'] = 'Mail sent successfully';
                    
                    foreach ($emails as $email) {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                            $data['title'] = $cron_info['campaign_name'];
                            $data['store_name'] = $this->config->get('config_name');
                            $data['message'] = $cron_info['campaign_desc'];

                            $mail = new Mail($this->config->get('config_mail_engine'));
                            $mail->parameter = $this->config->get('config_mail_parameter');
                            $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
                            $mail->smtp_username = $this->config->get('config_mail_smtp_username');
                            $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
                            $mail->smtp_port = $this->config->get('config_mail_smtp_port');
                            $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

                            $mail->setTo($email);
                            $mail->setFrom($this->config->get('config_email'));
                            $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                            $mail->setSubject(html_entity_decode($cron_info['campaign_name'], ENT_QUOTES, 'UTF-8'));
                            $mail->setHtml($this->load->view('mail/voucher', $data));
                            $mail->send();
                        }
                    } // End of Loop Email
                } else {
                    $this->json['error']['email'] = $this->language->get('error_email');
                }
            } // End Of Check Date
        }// End of Check Param Id
        
    }
}
