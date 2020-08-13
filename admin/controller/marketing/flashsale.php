<?php
class ControllerMarketingFlashsale extends Controller {
	private $error = array();

	public function index() {
		/*$this->load->language('marketing/flashsale');

		$this->document->setTitle($this->language->get('heading_title'));

		//$this->load->model('marketing/marketing');

		//$this->getList();
			$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('marketing/flashsale', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);
		$data['user_token'] = $this->session->data['user_token'];
			$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('marketing/flashsale', $data));*/
	    
	    $this->load->language('marketing/flashsale');
	    
	    $this->document->setTitle($this->language->get('heading_title'));
	    
	 //   $this->load->model('marketing/marketing');
	    

	    
	  //  $this->getForm();
	    $data['breadcrumbs'] = array();
	    
	    $data['breadcrumbs'][] = array(
	        'text' => $this->language->get('text_home'),
	        'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
	    );
	    
	    $data['breadcrumbs'][] = array(
	        'text' => $this->language->get('heading_title'),
	        'href' => $this->url->link('marketing/flashsalre', 'user_token=' . $this->session->data['user_token'] . $url, true)
	    );
	    
	    $data['header'] = $this->load->controller('common/header');
	    $data['column_left'] = $this->load->controller('common/column_left');
	    $data['footer'] = $this->load->controller('common/footer');
	    
	    $data['action'] = $this->url->link('marketing/flashsale/sendnotification', 'user_token=' . $this->session->data['user_token'] . $url, true);
	    
	    $this->response->setOutput($this->load->view('flashs/flashsale_form', $data));
	}

	public function sendnotification()
	{
	    $log = new Log('notificationflashsale.log');
	    $log->write($customer);
	    //$log->write($customer_info);
	    
	 //   require_once(DIR_SYSTEM . 'notification/notification.php');
	    $log->write("test");
	    
	   // $notification = new Notification();
	    
	    $title = $this->request->post['title'];
	    $message = $this->request->post['message'] ;
	  //  $imageUrl ='';
	   // $action='';
	 //   $actionDestination ='';
	    //$firebase_token = $customer['token'];
	    $firebase_api = 'AAAALrhPccY:APA91bHGTNfjXr8dg26OVgtlrFEexP8TJWN7sAPwkjLb8-nGYjIiuo_aF3RXW8ZlCfzqmwZ_pLP3_I85HllEro42a94KfwJc8sIEbxRw52PM9QOTLLMXxGBUfUEilYsp0shmgE8r3vOg';
	   // $notification->setTitle($title);
	  //  $notification->setMessage($message);
	  //  $notification->setImage($imageUrl);
	  //  $notification->setAction($action);
	   // $notification->setActionDestination($actionDestination);
	    
	   // $requestData = $notification->getNotificatin();
		
		$token='konfulonPramotions';
		
		//$title = 'Order Successful';
		//$message = 'Dear '.$customer_info['firstname']. ' Your Order No. '.$order_info1['order_id'].' has been Added. ' ;
		
		
		//echo $message;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		//curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"to\":\ePpFPbR1oHU:APA91bFhsMXxvDo7v0iHrw8kuZHxX31YppFKX65tSNYqbl6xTgasrFIZIkq9h66GcQs-HjFqgBL9YCB_Dz1M_p3Kh_M5U-SPeJ7K6dJ-MHrfE90ZMp9jxT97N6Bkblq98Xyf-SMgoVVQ\",\"notification\":{\"body\":\"Your Order has been Updated\",\"title\":\"Test Ecom Server\"},\"priority\":10}");
		curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"to\":\"/topics/konfulonPramotions\",\"notification\":{\"body\":\"".$message."\",\"title\":\"".$title."\"},\"priority\":10}");
		$headers = array();
		$headers[] = 'Authorization: key=AAAALrhPccY:APA91bHGTNfjXr8dg26OVgtlrFEexP8TJWN7sAPwkjLb8-nGYjIiuo_aF3RXW8ZlCfzqmwZ_pLP3_I85HllEro42a94KfwJc8sIEbxRw52PM9QOTLLMXxGBUfUEilYsp0shmgE8r3vOg';
		$headers[] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		//echo($result);
		if (curl_errno($ch)) {
		    echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);
		
		
		$log->write($result);
		
		$this->load->language('marketing/flashsale');
		
		$this->document->setTitle($this->language->get('heading_title'));
		
		//   $this->load->model('marketing/marketing');
		
		
		
		//  $this->getForm();
		$data['breadcrumbs'] = array();
		
