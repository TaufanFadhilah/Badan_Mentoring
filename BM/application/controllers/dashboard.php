<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
            if(!$this->session->userdata('nim')){
            	$this->session->set_flashdata('register','Anda Belum Login');
            	redirect(base_url()."index.php/login/");
            }
            
        }

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

	public function delete($nim){
		$res1 = $this->mymodel->select('tbl_user',array(
			'nim' => $nim));
		$row = $res1->row();
		unlink("./assets/img/profile_pictures/".$row->foto);
		$this->session->set_flashdata('daftar_anggota',$row->nama.' telah dihapus.');
		$res = $this->mymodel->delete('tbl_user',array(
			'nim' => $nim));
		redirect(base_url().'index.php/dashboard/daftar_anggota');
	}

	public function reset_pass($nim){
		$this->mymodel->update('tbl_user',
			array(
				'password' => md5('badanmentoring')
				),"nim = $nim");
		$res1 = $this->mymodel->select('tbl_user',array(
			'nim' => $nim));
		$row = $res1->row();
		$this->session->set_flashdata('daftar_anggota',$row->nama.' telah direset.');
		redirect(base_url().'index.php/dashboard/daftar_anggota');
	}

	public function setMentoring($nim){
		$this->mymodel->update('tbl_user',
			array(
				'status' => "Mentor"
				),"nim = $nim");
		$res1 = $this->mymodel->select('tbl_user',array(
			'nim' => $nim));
		$row = $res1->row();
		$this->session->set_flashdata('daftar_anggota',$row->nama.' telah menjadi Mentor.');
		redirect(base_url().'index.php/dashboard/daftar_anggota');
	}
}

?>