<?php
class ControllerExtensionModuleNotifyVisitorschatbot extends Controller {

	public function index($setting = null) {
		$this->load->language('extension/module/notify_visitors_chatbot');
		$data['brandID'] =$setting['brandID'];
		$data['secretKey'] = $setting['secretKey'];
		if(!empty($data['brandID'])){
			return $this->load->view('extension/module/notify_visitors_chatbot', $data);
		}
				
	}
}
?>