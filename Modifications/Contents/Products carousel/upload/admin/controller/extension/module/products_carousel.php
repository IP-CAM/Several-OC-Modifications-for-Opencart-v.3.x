<?php
class ControllerExtensionModuleProductsCarousel extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/products_carousel');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('products_carousel', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		
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

		if (isset($this->error['width'])) {
			$data['error_width'] = $this->error['width'];
		} else {
			$data['error_width'] = '';
		}

		if (isset($this->error['height'])) {
			$data['error_height'] = $this->error['height'];
		} else {
			$data['error_height'] = '';
		}

		if (isset($this->error['conwidth'])) {
			$data['error_conwidth'] = $this->error['conwidth'];
		} else {
			$data['error_conwidth'] = '';
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

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/products_carousel', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/products_carousel', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/products_carousel', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/products_carousel', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}

		$this->load->model('catalog/product');
		

		$data['products'] = array();

		if (!empty($this->request->post['product'])) {
			$products = $this->request->post['product'];
		} elseif (!empty($module_info['product'])) {
			$products = $module_info['product'];
		} else {
			$products = array();
		}

		foreach ($products as $product_id) {
			$product_info = $this->model_catalog_product->getProduct($product_id);

			if ($product_info) {
				$data['products'][] = array(
					'product_id' => $product_info['product_id'],
					'name'       => $product_info['name']
				);
			}
		}

		if (isset($this->request->post['view_more'])) {
			$data['view_more'] = $this->request->post['view_more'];
		} elseif (!empty($module_info)) {
			$data['view_more'] = $module_info['view_more'];
		} else {
			$data['view_more'] = '';
		}

		if (isset($this->request->post['limit'])) {
			$data['limit'] = $this->request->post['limit'];
		} elseif (!empty($module_info)) {
			$data['limit'] = $module_info['limit'];
		} else {
			$data['limit'] = 5;
		}

		if (isset($this->request->post['width'])) {
			$data['width'] = $this->request->post['width'];
		} elseif (!empty($module_info)) {
			$data['width'] = $module_info['width'];
		} else {
			$data['width'] = 200;
		}

		if (isset($this->request->post['height'])) {
			$data['height'] = $this->request->post['height'];
		} elseif (!empty($module_info)) {
			$data['height'] = $module_info['height'];
		} else {
			$data['height'] = 200;
		}

		if (isset($this->request->post['conwidth'])) {
			$data['conwidth'] = $this->request->post['conwidth'];
		} elseif (!empty($module_info)) {
			$data['conwidth'] = $module_info['conwidth'];
		} else {
			$data['conwidth'] = 100;
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}

		if (isset($this->request->post['slides_per_view'])) {
			$data['slides_per_view'] = $this->request->post['slides_per_view'];
		} else if (!empty($module_info)) {
			$data['slides_per_view'] = $module_info['slides_per_view'];
		} else {
			$data['slides_per_view'] = 5;
		}
		
		if (isset($this->request->post['space_between'])) {
			$data['space_between'] = $this->request->post['space_between'];
		} else if (!empty($module_info)) {
			$data['space_between'] = $module_info['space_between'];
		} else {
			$data['space_between'] = 5;
		}

        if (isset($this->request->post['autoplay'])) {
			$data['autoplay'] = $this->request->post['autoplay'];
		} else if (!empty($module_info)) {
			$data['autoplay'] = $module_info['autoplay'];
		} else {
			$data['autoplay'] = '0';
		}


		// Default text
		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages(array('sort' => 'code'));
		$default_custom_title = array();
		foreach ($data['languages'] as $key => $language) {
			$flag_img = 'language/'.$language['code'].'/'.$language['image'];
			if(!is_file($flag_img)){
				$flag_img = 'language/'.$language['code'].'/'.$language['code'].'.png';
				if(!is_file($flag_img)) $flag_img = null;
			}

			$data['languages'][$key]['flag_img'] = $flag_img;
			$default_custom_title[$language['language_id']]['name'] = $this->language->get('entry_custom_title');
		}

		if (isset($this->request->post['custom_title'])) {
			$data['custom_title'] = $this->request->post['custom_title'];
		} else if (!empty($module_info)) {
			$data['custom_title'] = $module_info['custom_title'];
		} else {
			$data['custom_title'] = $default_custom_title;
		}
		

		if (isset($this->request->post['module_classes'])) {
			$data['module_classes'] = $this->request->post['module_classes'];
		} else if (!empty($module_info)) {
			$data['module_classes'] = $module_info['module_classes'];
		} else {
			$data['module_classes'] = '';
		}

		if (isset($this->request->post['module_breakpoints'])) {
			$data['module_breakpoints'] = $this->request->post['module_breakpoints'];
		} elseif (!empty($module_info)) {
			$data['module_breakpoints'] = $module_info['module_breakpoints'];
		} else {
			$data['module_breakpoints'] = '';
		}





		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/products_carousel', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/products_carousel')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if (!$this->request->post['width']) {
			$this->error['width'] = $this->language->get('error_width');
		}

		if (!$this->request->post['height']) {
			$this->error['height'] = $this->language->get('error_height');
		}

		if (!$this->request->post['conwidth']) {
			$this->error['conwidth'] = $this->language->get('error_conwidth');
		}

		return !$this->error;
	}
}