<?php

class ModelExtensionModuleRowSection extends Model {

	public function getModule($module_id) {

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "module WHERE module_id = '" . (int)$module_id . "'");

		if ($query->row) {
			return json_decode($query->row['setting'], true);
		} else {
			return array();	
		}

	}	

    public function getModuleType($module_id) {

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "module WHERE module_id = '" . (int)$module_id . "'");

		if ($query->row) {
			return $query->row['code'];
		} else {
			return array();	
		}

	}

}