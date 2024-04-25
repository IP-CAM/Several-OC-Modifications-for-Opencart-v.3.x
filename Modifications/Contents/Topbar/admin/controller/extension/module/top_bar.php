<?php
class ControllerExtensionModuleTopBar extends Controller {
	 
	private $error = array();
	
	public function index() {  

		/* Set page title */
		$this->load->language('extension/module/top_bar');
		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_top_bar', $this->request->post);
			
			$this->session->data['success'] = $this->language->get('text_success');
						
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		$data = array(); 

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
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/top_bar', 'user_token=' . $this->session->data['user_token'], true)
		);


		if (isset($this->error['status'])) {
			$data['error_status'] = $this->error['status'];
		} else {
			$data['error_status'] = '';
		} 

		$data['action'] = $this->url->link('extension/module/top_bar', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->post['module_top_bar_status'])) {
			$data['module_top_bar_status'] = $this->request->post['module_top_bar_status'];
		} else {
			$data['module_top_bar_status'] = $this->config->get('module_top_bar_status');
		}

		if (isset($this->request->post['module_top_bar_description'])) {
			$data['module_top_bar_description'] = $this->request->post['module_top_bar_description'];
		} elseif( null !== $this->config->get('module_top_bar_description') ) {
			$data['module_top_bar_description'] = $this->config->get('module_top_bar_description');
		} else {
			$data['module_top_bar_description'] = array();
		}
		
		$data['error'] = $this->error;	

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$htmlOutput = $this->load->view('extension/module/top_bar', $data);
		$this->response->setOutput($htmlOutput);
	}

	public function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/top_bar')) {
			$this->error['permission'] = true;
			return false;
		}
		
		return empty($this->error);
	}
	
}