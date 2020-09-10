<?php
class ModelExtensionModuleCron extends Model {

	public function addCron($campaign_name, $campaign_desc, $customer_group, $customer, $start_at, $repeat_on, $notif_type, $notif_content) {

		$this->db->query("INSERT INTO `" . DB_PREFIX . "cron` SET 
		`campaign_name` = '" . $this->db->escape($campaign_name) . "', 
		`campaign_desc` = '" . $this->db->escape($campaign_desc) . "', 
		`customer_group` = '" . $this->db->escape($customer_group) . "',
		`customer` = '" . $this->db->escape($customer) . "', 
		`start_at` = '" . $this->db->escape($start_at) . "',
		`repeat_on` = '" . $this->db->escape($repeat_on) . "',
		`notif_type` = '" . $this->db->escape($notif_type) . "',
		`notif_content` = '" . $this->db->escape($notif_content) . "',
		`created_on` = NOW(), 
		`updated_on` = NOW()");

		return $this->db->getLastId();
	}

	public function editCron($cron_id, $campaign_name, $campaign_desc, $customer_group, $customer, $start_at, $repeat_on, $notif_type, $notif_content) {
		$this->db->query("UPDATE `" . DB_PREFIX . "cron` SET 
		`campaign_name` = '" . $this->db->escape($campaign_name) . "', 
		`campaign_desc` = '" . $this->db->escape($campaign_desc) . "', 
		`customer_group` = '" . $this->db->escape($customer_group) . "', 
		`customer` = '" . $this->db->escape($customer) . "', 
		`start_at` = '" . $this->db->escape($start_at) . "',
		`repeat_on` = '" . $this->db->escape($repeat_on) . "',
		`notif_type` = '" . $this->db->escape($notif_type) . "',
		`notif_content` = '" . $this->db->escape($notif_content) . "', 
		`updated_on` = NOW() WHERE cron_id = '" . (int)$cron_id . "'");
	}

	public function deleteCron($cron_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "cron` WHERE `cron_id` = '" . (int)$cron_id . "'");
	}
	
	// public function deleteCronByCode($code) {
	// 	$this->db->query("DELETE FROM `" . DB_PREFIX . "cron` WHERE `code` = '" . $this->db->escape($code) . "'");
	// }

	// public function runCron($cron_id) {
	// 	$this->db->query("UPDATE `" . DB_PREFIX . "cron` SET `created_on` = NOW() WHERE cron_id = '" . (int)$cron_id . "'");
	// }

	public function editStatus($cron_id, $status) {
		$this->db->query("UPDATE `" . DB_PREFIX . "cron` SET `status` = '" . (int)$status . "' WHERE cron_id = '" . (int)$cron_id . "'");	
	}

	public function getCron($cron_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "cron` WHERE `cron_id` = '" . (int)$cron_id . "'");

		return $query->row;
	}

	// public function getCronByCode($code) {
	// 	$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "cron` WHERE `code` = '" . $this->db->escape($code) . "' LIMIT 1");

	// 	return $query->row;
	// }
		
	public function getCrons($data = array()) {
		$sql = "SELECT * FROM `" . DB_PREFIX . "cron`";

		$sort_data = array(
			`campaign_name`,
			`campaign_desc`,
			`customer_group` ,
			`customer` ,
			`start_at` ,
			`repeat_on`,
			`notif_type`,
			`notif_content`,
			`created_on`,
			`updated_on` ,
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY `" . $data['sort'] . "`";
		} else {
			$sql .= " ORDER BY `created_on`";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalCrons() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "cron`");

		return $query->row['total'];
	}

	public function install() {
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "cron` (
			`cron_id` int(11) NOT NULL AUTO_INCREMENT,
			`campaign_name` varchar(64) NOT NULL,
			`campaign_desc` varchar(100) NOT NULL,
			`customer_group` int(5) NOT NULL,
			`customer` varchar(20) NOT NULL,
			`start_at` datetime NOT NULL,
			`repeat_on` varchar(20) NOT NULL,
			`notif_type` varchar(10) NOT NULL,
			`notif_content` varchar(100) NOT NULL,
			`status` tinyint(1) NOT NULL,
			`created_on` datetime NOT NULL,
			`updated_on` datetime NOT NULL,

			PRIMARY KEY (`cron_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8;");
	}

	public function getCustomerEmailByCustomerGroupId($customer_group_id) {

		$query = $this->db->query("SELECT email FROM " . DB_PREFIX . "customer WHERE customer_group_id = '" . (int)$customer_group_id . "'");
		return $query->rows;
	}

	public function getNotificationType($cron_id) {

		$query = $this->db->query("SELECT notif_type FROM " . DB_PREFIX ."cron` WHERE `cron_id` = '". (int)$cron_id . "'");
		return $query->rows;
	}
}
