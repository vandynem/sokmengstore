<?php
class ControllerProductSpecial extends Controller {
	public function index() {
 
 /*=======Show Themeconfig=======*/ 
 $this->load->model('extension/soconfig/general'); 
 $this->load->language('extension/soconfig/soconfig'); 
 $data['objlang'] = $this->language; 
 $data['soconfig'] = $this->soconfig; 
 $data['theme_directory'] = $this->config->get('theme_default_directory'); 
 $data['our_url'] = $this->registry->get('url'); 
 /*=======url query parameters=======*/ 
 $data['url_sidebarsticky'] = isset($this->request->get['sidebarsticky']) ? $this->request->get['sidebarsticky'] : '' ; 
 $data['url_cartinfo'] = isset($this->request->get['cartinfo']) ? $this->request->get['cartinfo'] : '' ; 
 $data['url_thumbgallery'] = isset($this->request->get['thumbgallery']) ? $this->request->get['thumbgallery'] : '' ; 
 $data['url_listview'] = isset($this->request->get['listview']) ? $this->request->get['listview'] : '' ; 
 $data['url_asidePosition'] = isset($this->request->get['asidePosition']) ? $this->request->get['asidePosition'] : '' ; 
 $data['url_asideType'] = isset($this->request->get['asideType']) ? $this->request->get['asideType'] : '' ; 
 $data['url_layoutbox'] = isset($this->request->get['layoutbox']) ? $this->request->get['layoutbox'] : '' ; 
 
		$this->load->language('product/special');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'p.sort_order';
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

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}

