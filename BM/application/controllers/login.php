<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index(){
		$this->load->view('login');
	}

	public function do_login(){
		$nim = mysql_real_escape_string($_POST['nim']);
		$res = $this->mymodel->select('tbl_user',"nim = $nim");
		$row = $res->row();
		if(md5(mysql_real_escape_string($_POST['pass'])) == $row->password){
			$newdata = array(
		        'nim'  => $row->nim,
		        'status' => $row->status,
		        'nama' => $row->nama
			);
			$this->session->set_userdata($newdata);
			redirect(base_url().'index.php/dashboard');
		}else{
			$this->session->set_flashdata('register','Login gagal');
			redirect(base_url().'index.php/login');
		}
	}

	public function register(){
		$this->load->view('register');
	}

	public function do_register(){
		$config['upload_path']          	= './assets/img/profile_pictures/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 100;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;
			$config['file_name'] 			= $_POST['nim'];
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        $this->upload->do_upload('foto');
			$file_name = $this->upload->data();
		$res = $this->mymodel->insert('tbl_user',array(
			'nim' => mysql_real_escape_string($_POST['nim']),
			'nama' => mysql_real_escape_string($_POST['nama']),
			'jk' => mysql_real_escape_string($_POST['jk']),
			'tgl_lahir' => mysql_real_escape_string($_POST['ttl']),
			'tahun_masuk' => mysql_real_escape_string($_POST['tahun_masuk']),
			'prodi' => mysql_real_escape_string($_POST['prodi']),
			'fakultas' => mysql_real_escape_string($_POST['fakultas']),
			'hp' => mysql_real_escape_string($_POST['hp']),
			'foto' => $file_name['file_name'],
			'password' => mysql_real_escape_string(md5($_POST['pass'])),
			'status' => "admin",
			'email' => mysql_real_escape_string($_POST['email'])
			));
		if($res >= 1){
			$this->session->set_flashdata('register','Pendaftaran Berhasil');
			redirect(base_url().'index.php/login');
		}else{
			echo "gagal";
		}
	}

	public function logout(){
		$sessionData = array(
		        'nim','status'
			);
		$this->session->unset_userdata($sessionData);
		redirect(base_url().'index.php/login');
	}
}

?>