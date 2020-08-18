<?php
class ModelExtensionModuleCron extends Model {
    public function getCron($cron_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "cron` WHERE `cron_id` = '" . (int)$cron_id . "'");

		return $query->row;
	}

	public function getCustomerEmailByCustomerGroupId($customer_group_id) {

		$query = $this->db->query("SELECT email FROM " . DB_PREFIX . "customer WHERE customer_group_id = '" . (int)$customer_group_id . "'");
		return $query->rows;
	}
}