<?php
class ControllerCommonLogin extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('common/login');

		$this->document->setTitle($this->language->get('heading_title'));

		if ($this->user->isLogged() && isset($this->request->get['user_token']) && ($this->request->get['user_token'] == $this->session->data['user_token'])) {
			$this->response->redirect($this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true));
		}

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->session->data['user_token'] = token(32);
			
			// Start of Astra Login Capture
			$astra_path = DIR_APPLICATION . "/controller/extension/astra/";
			if(file_exists($astra_path . 'Astra.php')){
				include($astra_path . 'Astra.php');
							
				
				if (class_exists('Astra')) {
					$astra = new Astra();
					
					if(is_object($astra)){
						$user['user_login'] = (!empty($this->request->post['username']))? $this->request->post['username'] : '';
						$user['username'] = $user['user_login'];
						$user['user_email'] = $user['user_login'];
						$user['display_name'] = $user['user_login'];
						
						if(file_exists($astra_path . "libraries/API_connect.php")){
							require_once($astra_path . "libraries/API_connect.php");
							$client_api = new Api_connect();
							$ret = $client_api->send_request("has_loggedin", array("user" => $user, "success" => 1,), "opencart");
						}
					}
				}
			}
			
			// End of Astra Login Capture
			
			if (isset($this->request->post['redirect']) && (strpos($this->request->post['redirect'], HTTP_SERVER) === 0 || strpos($this->request->post['redirect'], HTTPS_SERVER) === 0)) {
				$this->response->redirect($this->request->post['redirect'] . '&user_token=' . $this->session->data['user_token']);
			} else {
				$this->response->redirect($this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true));
			}
		}

		if ((isset($this->session->data['user_token']) && !isset($this->request->get['user_token'])) || ((isset($this->request->get['user_token']) && (isset($this->session->data['user_token']) && ($this->request->get['user_token'] != $this->session->data['user_token']))))) {
			$this->error['warning'] = $this->language->get('error_token');
		}

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

		$data['action'] = $this->url->link('common/login', '', true);

		if (isset($this->request->post['username'])) {
			$data['username'] = $this->request->post['username'];
		} else {
			$data['username'] = '';
		}

		if (isset($this->request->post['password'])) {
			$data['password'] = $this->request->post['password'];
		} else {
			$data['password'] = '';
		}

		if (isset($this->request->get['route'])) {
			$route = $this->request->get['route'];

			unset($this->request->get['route']);
			unset($this->request->get['user_token']);

			$url = '';

			if ($this->request->get) {
				$url .= http_build_query($this->request->get);
			}

			$data['redirect'] = $this->url->link($route, $url, true);
		} else {
			$data['redirect'] = '';
		}

		if ($this->config->get('config_password')) {
			$data['forgotten'] = $this->url->link('common/forgotten', '', true);
		} else {
			$data['forgotten'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('common/login', $data));
	}

	protected function validate() {
		if (!isset($this->request->post['username']) || !isset($this->request->post['password']) || !$this->user->login($this->request->post['username'], html_entity_decode($this->request->post['password'], ENT_QUOTES, 'UTF-8'))) {
			$this->error['warning'] = $this->language->get('error_login');

			
			// Start Astra Login capture
			
			$astra_path = DIR_APPLICATION . "/controller/extension/astra/";
			if(file_exists($astra_path . 'Astra.php')){
				include($astra_path . 'Astra.php');
				
				if (class_exists('Astra')) {
					$astra = new Astra();
					
					if(is_object($astra)){
						$username = (!empty($this->request->post['username']))? $this->request->post['username'] : '';
						if(file_exists($astra_path . "libraries/API_connect.php")){
							require_once($astra_path . "libraries/API_connect.php");
							$client_api = new Api_connect();
							$ret = $client_api->send_request("has_loggedin", array("username" => $username, "success" => 0,), "opencart");
						}
					}
				}
			}
			
			// End Astra Login capture
			
			
		}

		return !$this->error;
	}
}
