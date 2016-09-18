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
		$content = $this->session->userdata('status');
		switch ($content) {
			case 'Mentor':
				$res = $this->mymodel->select('tbl_user',array(
					'status' => "Menti"
					));
				break;
			default:
				$res = $this->mymodel->select_all('tbl_user');
				break;
		}
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

	public function daftar_kelompok_Mentor($nim){
		$res = $this->mymodel->select('tbl_kelompok',"mentor = $nim");
		$row = $res->row();

		if($this->session->userdata('status') == "Mentor"){
			if($nim == isset($row->mentor)){
			$data = json_decode($row->menti,true);
			for($i = 1;$i <= count($data);$i++){
				$res2 = $this->mymodel->select('tbl_user',array(
					'nim' => $data['anggota_'.$i]));
				$row2 = $res2->row();
				$menti['menti_'.$i.'_nim'] = $row2->nim;
				$menti['menti_'.$i.'_nama'] = $row2->nama;
				$menti['menti_'.$i.'_prodi'] = $row2->prodi;
				$menti['menti_'.$i.'_hp'] = $row2->hp;
				$menti['menti_'.$i.'_foto'] = $row2->foto;
			}
			$this->load->view('dashboard',array(
				'status' => true,
				'data' => $menti,
				'nama_kelompok' => $row->nama));
			}else{
			$this->load->view('dashboard',array(
				'row' => $res->result_array(),
				'status' => false));
			}
		}
	}

	public function daftar_kelompok_Menti($nim){
		$res = $this->mymodel->select_like('tbl_kelompok','menti',$nim);
		$row = $res->row();
		if(count($row) > 0){
			$res2 = $this->mymodel->select('tbl_user',"nim = $row->mentor");
			$data = json_decode($row->menti,true);
			for($i = 1;$i <= count($data);$i++){
				$res3 = $this->mymodel->select('tbl_user',array('nim' => $data['anggota_'.$i]));
				$row3 = $res3->row();
				$menti[$i.'_nim'] = $row3->nim;
				$menti[$i.'_nama'] = $row3->nama;
				$menti[$i.'_fakultas'] = $row3->fakultas;
				$menti[$i.'_prodi'] = $row3->prodi;
				$menti[$i.'_angkatan'] = $row3->tahun_masuk;
				$menti[$i.'_hp'] = $row3->hp;
				$menti[$i.'_foto'] = $row3->foto;
			}
			$this->load->view('dashboard',array(
				'status' => true,
				'nama_kelompok' => $row->nama,
				'mentor' => $res2->row(),
				'menti' => $menti
				));
		}else{
			$this->load->view('dashboard',array(
				'status' => false
				));
		}
		
	}

	public function save_kelompok($nim){
		for($i = 1;$i <= (count($_POST) - 2);$i++){
			$array['anggota_'.$i]  = $_POST['anggota_'.$i];
		}
		$data = json_encode($array);
		$this->mymodel->insert('tbl_kelompok',array(
			'nama' => mysql_real_escape_string($_POST['nama_kelompok']),
			'mentor' => $nim,
			'menti' => $data
			));
		$this->session->set_flashdata('daftar_kelompok','Kelompok telah disimpan.');
		redirect(base_url().'index.php/dashboard/daftar_kelompok/'.$nim);
	}

	public function edit_profile($nim){
		$res = $this->mymodel->select('tbl_user',"nim = $nim");
		$row = $res->row();

		$this->load->view('dashboard',array(
			'row' => $row
			));
	}

	public function do_edit_profile($nim){
		$res = $this->mymodel->select('tbl_user',"nim = $nim");
		$row = $res->row();
		var_dump($_POST);
		if($row->password == md5(mysql_real_escape_string($_POST['old_pass']))){
			if(strlen($_POST['new_pass']) > 0){
				$pass = md5(mysql_real_escape_string($_POST['new_pass']));
			}else{
				$pass = md5(mysql_real_escape_string($_POST['old_pass']));
			}

			if($_FILES['foto']['size'] > 0){
				unlink("./assets/img/profile_pictures/$row->foto");
				$config['upload_path']          = './assets/img/profile_pictures/';
		        $config['allowed_types']        = 'gif|jpg|png|jpeg';
		        $config['max_size']             = 100;
		        $config['max_width']            = 1024;
		        $config['max_height']           = 768;
				$config['file_name'] 			= $_POST['nim'];
		        $this->load->library('upload', $config);
		        $this->upload->initialize($config);
		        $this->upload->do_upload('foto');
				$file_name = $this->upload->data();
				$foto = $file_name['file_name'];
			}else{
				$foto = $row->foto;
			}
			$this->mymodel->update('tbl_user',array(
					'nim' => mysql_real_escape_string($_POST['nim']),
					'nama' => mysql_real_escape_string($_POST['nama']),
					'tgl_lahir' => mysql_real_escape_string($_POST['ttl']),
					'tahun_masuk' => mysql_real_escape_string($_POST['tahun_masuk']),
					'prodi' => mysql_real_escape_string($_POST['prodi']),
					'fakultas' => mysql_real_escape_string($_POST['fakultas']),
					'hp' => mysql_real_escape_string($_POST['hp']),
					'email' => mysql_real_escape_string($_POST['email']),
					'jk' => $_POST['jk'],
					'password' => $pass,
					'foto' => $foto
					),"nim = $nim");
			$newdata = array(
		        'nim'  => mysql_real_escape_string($_POST['nim']),
		        'status' => $this->session->userdata('status'),
		        'nama' => mysql_real_escape_string($_POST['nama'])
				);
				$this->session->set_userdata($newdata);
				$this->session->set_flashdata('edit_profile','Data telah disimpan.');
				redirect(base_url().'index.php/dashboard/edit_profile/'.$_POST['nim']);
		}else{
			$this->session->set_flashdata('edit_profile','Password tidak sesuai.');
				redirect(base_url().'index.php/dashboard/edit_profile/'.$_POST['nim']);
		}
	}

}

?>