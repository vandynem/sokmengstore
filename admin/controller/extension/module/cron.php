<?php
class ControllerExtensionModuleCron extends Controller {
	private $error = array();
	
	public function index() {
		$this->load->language('extension/module/cron');

		if (!$this->config->get('module_cron_status')) {
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module'));
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('extension/module/cron');

		$this->getList();
	}

	public function add() {
		$this->load->language('extension/module/cron');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('extension/module/cron');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$start_at = $this->request->post['start_at'] ;
			$time_at = $this->request->post['start_time_at'];

			$dateAndTime = $start_at.' '.$time_at; 
			$date = strtotime($dateAndTime); 
			$date_time = date('Y-m-d h:i:s', $date); 

			$this->model_extension_module_cron->addCron(
				$this->request->post['campaign_name'],
				$this->request->post['campaign_desc'], 
				$this->request->post['customer_group'], 
				$date_time,
				$this->request->post['repeat_on'],
				$this->request->post['notif_type'],
				$this->request->post['notif_content']
			);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('extension/module/cron');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('extension/module/cron');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$start_at = $this->request->post['start_at'] ;
			$time_at = $this->request->post['start_time_at'];

			$input = $start_at.' '.$time_at; 
			$date = strtotime($input); 
			$date_time = date('Y-m-d h:i:s', $date); 

			$this->model_extension_module_cron->editCron(
				$this->request->get['cron_id'], 
				$this->request->post['campaign_name'],
				$this->request->post['campaign_desc'], 
				$this->request->post['customer_group'], 
				$date_time,
				$this->request->post['repeat_on'],
				$this->request->post['notif_type'],
				$this->request->post['notif_content']
			);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('extension/module/cron');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('extension/module/cron');

		if (isset($this->request->post['selected'])) {
			foreach ($this->request->post['selected'] as $cron_id) {
				$this->model_extension_module_cron->deleteCron($cron_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'] . $url));
		}

		$this->getList();
	}

	public function enable() {
		$this->load->language('extension/module/cron');

		$json = array();

		if (isset($this->request->get['cron_id'])) {
			$cron_id = $this->request->get['cron_id'];
		} else {
			$cron_id = 0;
		}

		if (!$this->user->hasPermission('modify', 'extension/module/cron')) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			$this->load->model('extension/module/cron');

			$this->model_extension_module_cron->editStatus($cron_id, 1);
			
			$cron_info = $this->model_extension_module_cron->getCron($cron_id);
			$cron_id = $cron_info['cron_id'];

			$cront_start_at = $cron_info['start_at'];
			$date = strtotime($cront_start_at);
			$hour = date('h', $date);
			$minute = date('i', $date);

			// $cron_time = $minute.' '.$hour.' * * *';
			
            if($cron_info['notif_type'] == 'email'){
				if($cron_info['repeat_on'] == 'daily'){

					$cron_time = $minute.' '.$hour.' * * *';
					$this->execCron($cron_id, $cron_time);
				} elseif ($cron_info['repeat_on'] == 'weekly'){

					$cron_time = $minute.' '.$hour.' * * 1';
					$this->execCron($cron_id, $cron_time);
				} elseif ($cron_info['repeat_on'] == 'monthly'){ 

					$cron_time = $minute.' '.$hour.' 1 * *';
					$this->execCron($cron_id, $cron_time);
				} else {
					$json['success'] = $this->language->get('Repeat_On is None');
				}
			} else {
				if($cron_info['repeat_on'] == 'daily'){

					$cron_time = $minute.' '.$hour.' * * *';
					$this->execCron($cron_id, $cron_time);
				} elseif ($cron_info['repeat_on'] == 'weekly'){

					$cron_time = $minute.' '.$hour.' * * 1';
					$this->execCron($cron_id, $cron_time);
				} elseif ($cron_info['repeat_on'] == 'monthly'){ 

					$cron_time = $minute.' '.$hour.' 1 * *';
					$this->execCron($cron_id, $cron_time);
				} else {
					$json['success'] = $this->language->get('Repeat_On is None');
				}	
			}
            $json['success'] = $this->language->get('Cron Job start working');
        }

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function disable() {
		$this->load->language('extension/module/cron');

		$json = array();

		if (isset($this->request->get['cron_id'])) {
			$cron_id = $this->request->get['cron_id'];
		} else {
			$cron_id = 0;
		}

		if (!$this->user->hasPermission('modify', 'extension/module/cron')) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			$this->load->model('extension/module/cron');

			$this->model_extension_module_cron->editStatus($cron_id, 0);

			$cron_info = $this->model_extension_module_cron->getCron($cron_id);
			$cron_id = $cron_info['cron_id'];
			
            if($cron_info['notif_type'] == 'email'){

				if($cron_info['repeat_on'] == 'daily'){
					$time = '# * * * * *';
					$this->execCron($cron_id, $time);
				} elseif ($cron_info['repeat_on'] == 'weekly'){
					$time ='# 00 8 * * 1'; 
					$this->execCron($cron_id, $time);
				} elseif ($cron_info['repeat_on'] == 'monthly'){ 
					$time ='# 00 8 1 * *'; 
					$this->execCron($cron_id, $time);
				} else {
					$json['success'] = $this->language->get('Repeat_On is None');
				}
			} else {

				if($cron_info['repeat_on'] == 'daily'){
					$time = '# * * * * *';
					$this->execCron($cron_id, $time);
				} elseif ($cron_info['repeat_on'] == 'weekly'){
					$time ='# 00 8 * * 1'; 
					$this->execCron($cron_id, $time);
				} elseif ($cron_info['repeat_on'] == 'monthly'){ 
					$time ='# 00 8 1 * *'; 
					$this->execCron($cron_id, $time);
				} else {
					$json['success'] = $this->language->get('Repeat_On is None');
				}	
			}

			$json['success'] = $this->language->get('status disable success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function install() {
		$this->load->model('setting/setting');

		$settings['module_cron_status'] = 1;

		$this->model_setting_setting->editSetting('module_cron', $settings);

		$this->load->model('extension/module/cron');

		$this->model_extension_module_cron->install();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'campaign_name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'] . $url)
		);


		$data['add'] = $this->url->link('extension/module/cron/add', 'user_token=' . $this->session->data['user_token']);
		$data['delete'] = $this->url->link('extension/module/cron/delete', 'user_token=' . $this->session->data['user_token'] . $url);
		
		// url 
		$data['cron'] = $this->url->link('extension/cron');

		$data['crons'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$cron_total = $this->model_extension_module_cron->getTotalCrons();

		$results = $this->model_extension_module_cron->getCrons($filter_data);

		foreach ($results as $result) {
			$data['crons'][] = array(
				'cron_id'       => $result['cron_id'],
				'campaign_name' => $result['campaign_name'],
				'campaign_desc' => $result['campaign_desc'],
				'customer_group'=> $result['customer_group'],
				'start_at'      => $result['start_at'],
				'repeat_on'     => $result['repeat_on'],
				'notif_type'    => $result['notif_type'],
				'notif_content' => $result['notif_content'],
				'created_on' 	=> $result['created_on'],
				'updated_on' 	=> $result['updated_on'],
				'edit'          => $this->url->link('extension/module/cron/edit', 'user_token=' . $this->session->data['user_token'] . '&cron_id=' . $result['cron_id'], true)
			);
		}

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
            $data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_campaign_name'] = $this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'] . '&sort=campaign_name' . $url);
		$data['sort_campaign_desc'] = $this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'] . '&sort=campaign_desc' . $url);
		$data['sort_customer_group'] = $this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'] . '&sort=customer_group' . $url);
		$data['sort_start_at'] = $this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'] . '&sort=start_at' . $url);
		$data['sort_repeat_on'] = $this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'] . '&sort=repeat_on' . $url);
		$data['sort_notification_type'] = $this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'] . '&sort=notif_type' . $url);
		$data['sort_notification_content'] = $this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'] . '&sort=notif_content' . $url);
		$data['sort_created_on'] = $this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'] . '&sort=created_on' . $url);
		$data['sort_updated_on'] = $this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'] . '&sort=updated_on' . $url);


		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$data['pagination'] = $this->load->controller('common/pagination', array(
			'total' => $cron_total,
			'page'  => $page,
			'limit' => $this->config->get('config_limit_admin'),
			'url'   => $this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}')
		));

