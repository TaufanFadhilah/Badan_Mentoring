<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index(){
		$this->load->view('dashboard');
	}

	public function daftar_anggota(){
		$res = $this->mymodel->select_all('tbl_user');
		$this->load->view('dashboard',array(
			'title' => 'Daftar Anggota',
			'data' => $res->result_array()
			));
	}
}

?>