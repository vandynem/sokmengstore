<?php
class ControllerAccountValidatemobile extends Controller {
    private $error = array();
    
	public function index() {
		$this->load->language('account/validate');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_success'),
			'href' => $this->url->link('account/success')
		);

		if ($this->customer->isLogged()) {
			$data['text_message'] = sprintf($this->language->get('text_message'), $this->url->link('information/contact'));
		} else {
		    $data['text_message'] = sprintf($this->language->get('text_approval'), $this->config->get('config_name'), $this->url->link('information/contact'),$this->session->data['otp_customer_mobile']);
		}

		if ($this->cart->hasProducts()) {
			$data['continue'] = $this->url->link('checkout/cart');
		} else {
			$data['continue'] = $this->url->link('account/account', '', true);
		}
		
		
		
		

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		
		$data['action'] = $this->url->link('account/validatemobile', '', true);
		
		
		
		$this->load->model('account/customer');
		
		$this->load->model('account/customer');
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
		    
		    if($this->session->data['customerotp']==$this->request->post['otp'])
		    {
		        $customer_id =  $this->model_account_customer->approveCustomer($this->request->post);
		    
		        $customerlogin=$this->model_account_customer->getCustomer($customer_id );
		        
		        $this->customer->login($customerlogin['email'], $customerlogin['password']);
		        
		       //$this->response->setOutput($this->load->view('common/success'));
		        $this->response->redirect($this->url->link('account/login'));
		    }
		    else 
		    {
		        $this->error['otp'] = "Enter Valid OTP";
		    }
		    
		}
		
		if (isset($this->error['otp'])) {
		    $data['error_otp'] = $this->error['otp'];
		} else {
		    $data['error_otp'] = '';
		}
		
		
		
		$data['customerotp'] = $this->model_account_customer->getCustomerOtp($this->session->data['otp_customer_id']);
		$data['customer_id'] = $this->session->data['otp_customer_id'];
		$this->session->data['customerotp']=$data['customerotp'];
		
		$customerinfo=$this->model_account_customer->getCustomer($this->session->data['otp_customer_id'] );
		$telephone=$customerinfo['telephone'];
		$firstname=$customerinfo['firstname'];
	//Send SMS
	
		$this->load->model('extension/module/smsalert');
		$replace = array(
		    $firstname,
		    $data['customerotp']
		    
		);
		
		$this->model_extension_module_smsalert->parseSMS('otp','0', $telephone, $replace);
		
		
		
		
		
		
		
		
		
		
		
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		
		
		//$this->response->setOutput($this->load->view('common/success', $data));
		$this->response->setOutput($this->load->view('common/validatemobile', $data));
	}
	
	
	public function checkotp()
	{
	    $this->load->model('account/customer');
	    if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
	        
	        $this->model_account_customer->approveCustomer($this->request->post);
	        
	        $this->response->setOutput($this->load->view('common/success'));
	        
	        
	    }
	}
	
	private function validate() {
	    if ((utf8_strlen(trim($this->request->post['otp'])) < 1) || (utf8_strlen(trim($this->request->post['otp'])) > 4)) {
	        $this->error['otp'] = $this->language->get('error_otp');
	    }
	    
	    return !$this->error;
	}
	
}