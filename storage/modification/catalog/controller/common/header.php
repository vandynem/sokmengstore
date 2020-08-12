<?php
class ControllerCommonHeader extends Controller {
	public function index() {
 
 /*======Show Themeconfig=======*/ 
 $data['soconfig'] = $this->soconfig; 
 $this->load->language('extension/soconfig/compare'); 
 $this->load->language('extension/soconfig/soconfig'); 
 $data['objlang'] = $this->language; 
 $data['lang_id'] = $this->config->get('config_language_id'); 
 $data['theme_directory'] = $this->config->get('theme_default_directory'); 
 $data['url_layoutbox'] = isset($this->request->get['layoutbox']) ? $this->request->get['layoutbox'] : '' ; 
 $data['url_pattern'] = isset($this->request->get['pattern']) ? $this->request->get['pattern'] : '' ; 
 $data['account_fb'] = isset($this->request->get['account_fb']) ? $this->request->get['account_fb'] : '' ; 
 $data['compare'] = $this->url->link('product/compare', '', true); 
 
 
 // Add position 
 $data['content_menu1'] = $this->load->controller('extension/soconfig/content_menu1'); 
 $data['content_menu2'] = $this->load->controller('extension/soconfig/content_menu2'); 
 $data['header_block'] = $this->load->controller('extension/soconfig/header_block'); 
 $data['search_block'] = $this->load->controller('extension/soconfig/search_block'); 
 $data['header_block2'] = $this->load->controller('extension/soconfig/header_block2'); 
 
 // For page specific css 
 if (isset($this->request->get['route'])) $data['class'] = str_replace('/', '-', $this->request->get['route']) ; 
 else $data['class'] = 'common-home'; 
 
 //Decodes HTML Entities 
 $data['selector_body'] = html_entity_decode($data['soconfig']->get_settings('selector_body'), ENT_QUOTES, 'UTF-8'); 
 $data['selector_menu'] = html_entity_decode($data['soconfig']->get_settings('selector_menu'), ENT_QUOTES, 'UTF-8'); 
 $data['selector_heading'] = html_entity_decode($data['soconfig']->get_settings('selector_heading'), ENT_QUOTES, 'UTF-8'); 
 $data['mselector_body'] = html_entity_decode($data['soconfig']->get_settings('mselector_body'), ENT_QUOTES, 'UTF-8'); 
 $data['mselector_menu'] = html_entity_decode($data['soconfig']->get_settings('mselector_menu'), ENT_QUOTES, 'UTF-8'); 
 $data['mselector_heading'] = html_entity_decode($data['soconfig']->get_settings('mselector_heading'), ENT_QUOTES, 'UTF-8'); 
 
 if (!defined ('OWL_CAROUSEL')){ 
 $this->document->addStyle('catalog/view/javascript/soconfig/css/owl.carousel.css'); 
 $this->document->addScript('catalog/view/javascript/soconfig/js/owl.carousel.js'); 
 define( 'OWL_CAROUSEL', 1 ); 
 } 
 
 
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

 $this->document->addStyle('catalog/view/javascript/so_sociallogin/css/so_sociallogin.css');
 $this->load->model('setting/setting');
 $this->load->model('tool/image');
 $setting = $this->model_setting_setting->getSetting('so_sociallogin');
 
 if (isset($setting['so_sociallogin_enable']) && $setting['so_sociallogin_enable'] && $this->config->get('so_sociallogin_enable')) {
 if(isset($this->session->data['route']))
 {
 $location = $this->url->link($this->session->data['route'], "", 'SSL');
 }
 else
 {
 $location = $this->url->link("account/account", "", 'SSL');
 }
 
 /* Facebook Library */
 require_once (DIR_SYSTEM.'library/so_social/Facebook/autoload.php');
 
 $fb = new Facebook\Facebook ([
 'app_id' => $setting['so_sociallogin_fbapikey'], 
 'app_secret' => $setting['so_sociallogin_fbsecretapi'],
 'default_graph_version' => 'v2.4',
 ]);

 $helper = $fb->getRedirectLoginHelper();

 try {
 $accessToken = $helper->getAccessToken();
 } catch(Facebook\Exceptions\FacebookResponseException $e) {
 // When Graph returns an error
 //echo 'Graph returned an error: ' . $e->getMessage();
 //exit;
 } catch(Facebook\Exceptions\FacebookSDKException $e) {
 // When validation fails or other local issues
 //echo 'Facebook SDK returned an error: ' . $e->getMessage();
 //exit;
 } 
 
 $data['fblink'] = $helper->getLoginUrl($this->url->link('extension/module/so_sociallogin/FacebookLogin', '', 'SSL'), array('public_profile','email'));
 /* Facebook Login link code */
 
 /* Google Libery file inculde */
 require_once DIR_SYSTEM.'library/so_social/src/Google_Client.php';
 require_once DIR_SYSTEM.'library/so_social/src/contrib/Google_Oauth2Service.php';
 
 /* Google Login link code */
 $gClient = new Google_Client();
 $gClient->setApplicationName($setting['so_sociallogin_googletitle']);
 $gClient->setClientId($setting['so_sociallogin_googleapikey']);
 $gClient->setClientSecret($setting['so_sociallogin_googlesecretapi']);
 $gClient->setRedirectUri($this->url->link('extension/module/so_sociallogin/GoogleLogin', '', 'SSL'));
 $google_oauthV2 = new Google_Oauth2Service($gClient);
 $data['googlelink'] = $gClient->createAuthUrl();
 
 /* Twitter Login */ 
 $data['twitlink'] = $this->url->link('extension/module/so_sociallogin/TwitterLogin', '', 'SSL');
 
 /* Linkedin Login */
 $data['linkdinlink'] = $this->url->link('extension/module/so_sociallogin/LinkedinLogin', '', 'SSL');
 
 /* Get Image */
 $sociallogin_width = 130;
 $sociallogin_height = 35;
 if (isset($setting['so_sociallogin_width']) && is_numeric($setting['so_sociallogin_width'])) {
 $sociallogin_width = $setting['so_sociallogin_width'];
 }
 if (isset($setting['so_sociallogin_height']) && is_numeric($setting['so_sociallogin_height'])) {
 $sociallogin_height = $setting['so_sociallogin_height'];
 }
 if ($setting['so_sociallogin_fbimage']) {
 $fbicon = $this->model_tool_image->resize($setting['so_sociallogin_fbimage'], $sociallogin_width, $sociallogin_height);
 } else {
 $fbicon = $this->model_tool_image->resize('placeholder.png', $sociallogin_width, $sociallogin_height);
 }
 
 if ($setting['so_sociallogin_twitimage']) {
 $twiticon = $this->model_tool_image->resize($setting['so_sociallogin_twitimage'], $sociallogin_width, $sociallogin_height);
 } else {
 $twiticon = $this->model_tool_image->resize('placeholder.png', $sociallogin_width, $sociallogin_height);
 }
 
 if ($setting['so_sociallogin_googleimage']) {
 $googleicon = $this->model_tool_image->resize($setting['so_sociallogin_googleimage'], $sociallogin_width, $sociallogin_height);
 } else {
 $googleicon = $this->model_tool_image->resize('placeholder.png', $sociallogin_width, $sociallogin_height);
 }
 
 if ($setting['so_sociallogin_linkdinimage']) {
 $linkdinicon = $this->model_tool_image->resize($setting['so_sociallogin_linkdinimage'], $sociallogin_width, $sociallogin_height);
 } else {
 $linkdinicon = $this->model_tool_image->resize('placeholder.png', $sociallogin_width, $sociallogin_height);
 }
 
 $data['iconwidth'] = $sociallogin_width;
 $data['iconheight'] = $sociallogin_height;
 $data['status'] = $setting['so_sociallogin_enable'];
 $data['fbimage'] = $fbicon;
 $data['twitimage'] = $twiticon;
 $data['googleimage'] = $googleicon;
 $data['linkdinimage'] = $linkdinicon;
 
 $data['setting'] = $setting;
 
 $this->load->language('extension/module/so_sociallogin');
 $data['text_colregister'] = $this->language->get('text_colregister');
 $data['text_create_account'] = $this->language->get('text_create_account');
 $data['link_forgot_password'] = $this->url->link('account/forgotten', '', true);
 $data['text_forgot_password'] = $this->language->get('text_forgot_password');
 $data['text_title_popuplogin'] = $this->language->get('text_title_popuplogin');
 $data['text_title_login_with_social'] = $this->language->get('text_title_login_with_social');
 }
 
 
 if ($this->config->get('module_so_topbar_status')) { 
 $this->document->addStyle('catalog/view/javascript/so_topbar/css/style.css'); 
 $this->document->addScript('catalog/view/javascript/so_topbar/js/jquery.cookie.js'); 
 
 $this->load->model('setting/setting'); 
 $setting = $this->model_setting_setting->getSetting('module_so_topbar'); 
 $now = date('Y-m-d H:i:s'); 
 $data['topbar_css'] = ''; 
 
 $this->load->model('extension/module/so_topbar'); 
 if ($type = $this->config->get('module_so_topbar_type')) { 
 if ($type == 'social') { 
 if (isset($setting['module_so_topbar_social_network_show']) && $setting['module_so_topbar_social_network_show'] && $setting['module_so_topbar_social_network_date_start'] <= $now && ($setting['module_so_topbar_social_network_date_end'] == '' || $setting['module_so_topbar_social_network_date_end'] >= $now)) { 
 $data['topbar_css'] = '<style> 
 .so-topbar { 
 padding: 15px 0; 
 width: 100%; 
 margin: 0 auto; 
 position: relative; 
 text-align: center; 
 color: '.$setting['module_so_topbar_social_network_text_color'].'; 
 background-color: '.$setting['module_so_topbar_social_network_background_color'].' 
 } 
 .so-topbar-text { 
 display: inline-block; 
 margin-right: 18px; 
 } 
 .so-topbar-icon { 
 display: inline-block; 
 } 
 .so-topbar-icon a i.fa{ 
 display: inline-block; 
 margin: 0 7px; 
 font-size: 20px; 
 color: '.$setting['module_so_topbar_social_network_social_color'].'; 
 } 
 .so-topbar-icon a:hover i.fa { 
 color: '.$setting['module_so_topbar_social_network_social_hover_color'].'; 
 } 
 .so-topbar-close { 
 background-color: '.$setting['module_so_topbar_close_background_color'].'; 
 color: '.$setting['module_so_topbar_close_text_color'].'; 
 } 
 .so-topbar-close * { 
 color: '.$setting['module_so_topbar_close_text_color'].'; 
 } 
 </style>'; 
 } 
 $data['so_topbar'] = $this->model_extension_module_so_topbar->getSocialNetworkType(); 
 } 
 else if ($type == 'banner') { 
 if (isset($setting['module_so_topbar_image_banner_show']) && $setting['module_so_topbar_image_banner_show'] && $setting['module_so_topbar_image_banner_date_start'] <= $now && ($setting['module_so_topbar_image_banner_date_end'] == '' || $setting['module_so_topbar_image_banner_date_end'] >= $now)) { 
 $data['topbar_css'] = '<style> 
 .so-topbar { 
 width: 100%; 
 margin: 0 auto; 
 position: relative; 
 } 
 .so-topbar-button { 
 position: absolute; 
 left: 0; 
 top: 0; 
 right: 0; 
 bottom: 0; 
 margin: auto; 
 display: inline-block; 
 text-align: center; 
 height: 45px; 
 line-height: 45px; 
 margin-right: 100px; 
 max-width: 200px; 
 } 
 .so-topbar-button a { 
 padding: 15px 30px; 
 display: inline-block; 
 text-transform: uppercase; 
 background-color: '.$setting['module_so_topbar_image_banner_background_button_color'].'; 
 color: '.$setting['module_so_topbar_image_banner_background_button_text_color'].'; 
 line-height: 18px; 
 } 
 .so-topbar-button:hover a { 
 background-color: '.$setting['module_so_topbar_image_banner_background_button_hover_color'].'; 
 color: '.$setting['module_so_topbar_image_banner_background_button_text_hover_color'].'; 
 } 
 .so-topbar-close { 
 background-color: '.$setting['module_so_topbar_close_background_color'].'; 
 color: '.$setting['module_so_topbar_close_text_color'].'; 
 } 
 .so-topbar-close * { 
 color: '.$setting['module_so_topbar_close_text_color'].'; 
 } 
 </style>'; 
 } 
 $data['so_topbar'] = $this->model_extension_module_so_topbar->getImageBannerType(); 
 } 
 else if ($type == 'newsletter') { 
 if (isset($setting['module_so_topbar_subcribe_newsletter_show']) && $setting['module_so_topbar_subcribe_newsletter_show'] && $setting['module_so_topbar_subcribe_newsletter_date_start'] <= $now && ($setting['module_so_topbar_subcribe_newsletter_date_end'] == '' || $setting['module_so_topbar_subcribe_newsletter_date_end'] >= $now)) { 
 $data['topbar_css'] .= '<style> 
 .so-topbar { 
 padding: 15px 0; 
 width: 100%; 
 margin: 0 auto; 
 position: relative; 
 text-align: center; 
 color: '.$setting['module_so_topbar_subcribe_newsletter_text_color'].'; 
 background-color: '.$setting['module_so_topbar_subcribe_newsletter_background_color'].' 
 } 
 .so-topbar-text { 
 display: inline-block; 
 margin-right: 30px; 
 } 
 .input-box { 
 display: inline-block; 
 margin-right: 15px; 
 } 
 .input-box input { 
 height: 34px; 
 line-height: 34px; 
 border: none; 
 min-width: 250px; 
 padding: 0 10px; 
 color: #000; 
 } 
 .input-box input:focus, .input-box input:active, .input-box input:hover { 
 border: none; 
 } 
 .so-topbar-button { 
 display: inline-block; 
 } 
 .so-topbar-button button { 
 background-color: '.$setting['module_so_topbar_subcribe_newsletter_background_button_color'].'; 
 color: '.$setting['module_so_topbar_subcribe_newsletter_background_button_text_color'].'; 
 height: 34px; 
 line-height: 34px; 
 border: none; 
 padding: 0 30px; 
 text-transform: uppercase; 
 } 
 .so-topbar-button:hover button { 
 background-color: '.$setting['module_so_topbar_subcribe_newsletter_background_button_hover_color'].'; 
 color: '.$setting['module_so_topbar_subcribe_newsletter_background_button_text_hover_color'].'; 
 } 
 .so-topbar-close { 
 background-color: '.$setting['module_so_topbar_close_background_color'].'; 
 color: '.$setting['module_so_topbar_close_text_color'].'; 
 } 
 .so-topbar-close * { 
 color: '.$setting['module_so_topbar_close_text_color'].'; 
 } 
 </style>'; 
 } 
 $data['so_topbar'] = $this->model_extension_module_so_topbar->getSubcribeNewsletterType(); 
 } 
 else if ($type == 'twitter') { 
 if (isset($setting['module_so_topbar_twitter_feed_slider_show']) && $setting['module_so_topbar_twitter_feed_slider_show'] && $setting['module_so_topbar_twitter_feed_slider_date_start'] <= $now && ($setting['module_so_topbar_twitter_feed_slider_date_end'] == '' || $setting['module_so_topbar_twitter_feed_slider_date_end'] >= $now)) { 
 $this->document->addStyle('catalog/view/javascript/so_topbar/css/animate.css'); 
 $this->document->addStyle('catalog/view/javascript/so_topbar/css/owl.carousel.css'); 
 $this->document->addScript('catalog/view/javascript/so_topbar/js/owl.carousel.js'); 
 $this->document->addScript('catalog/view/javascript/so_topbar/js/twitterFetcher.js'); 
 $this->document->addScript('catalog/view/javascript/so_topbar/js/twitterFetcher_min.js'); 
 $this->document->addScript('//platform.twitter.com/widgets.js'); 
 
 $data['topbar_css'] = '<style> 
 .so-topbar { 
 padding: 15px 0; 
 width: 100%; 
 margin: 0 auto; 
 text-align: center; 
 color: '.$setting['module_so_topbar_twitter_feed_slider_text_color'].'; 
 background-color: '.$setting['module_so_topbar_twitter_feed_slider_background_color'].' 
 } 
 .so-topbar .so-topbar-inner { 
 width: 80%; 
 margin: 0 auto; 
 } 
 .so-topbar ul { 
 padding: 0; 
 margin: 0; 
 } 
 .so-topbar ul li { 
 list-style-type: none; 
 } 
 .so-topbar .owl2-prev, .so-topbar .owl2-next { 
 position: absolute; 
 right: -10px; 
 top: -5px; 
 z-index: 99; 
 } 
 .so-topbar .owl2-next { 
 top: 5px; 
 } 
 .so-topbar .ts-items .ts-item p { 
 padding: 0; 
 margin: 0; 
 } 
 .so-topbar-close { 
 background-color: '.$setting['module_so_topbar_close_background_color'].'; 
 color: '.$setting['module_so_topbar_close_text_color'].'; 
 } 
 .so-topbar-close * { 
 color: '.$setting['module_so_topbar_close_text_color'].'; 
 } 
 </style>'; 
 } 
 
 $data['so_topbar'] = $this->model_extension_module_so_topbar->getTwitterFeedSliderType(); 
 } 
 else if ($type == 'countdown1') { 
 if (isset($setting['module_so_topbar_countdown_layout1_show']) && $setting['module_so_topbar_countdown_layout1_show'] && $setting['module_so_topbar_countdown_layout1_date_start'] <= $now && ($setting['module_so_topbar_countdown_layout1_date_end'] == '' || $setting['module_so_topbar_countdown_layout1_date_end'] >= $now)) { 
 $data['topbar_css'] = '<style> 
 .so-topbar { 
 padding: 30px 0; 
 width: 100%; 
 margin: 0 auto; 
 position: relative; 
 text-align: center; 
 color: '.$setting['module_so_topbar_countdown_layout1_text_color'].'; 
 background-color: '.$setting['module_so_topbar_countdown_layout1_background_color'].' 
 } 
 .so-topbar-text { 
 display: block; 
 text-transform: uppercase; 
 margin-bottom: 20px; 
 } 
 .countdown-time #clockdiv > div { 
 display: inline-block; 
 } 
 .countdown-time #clockdiv > div > span { 
 font-size: '.$setting['module_so_topbar_countdown_layout1_countdown_fontsize'].'; 
 color: '.$setting['module_so_topbar_countdown_layout1_countdown_color'].'; 
 font-weight: bold; 
 line-height: 100%; 
 opacity: .3; 
 } 
 .smalltext { 
 display: none; 
 } 
 .so-topbar-close { 
 background-color: '.$setting['module_so_topbar_close_background_color'].'; 
 color: '.$setting['module_so_topbar_close_text_color'].'; 
 } 
 .so-topbar-close * { 
 color: '.$setting['module_so_topbar_close_text_color'].'; 
 } 
 </style>'; 
 } 
 $data['so_topbar'] = $this->model_extension_module_so_topbar->getCountdown1Type(); 
 } 
 else if ($type == 'countdown2') { 
 if (isset($setting['module_so_topbar_countdown_layout1_show']) && $setting['module_so_topbar_countdown_layout1_show'] && $setting['module_so_topbar_countdown_layout1_date_start'] <= $now && ($setting['module_so_topbar_countdown_layout1_date_end'] == '' || $setting['module_so_topbar_countdown_layout1_date_end'] >= $now)) { 
 $data['topbar_css'] = '<style> 
 .so-topbar { 
 padding: 30px 0; 
 width: 100%; 
 margin: 0 auto; 
 position: relative; 
 text-align: center; 
 color: '.$setting['module_so_topbar_countdown_layout2_text_color'].'; 
 background-color: '.$setting['module_so_topbar_countdown_layout2_background_color'].' 
 } 
 .so-topbar-text { 
 display: inline-block; 
 margin-right: 30px; 
 } 
 .so-topbar .countdown-time { 
 display: inline-block; 
 vertical-align: middle; 
 margin-right: 40px; 
 } 
 .countdown-time #clockdiv > div { 
 display: inline-block; 
 padding: 0 5px; 
 } 
 .countdown-time #clockdiv > div > span { 
 font-size: '.$setting['module_so_topbar_countdown_layout1_countdown_fontsize'].'; 
 color: '.$setting['module_so_topbar_countdown_layout2_countdown_color'].'; 
 font-weight: bold; 
 line-height: 100%; 
 } 
 .countdown-time #clockdiv > div > span { 
 color: '.$setting['module_so_topbar_countdown_layout2_countdown_color'].'; 
 font-weight: bold; 
 display: block; 
 width: 70px; 
 height: 64px; 
 line-height: 64px; 
 font-size: '.$setting['module_so_topbar_countdown_layout2_countdown_fontsize'].'; 
 background-color: '.$setting['module_so_topbar_countdown_layout2_countdown_bgcolor'].'; 
 border-radius: 5px; 
 } 
 .countdown-time #clockdiv > div > div.smalltext { 
 text-transform: uppercase; 
 text-align: center; 
 margin-top: 15px; 
 } 
 .so-topbar-button { 
 display: inline-block; 
 } 
 .so-topbar-button a { 
 display: inline-block; 
 background-color: '.$setting['module_so_topbar_countdown_layout2_background_button_color'].'; 
 color: '.$setting['module_so_topbar_countdown_layout2_background_button_text_color'].'; 
 text-transform: uppercase; 
 height: 40px; 
 line-height: 40px; 
 padding: 0 35px; 
 } 
 .so-topbar-button:hover a { 
 display: inline-block; 
 background-color: '.$setting['module_so_topbar_countdown_layout2_background_button_hover_color'].'; 
 color: '.$setting['module_so_topbar_countdown_layout2_background_button_text_hover_color'].'; 
 } 
 .so-topbar-close { 
 background-color: '.$setting['module_so_topbar_close_background_color'].'; 
 color: '.$setting['module_so_topbar_close_text_color'].'; 
 } 
 .so-topbar-close * { 
 color: '.$setting['module_so_topbar_close_text_color'].'; 
 } 
 </style>'; 
 } 
 $data['so_topbar'] = $this->model_extension_module_so_topbar->getCountdown2Type(); 
 } 
 else if ($type == 'html') { 
 if (isset($setting['module_so_topbar_html_show']) && $setting['module_so_topbar_html_show'] && $setting['module_so_topbar_html_date_start'] <= $now && ($setting['module_so_topbar_html_date_end'] == '' || $setting['module_so_topbar_html_date_end'] >= $now)) { 
 $data['topbar_css'] = '<style> 
 .so-topbar { 
 padding: 25px 0; 
 width: 100%; 
 margin: 0 auto; 
 position: relative; 
 text-align: center; 
 color: '.$setting['module_so_topbar_html_text_color'].'; 
 background-color: '.$setting['module_so_topbar_html_background_color'].' 
 } 
 .so-topbar-text { 
 display: inline-block; 
 margin-right: 30px; 
 } 
 .so-topbar-button { 
 display: inline-block; 
 padding: 15px 25px; 
 color: '.$setting['module_so_topbar_html_background_button_text_color'].'; 
 background-color: '.$setting['module_so_topbar_html_background_button_color'].'; 
 border-radius: 5px; 
 box-shadow: 0 4px 2px -2px #cb8b03; 
 } 
 .so-topbar-button * { 
 color: '.$setting['module_so_topbar_html_background_button_text_color'].'; 
 font-weight: bold; 
 text-transform: uppercase; 
 } 
 .so-topbar-button:hover { 
 background-color: '.$setting['module_so_topbar_html_background_button_hover_color'].'; 
 } 
 .so-topbar-button:hover * { 
 color: '.$setting['module_so_topbar_html_background_button_text_hover_color'].'; 
 } 
 .so-topbar-close { 
 background-color: '.$setting['module_so_topbar_close_background_color'].'; 
 color: '.$setting['module_so_topbar_close_text_color'].'; 
 } 
 .so-topbar-close * { 
 color: '.$setting['module_so_topbar_close_text_color'].'; 
 } 
 </style>'; 
 } 
 $data['so_topbar'] = $this->model_extension_module_so_topbar->getHtmlType(); 
 } 
 else { 
 $data['so_topbar'] = ''; 
 } 
 } 
 } 
 

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');
	
	
		$this->load->model('localisation/location');
		$location_id=$this->config->get('config_location')  ;
		
		

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		$data['address'] = nl2br($this->config->get('config_address'));
		$data['email'] = $this->config->get('config_email');
		
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');
		
	
		
		if($this->customer->isLogged()){
		   
		    $data['text_customer_name'] = sprintf($this->language->get('text_customer_name'), $this->customer->getFirstName(), $this->customer->getLastName());
		  //  $data['text_customer_name'] = "aa";
		    
		} else {
		    $data['text_customer_name'] ="";
		}
		
		
			//added by avinash for add image in metadata
			 $this->log->write('in header'); 
				$this->load->model('catalog/category');
				$this->load->model('catalog/product');
				
			$link=	 $this->document->getLinks();
			 $i=0;
			 
				  $this->log->write($link); 
					foreach($link as $item) {
						if ($i==0)
						{
						 
						 if (($pos = strpos($item["href"], "=")) !== FALSE) { 
							$u1 = substr($item["href"], $pos+1); 
							}
							 if (($pos = strpos($u1, "=")) !== FALSE) { 
							$productid = substr($u1, $pos+1); 
							}
							$this->log->write($productid); 
							
							$product_info = $this->model_catalog_product->getProduct($productid);
 $limit = 250; 
                                                         $full_description = html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8'); 
 $product_description_short = (strlen($full_description) > $limit ? utf8_substr($full_description, 0, $limit) . '...' : $full_description); 
 $data['description_short'] = strip_tags($product_description_short); 

					
							if ($product_info['image']) {
									$data['popup'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
								} else {
								$data['popup'] = '';
								}
						}
						$i=$i+1;
					}
			
		
		
		return $this->load->view('common/header', $data);
	}
}