		$data['breadcrumbs'][] = array(
		    'text' => $this->language->get('text_home'),
		    'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		
		$data['breadcrumbs'][] = array(
		    'text' => $this->language->get('heading_title'),
		    'href' => $this->url->link('marketing/flashsalre', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$data['action'] = $this->url->link('marketing/flashsale/sendnotification', 'user_token=' . $this->session->data['user_token'] . $url, true);
		
		$this->response->setOutput($this->load->view('flashs/flashsale_form', $data));
		
		
	    }
	
	
	
	public function add() {
		$this->load->language('marketing/marketing');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('marketing/marketing');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_marketing_marketing->addMarketing($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_code'])) {
				$url .= '&filter_code=' . $this->request->get['filter_code'];
			}

			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('marketing/marketing', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('marketing/marketing');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('marketing/marketing');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_marketing_marketing->editMarketing($this->request->get['marketing_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_code'])) {
				$url .= '&filter_code=' . $this->request->get['filter_code'];
			}

			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('marketing/marketing', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('marketing/marketing');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('marketing/marketing');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $marketing_id) {
				$this->model_marketing_marketing->deleteMarketing($marketing_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_code'])) {
				$url .= '&filter_code=' . $this->request->get['filter_code'];
			}

			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('marketing/marketing', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = '';
		}

		if (isset($this->request->get['filter_code'])) {
			$filter_code = $this->request->get['filter_code'];
		} else {
			$filter_code = '';
		}

		if (isset($this->request->get['filter_date_added'])) {
			$filter_date_added = $this->request->get['filter_date_added'];
		} else {
			$filter_date_added = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'name';
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

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_code'])) {
			$url .= '&filter_code=' . $this->request->get['filter_code'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

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
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('marketing/marketing', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link('marketing/marketing/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('marketing/marketing/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['marketings'] = array();

		$filter_data = array(
			'filter_name'       => $filter_name,
			'filter_code'       => $filter_code,
			'filter_date_added' => $filter_date_added,
			'sort'              => $sort,
			'order'             => $order,
			'start'             => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'             => $this->config->get('config_limit_admin')
		);

		$marketing_total = $this->model_marketing_marketing->getTotalMarketings($filter_data);

		$results = $this->model_marketing_marketing->getMarketings($filter_data);

		foreach ($results as $result) {
			$data['marketings'][] = array(
				'marketing_id' => $result['marketing_id'],
				'name'         => $result['name'],
				'code'         => $result['code'],
				'clicks'       => $result['clicks'],
				'orders'       => $result['orders'],
				'date_added'   => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'edit'         => $this->url->link('marketing/marketing/edit', 'user_token=' . $this->session->data['user_token'] . '&marketing_id=' . $result['marketing_id'] . $url, true)
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

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_code'])) {
			$url .= '&filter_code=' . $this->request->get['filter_code'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('marketing/marketing', 'user_token=' . $this->session->data['user_token'] . '&sort=m.name' . $url, true);
		$data['sort_code'] = $this->url->link('marketing/marketing', 'user_token=' . $this->session->data['user_token'] . '&sort=m.code' . $url, true);
		$data['sort_date_added'] = $this->url->link('marketing/marketing', 'user_token=' . $this->session->data['user_token'] . '&sort=m.date_added' . $url, true);

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_code'])) {
			$url .= '&filter_code=' . $this->request->get['filter_code'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $marketing_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('marketing/marketing', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($marketing_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($marketing_total - $this->config->get('config_limit_admin'))) ? $marketing_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $marketing_total, ceil($marketing_total / $this->config->get('config_limit_admin')));

		$data['filter_name'] = $filter_name;
		$data['filter_code'] = $filter_code;
		$data['filter_date_added'] = $filter_date_added;

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('marketing/marketing_list', $data));
	}

	protected function getForm() {
	/*	$data['text_form'] = !isset($this->request->get['marketing_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		if (isset($this->error['code'])) {
			$data['error_code'] = $this->error['code'];
		} else {
			$data['error_code'] = '';
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_code'])) {
			$url .= '&filter_code=' . $this->request->get['filter_code'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}*/

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('marketing/flashsalre', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

	/*	if (!isset($this->request->get['marketing_id'])) {
			$data['action'] = $this->url->link('marketing/marketing/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('marketing/marketing/edit', 'user_token=' . $this->session->data['user_token'] . '&marketing_id=' . $this->request->get['marketing_id'] . $url, true);
		}*/

	/*	$data['cancel'] = $this->url->link('marketing/marketing', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['marketing_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$marketing_info = $this->model_marketing_marketing->getMarketing($this->request->get['marketing_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$data['store'] = HTTP_CATALOG;

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($marketing_info)) {
			$data['name'] = $marketing_info['name'];
		} else {
			$data['name'] = '';
		}

		if (isset($this->request->post['description'])) {
			$data['description'] = $this->request->post['description'];
		} elseif (!empty($marketing_info)) {
			$data['description'] = $marketing_info['description'];
		} else {
			$data['description'] = '';
		}

		if (isset($this->request->post['code'])) {
			$data['code'] = $this->request->post['code'];
		} elseif (!empty($marketing_info)) {
			$data['code'] = $marketing_info['code'];
		} else {
			$data['code'] = uniqid();
		}*/

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$data['action'] = $this->url->link('marketing/flashsale/flashsale', 'user_token=' . $this->session->data['user_token'] .  $url, true);
		
		$this->response->setOutput($this->load->view('marketing/flashsale_form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'marketing/marketing')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 1) || (utf8_strlen($this->request->post['name']) > 32)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if (!$this->request->post['code']) {
			$this->error['code'] = $this->language->get('error_code');
		}

		$marketing_info = $this->model_marketing_marketing->getMarketingByCode($this->request->post['code']);

		if (!isset($this->request->get['marketing_id'])) {
			if ($marketing_info) {
				$this->error['code'] = $this->language->get('error_exists');
			}
		} else {
			if ($marketing_info && ($this->request->get['marketing_id'] != $marketing_info['marketing_id'])) {
				$this->error['code'] = $this->language->get('error_exists');
			}
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'marketing/marketing')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}