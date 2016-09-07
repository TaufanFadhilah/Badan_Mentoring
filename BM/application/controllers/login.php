<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index(){
		$this->load->view('login');
	}

	public function do_login(){
		echo $_POST['nim'].$_POST['password'];
	}

	public function register(){
		$this->load->view('register');
	}

	public function do_register(){
		var_dump($_POST);
	}
}

?>