<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mymodel extends CI_Model {
	public function input($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}
}
?>