		$data['results'] = sprintf($this->language->get('text_pagination'), ($cron_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($cron_total - $this->config->get('config_limit_admin'))) ? $cron_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $cron_total, ceil($cron_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/cron/list', $data));
	}

	protected function getForm() {
		if (isset($this->error)) {
			foreach($this->error as $key => $error) {
				$data['error_' . $key] = $error;
			}
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$url = '';
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}
		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}
		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_name'),
			'href' => $this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['cron_id'])) {
			$data['form_action'] = $this->url->link('extension/module/cron/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['form_action'] = $this->url->link('extension/module/cron/edit', 'user_token=' . $this->session->data['user_token'] . '&cron_id=' . $this->request->get['cron_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('extension/module/cron', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['cron_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$cron_info = $this->model_extension_module_cron->getCron($this->request->get['cron_id']);
		}

		if (!empty($cron_info)) {
			$data['cron_id'] = $cron_info['cron_id'];
		} else {
			$data['cron_id'] = '';
		}

		if (isset($this->request->post['campaign_name'])) {
			$data['campaign_name'] = $this->request->post['campaign_name'];
		} elseif (!empty($cron_info)) {
			$data['campaign_name'] = $cron_info['campaign_name'];
		} else {
			$data['campaign_name'] = '';
		}

		if (isset($this->request->post['campaign_desc'])) {
			$data['campaign_desc'] = $this->request->post['campaign_desc'];
		} elseif (!empty($cron_info)) {
			$data['campaign_desc'] = $cron_info['campaign_desc'];
		} else {
			$data['campaign_desc'] = '';
		}

		$this->load->model('customer/customer_group');

		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		if (isset($this->request->post['customer_group'])) {
			$data['customer_group'] = $this->request->post['customer_group'];
		} elseif (!empty($cron_info)) {
			$data['customer_group'] = $cron_info['customer_group'];
		} else {
			$data['customer_group'] = $this->config->get('config_customer_group_id');
		}

		if (isset($this->request->post['start_at'])) {
			$data['start_at'] = $this->request->post['start_at'];
		} elseif (!empty($cron_info)) {
			$data['start_at'] = $cron_info['start_at'];
		} else {
			$data['start_at'] = '';
		}

		if (isset($this->request->post['start_time_at'])) {
			$data['start_time_at'] = $this->request->post['start_time_at'];
		} elseif (!empty($cron_info)) {
			$data['start_time_at'] = $cron_info['start_time_at'];
		} else {
			$data['start_time_at'] = '';
		}

		if (isset($this->request->post['repeate_on'])) {
			$data['repeate_on'] = $this->request->post['repeate_on'];
		} elseif (!empty($cron_info)) {
			$data['repeate_on'] = $cron_info['repeate_on'];
		} else {
			$data['repeate_on'] = 'None';
		}

		if (isset($this->request->post['notif_type'])) {
			$data['notif_type'] = $this->request->post['notif_type'];
		} elseif (!empty($cron_info)) {
			$data['notif_type'] = $cron_info['notif_type'];
		} else {
			$data['notif_type'] = '';
		}

		if (isset($this->request->post['notif_content'])) {
			$data['notif_content'] = $this->request->post['notif_content'];
		} elseif (!empty($cron_info)) {
			$data['notif_content'] = $cron_info['notif_content'];
		} else {
			$data['notif_content'] = '';
		}
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/cron/form', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/cron')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (empty($this->error['warning'])) {
			if (empty($this->request->post['campaign_name'])) {
				$this->error['warning'] = $this->language->get('error_campaign');
			} elseif (empty($this->request->post['campaign_desc'])) {
				$this->error['warning'] = $this->language->get('error_campaign_description');
			} elseif (empty($this->request->post['customer_group'])) {
				$this->error['warning'] = $this->language->get('error_customer_group');
			}elseif (empty($this->request->post['start_at'])) {
				$this->error['warning'] = $this->language->get('error_start_at');
			}elseif (empty($this->request->post['start_time_at'])) {
				$this->error['warning'] = $this->language->get('error_start_time_at');
			}elseif (empty($this->request->post['repeat_on'])) {
				$this->error['warning'] = $this->language->get('error_repeate_on');
			}elseif (empty($this->request->post['notif_type'])) {
				$this->error['warning'] = $this->language->get('error_notification_type');
			}elseif (empty($this->request->post['notif_content'])) {
				$this->error['warning'] = $this->language->get('error_notification_content');
			}
		}

		return !$this->error;
    }
	
	protected function execCron($cron_id, $time){

		$this->load->model('extension/module/cron');

		$cron_info = $this->model_extension_module_cron->getCron($cron_id);
		$notifType = $cron_info['notif_type'];
		$notifTitle = $cron_info['campaign_name'];
		$notifMsg = $cron_info['notif_content'];

		if($notifType == 'email'){

			// $output = shell_exec('crontab -e');
			// file_put_contents('/tmp/crontab.txt', $output.''.$time
			// .' wget "http://localhost/sokmengstore/admin/index.php?route=extension/module/cron/send="'.$cron_id.'"'.PHP_EOL);
			// exec('crontab /tmp/crontab.txt');

			$output = shell_exec('crontab -e');
			file_put_contents('/tmp/crontab.txt', $output.''.$time.' curl --request POST "http://localhost/sokmengstore/index.php?route=rest/mail&id='.$cron_id.'"'.PHP_EOL);
			exec('crontab /tmp/crontab.txt');
		} else {
			$output = shell_exec('crontab -e');
			file_put_contents('/tmp/crontab.txt', $output.''.$time
			.' wget "http://localhost/sokmengstore/admin/index.php?route=marketing/flashsale&title="'.$notifTitle.'"&message="'.$notifMsg .'"'.PHP_EOL);
			exec('crontab /tmp/crontab.txt');
		}
	}

	public function send($cron_id){

		$this->load->language('extension/module/cron');
		$json = array();

		if (!$this->user->hasPermission('modify', 'extension/module/cron')) {
			$json['error'] = $this->language->get('error_permission');
		} else {

			$this->load->model('extension/module/cron');

			$cron_info = $this->model_extension_module_cron->getCron($cron_id);
			$customer_group_id =  $cron_info['customer_group'];
			$customer_email = $this->model_extension_module_cron->getCustomerEmailByCustomerGroupId($customer_group_id);
			if ($customer_email) {
				$message  = '<html dir="ltr" lang="en">' . "\n";
				$message .= '  <head>' . "\n";
				$message .= '    <title>' . $cron_info['campaign_name'] . '</title>' . "\n";
				$message .= '    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">' . "\n";
				$message .= '  </head>' . "\n";
				$message .= '  <body>' . html_entity_decode( $cron_info['campaign_desc'], ENT_QUOTES, 'UTF-8') . '</body>' . "\n";
				$message .= '</html>' . "\n";

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
					$mail->setSubject(html_entity_decode($cron_info['campaign_name'], ENT_QUOTES, 'UTF-8'));
					$mail->setHtml($message);
					$mail->send();
					
				}
				$json['success'] = $this->language->get('text_success');
			} else {
				$json['error']['email'] = $this->language->get('error_email');
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
		
	}
}