		$this->document->setTitle($this->language->get('heading_title'));

 
 $placeholder='placeholder.png'; 
 if($this->soconfig->get_settings('placeholder_status')){ 
 $placeholder = $this->soconfig->get_settings('placeholder_img'); 
 }else{ 
 $placeholder = 'placeholder.png'; 
 } 
 
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

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

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('product/special', $url)
		);

		$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

		$data['compare'] = $this->url->link('product/compare');

		$data['products'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $limit,
			'limit' => $limit
		);

		$product_total = $this->model_catalog_product->getTotalProductSpecials();

		$results = $this->model_catalog_product->getProductSpecials($filter_data);

		foreach ($results as $result) {
			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			} else {
				$image = $this->model_tool_image->resize($placeholder, $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$price = false;
			}

			if ((float)$result['special']) {
				$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$special = false;
			}

			if ($this->config->get('config_tax')) {
				$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
			} else {
				$tax = false;
			}

			if ($this->config->get('config_review_status')) {
				$rating = (int)$result['rating'];
			} else {
				$rating = false;
			}

 
 /*======Image Galleries=======*/ 
 $data['image_galleries'] = array(); 
 $image_galleries = $this->model_catalog_product->getProductImages($result['product_id']); 
 foreach ($image_galleries as $image_gallery) { 
 $data['image_galleries'][] = array( 
 'cart' => $this->model_tool_image->resize($image_gallery['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_height')), 
 'thumb' => $this->model_tool_image->resize($image_gallery['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height')) 
 ); 
 } 
 $data['first_gallery'] = array( 
 'cart' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_width')), 
 'thumb' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width')) 
 ); 
 /*======Check New Label=======*/ 
 if ((float)$result['special']) $discount = '-'.round((($result['price'] - $result['special'])/$result['price'])*100, 0).'%'; 
 else $discount = false; 
 
 $sold = 0; 
 if($this->model_extension_soconfig_general->getUnitsSold($result['product_id'])){ 
 $sold = $this->model_extension_soconfig_general->getUnitsSold($result['product_id']); 
 } 
 
 $data['orders'] = sprintf($this->language->get('text_product_orders'),$sold); 
 $data['reviews'] = sprintf($this->language->get('text_reviews'), (int)$result['reviews']); 
 
 
 $option_data = array(); 
 $image_data = array(); 
 if ($this->config->get('module_so_color_swatches_pro_status')) { 
 $this->load->model('extension/module/so_color_swatches_pro'); 
 $data['width_product_list'] = (int)$this->config->get('module_so_color_swatches_pro_width_product_list'); 
 if ($data['width_product_list'] == 0) { 
 $data['width_product_list'] = 15; 
 } 
 $data['height_product_list'] = (int)$this->config->get('module_so_color_swatches_pro_height_product_list'); 
 if ($data['height_product_list'] == 0) { 
 $data['height_product_list'] = 15; 
 } 
 $data['colorswatch_type'] = $this->config->get('module_so_color_swatches_pro_type'); 
 $this->document->addStyle('catalog/view/javascript/so_color_swatches_pro/css/style.css'); 
 
 $options = $this->model_extension_module_so_color_swatches_pro->getProductOptions($result['product_id']); 
 foreach ($options as $option) { 
 $product_option_value_data = array(); 
 foreach ($option['product_option_value'] as $option_value) { 
 if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) { 
 $p_image = $this->model_extension_module_so_color_swatches_pro->getProductImages($result['product_id'], $option_value['option_value_id']); 
 if (isset($p_image['image']) && $p_image['image']) { 
 $pimage = $this->model_tool_image->resize($p_image['image'], $this->config->get('theme_'.$this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_'.$this->config->get('config_theme') . '_image_product_height')); 
 } else { 
 $pimage = ''; 
 } 
 if (isset($p_image['product_image_id']) && $p_image['product_image_id']) { 
 $product_image_id = $p_image['product_image_id']; 
 } 
 else { 
 $product_image_id = ''; 
 } 
 $product_option_value_data[] = array( 
 'product_option_value_id' => $option_value['product_option_value_id'], 
 'option_value_id' => $option_value['option_value_id'], 
 'name' => $option_value['name'], 
 'image' => $this->model_tool_image->resize($option_value['image'], $data['width_product_list'], $data['height_product_list']), 
 'price' => $price, 
 'price_prefix' => $option_value['price_prefix'], 
 'color_image' => $pimage, 
 'product_image_id' => $product_image_id 
 ); 
 } 
 } 
 $option_data[] = array( 
 'product_option_id' => $option['product_option_id'], 
 'product_option_value' => $product_option_value_data, 
 'option_id' => $option['option_id'], 
 'name' => $option['name'], 
 'type' => $option['type'], 
 'value' => $option['value'], 
 'required' => $option['required'] 
 ); 
 } 
 } 
 
			$data['products'][] = array(
				'product_id'  => $result['product_id'],
'option' => $option_data,
				'thumb'       => $image,
'special_end_date' => $this->model_extension_soconfig_general->getDateEnd($result['product_id']), 
 'image_galleries' => $data['image_galleries'], 
 'first_gallery' => $data['first_gallery'], 
 'discount' => $discount, 
 'stock_status' => $result['stock_status'], 
 'orders' => $data['orders'], 
 'reviews' => $data['reviews'], 
 'href_quickview' => htmlspecialchars_decode($this->url->link('extension/soconfig/quickview&product_id='.$result['product_id'] )), 
 'quantity' => $result['quantity'],
				'name'        => $result['name'],
				'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
				'price'       => $price,
				'special'     => $special,
				'tax'         => $tax,
				'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
				'rating'      => $result['rating'],
				'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'] . $url)
			);
		}

		$url = '';

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}

		$data['sorts'] = array();

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_default'),
			'value' => 'p.sort_order-ASC',
			'href'  => $this->url->link('product/special', 'sort=p.sort_order&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_name_asc'),
			'value' => 'pd.name-ASC',
			'href'  => $this->url->link('product/special', 'sort=pd.name&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_name_desc'),
			'value' => 'pd.name-DESC',
			'href'  => $this->url->link('product/special', 'sort=pd.name&order=DESC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_price_asc'),
			'value' => 'ps.price-ASC',
			'href'  => $this->url->link('product/special', 'sort=ps.price&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_price_desc'),
			'value' => 'ps.price-DESC',
			'href'  => $this->url->link('product/special', 'sort=ps.price&order=DESC' . $url)
		);

		if ($this->config->get('config_review_status')) {
			$data['sorts'][] = array(
				'text'  => $this->language->get('text_rating_desc'),
				'value' => 'rating-DESC',
				'href'  => $this->url->link('product/special', 'sort=rating&order=DESC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_rating_asc'),
				'value' => 'rating-ASC',
				'href'  => $this->url->link('product/special', 'sort=rating&order=ASC' . $url)
			);
		}

		$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_asc'),
				'value' => 'p.model-ASC',
				'href'  => $this->url->link('product/special', 'sort=p.model&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_model_desc'),
			'value' => 'p.model-DESC',
			'href'  => $this->url->link('product/special', 'sort=p.model&order=DESC' . $url)
		);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$data['limits'] = array();

		$limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));

		sort($limits);

		foreach($limits as $value) {
			$data['limits'][] = array(
				'text'  => $value,
				'value' => $value,
				'href'  => $this->url->link('product/special', $url . '&limit=' . $value)
			);
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}

		$pagination = new Pagination();
		$pagination->total = $product_total;
		$pagination->page = $page;
		$pagination->limit = $limit;
		$pagination->url = $this->url->link('product/special', $url . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

		// http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
		if ($page == 1) {
		    $this->document->addLink($this->url->link('product/special', '', true), 'canonical');
		} else {
		    $this->document->addLink($this->url->link('product/special', 'page='. $page , true), 'canonical');
		}		
		
		if ($page > 1) {
			$this->document->addLink($this->url->link('product/special', (($page - 2) ? '&page='. ($page - 1) : ''), true), 'prev');
		}

		if ($limit && ceil($product_total / $limit) > $page) {
		    $this->document->addLink($this->url->link('product/special', 'page='. ($page + 1), true), 'next');
		}

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['limit'] = $limit;

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('product/special', $data));
	}
}
