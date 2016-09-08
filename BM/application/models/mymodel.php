<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mymodel extends CI_Model {
	public function insert($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}

	public function select($tableName,$where){
		$res = $this->db->get_where($tableName,$where);
			return $res;
	}

	public function select_all($tableName){
		$res = $this->db->get($tableName);
			return $res;
	}
}
?>