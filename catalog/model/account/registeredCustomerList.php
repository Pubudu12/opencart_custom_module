<?php
class ModelAccountRegisteredCustomerList extends Model {

	public function getRegisteredCustomers() {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer` ");

		return $query->rows;
    }
}