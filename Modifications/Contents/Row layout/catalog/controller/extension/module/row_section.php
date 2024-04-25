<?php

class ControllerExtensionModuleRowSection extends Controller {

    public function index($setting) {

        $this->load->model('extension/module/row_section');

        $tab_language = $this->config->get('config_language_id');

        $module_ids = array();
        $module_ids = explode(",",$setting['module_ids']);

        $data['modules'] = array();

        foreach ($module_ids as $mid) {

            $module_data = $this->model_extension_module_row_section->getModule($mid);
            $module_type = $this->model_extension_module_row_section->getModuleType($mid);

            $tab_order = $setting[$mid.'_order'];

            if ($module_type == 'featured') {

                $tab_data = $this->load->controller('extension/module/featured', $module_data);

            } elseif ($module_type == 'latest') {

                $tab_data = $this->load->controller('extension/module/latest', $module_data);

            } elseif ($module_type == 'specials') {

                $tab_data = $this->load->controller('extension/module/specials', $module_data);

            } elseif ($module_type == 'bestseller') {

                $tab_data = $this->load->controller('extension/module/bestseller', $module_data);

            } elseif ($module_type == 'products_carousel') {

                $tab_data = $this->load->controller('extension/module/products_carousel', $module_data);

            } elseif ($module_type == 'html') {

                $tab_data = $this->load->controller('extension/module/html', $module_data);

            } elseif ($module_type == 'carousel') {

                $tab_data = $this->load->controller('extension/module/carousel', $module_data);

            } elseif ($module_type == 'banner') {

                $tab_data = $this->load->controller('extension/module/banner', $module_data);
            }

            $tab_id_code = preg_replace('/\s*/', '', $module_data['name']);
            $tab_id_code = strtolower($tab_id_code);

            if (!isset($tab_order)) {

                $tab_order = 0;

            }

            $data['modules'][] = array(
                'tab_order'    => $tab_order,
                'tab_data'     => $tab_data,
                'tab_settings' => $module_data,
                'tab_id_code'  => $tab_id_code,
                'tab_language'  => $tab_language
            );

        }

        $data['tabs_title'] = htmlspecialchars_decode($setting['tabs_title'][$this->config->get('config_language_id')]['name']);
        $data['tabs_class'] = $setting['class'];

        if ($setting['image']) {
            $this->load->model('tool/image');

            if ($setting['width']) {
                $data['width'] = $setting['width'];
            } else {
                $data['width'] = 1920;
            }

            if ($setting['height']) {
                $data['height'] = $setting['height'];
            } else {
                $data['height'] = 800;
            }

            $data['background_image'] = $this->model_tool_image->resize($setting['image'], $data['width'], $data['height']);
        } else {
            $data['background_image'] = false; 
        }

        $array_order = array();

        foreach ($data['modules'] as $key => $row) {

            $array_order[$key] = $row['tab_order'];

        }

        array_multisort($array_order, SORT_ASC, $data['modules']);

        return $this->load->view('extension/module/row_section', $data);

    }

}