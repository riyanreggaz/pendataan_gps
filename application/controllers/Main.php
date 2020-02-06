<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

		function __construct()
	{
		parent::__construct();
			$this->load->library( array('form_validation','session'));
		$this->load->model('M_gps');
	}

	public function index(){
      if ($this->input->post('submit') == 'Submit'){
			$user = $this->input->post('username', TRUE);
			$pass = $this->input->post('password', TRUE);
			$cek = $this->M_gps->get_where('account', "username = '$user' and password = '$pass'");
			if ($cek->num_rows() > 0) {
				$data = $cek->row();
				$ses = array (
						'nama' => $data->nama,
						'level' => $data->level,
						'id' => $data->id,
					);
					$this->session->set_userdata($ses);
					redirect('main/utama');
			
			} else {
				$this->session->set_flashdata('alert', "Username atau password salah");
			}
		}

		$this->load->view('v_login');
	}

public function utama(){
		$this->cek_login();
	$id = $this->session->userdata('id');
	$data['data'] = $this->M_gps->get_where('gps',array('Add' => $id ));
	$this->load->view('list_gps',$data);	
	}
public function logout(){
		$this->session->sess_destroy();
		redirect('main');
	}
public function tambah_gps(){
		$this->cek_login();
		if($this->input->post('submit', TRUE) == 'Submit')
		{
				$config['upload_path'] = './foto_gps/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 2048;
				$config['max_width'] = 1024;
				$config['max_height'] = 768;
				$config['file_name'] = 'gambar'.time();
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('Photo'))
				{
				$id = $this->session->userdata('id');		
				$up = $this->upload->data();
				$data = array(
					"Brand_GPS" => $this->input->post('Brand_GPS', TRUE),
					"Model_GPS" => $this->input->post('Model_GPS', TRUE),
					"GPS_Name"	 => $this->input->post('GPS_Name', TRUE),
					"Waranty_month" => $this->input->post('Waranty_month', TRUE),
					"Buy_Date" => $this->input->post('Buy_Date', TRUE),
					"Sold_Date" => $this->input->post('Sold_Date', TRUE),
					"Sold_To" => $this->input->post('Sold_To', TRUE),
					"Description" => $this->input->post('Description', TRUE),
					"Add" => $id,
					'Photo' => $up['file_name'] 
				);
		

			 $as=$this->M_gps->insert('gps', $data);
			redirect('main/utama');

				if ($as==TRUE)
				{
					redirect('main/dashboard');
				} else {
					echo '<script type="text/javascript">alert("Upload Gagal");</script>';
				}
			}
	
	
}
	$this->load->view('add_gps');	

}
	public function edit_gps() 
	{
			$this->cek_login();
	$Id_GPS = $this->uri->segment(3);

		if ($this->input->post('submit', TRUE) == 'Submit') {
			
				$config['upload_path'] = './foto_gps/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 2048;
				$config['max_width'] = 1024;
				$config['max_height'] = 768;
				$config['file_name'] = 'gambar'.time();
				$this->load->library('upload', $config);
				$id = $this->session->userdata('id');		
				$kumpulan = array (
					"Brand_GPS" => $this->input->post('Brand_GPS', TRUE),
					"Model_GPS" => $this->input->post('Model_GPS', TRUE),
					"GPS_Name"	 => $this->input->post('GPS_Name', TRUE),
					"Waranty_month" => $this->input->post('Waranty_month', TRUE),
					"Buy_Date" => $this->input->post('Buy_Date', TRUE),
					"Sold_Date" => $this->input->post('Sold_Date', TRUE),
					"Sold_To" => $this->input->post('Sold_To', TRUE),
					"Description" => $this->input->post('Description', TRUE),
					"Add" => $id,

				);
				if ($this->upload->do_upload('Photo'))
				{
					   $unggah = $this->upload->data();
                       $alias = $unggah['file_name'];
				
					
					unlink('./foto_gps/'.$this->input->post('old_pict', TRUE));
					$kumpulan['Photo'] = $alias;

					$this->M_gps->update('gps', $kumpulan, array('Id_GPS' => $Id_GPS));
						redirect('main/utama');
		
				}
				else {
					$this->M_gps->update('gps', $kumpulan, array('Id_GPS' => $Id_GPS));
						redirect('main/utama');
		
				}
			}
		$data = $this->M_gps->get_where('gps', array('Id_GPS' => $Id_GPS));


		foreach ($data->result() as $key) {
			$data->Id_GPS = $key->Id_GPS;
			$data->Brand_GPS = $key->Brand_GPS;
			$data->Model_GPS = $key->Model_GPS;
			$data->GPS_Name = $key->GPS_Name;
			$data->Buy_Date = $key->Buy_Date;
			$data->Waranty_month = $key->Waranty_month;
			$data->Sold_Date = $key->Sold_Date;
			$data->Sold_To = $key->Sold_To;
			$data->Photo= $key->Photo;
			$data->Description = $key->Description;

		}
		$this->load->view('edit_gps',$data);
	}
public function hapus_gps(){
		$this->cek_login();
		$this->M_gps->delete(['gps'], ['Id_GPS' => $this->uri->segment(3)]);

		redirect('main/utama');
	}

public function manage_user(){
		$this->cek_login();
	$data['data'] = $this->M_gps->get_where('account',array('level !=' => '1'));
	$this->load->view('list_user',$data);	
	}

public function tambah_user(){
	$this->cek_login();
	if($this->input->post('submit', TRUE) == 'Submit')
		{
		$user = $this->input->post('username', TRUE);
		$pass = $this->input->post('password', TRUE);
		$cek = $this->M_gps->get_where('account', "username = '$user' and password = '$pass'");
			if ($cek->num_rows() > 0) {
			echo '<script type="text/javascript">alert("Akun Sudah Ada");</script>';
		}	
		 else{

				$config['upload_path'] = './foto_user/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 2048;
				$config['max_width'] = 1024;
				$config['max_height'] = 768;
				$config['file_name'] = 'gambar'.time();
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('photo'))
				{
		$load = $this->upload->data();
		$data = array(
					"username" => $this->input->post('username', TRUE),
					"password" => $this->input->post('password', TRUE),
					"nama"	 => $this->input->post('nama', TRUE),
					"email" => $this->input->post('email', TRUE),
					"level" => 2,
					'photo' => $load['file_name'] 
				);
					
			$jj=$this->M_gps->insert('account', $data);
			redirect('main/manage_user');	
				if ($jj==TRUE)
				{
					redirect('main/manage_user');
				} else {
					echo '<script type="text/javascript">alert("Upload Gagal");</script>';
				}
			}
	
			}
	
}
	
	$this->load->view('add_user');	

}

public function edit_user() 
	{
			$this->cek_login();
	$id = $this->uri->segment(3);

		if ($this->input->post('submit', TRUE) == 'Submit') {
			
				$config['upload_path'] = './foto_user/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 2048;
				$config['max_width'] = 1024;
				$config['max_height'] = 768;
				$config['file_name'] = 'gambar'.time();
				$this->load->library('upload', $config);
				
				
				$data = array(
					"username" => $this->input->post('username', TRUE),
					"password" => $this->input->post('password', TRUE),
					"nama"	 => $this->input->post('nama', TRUE),
					"email" => $this->input->post('email', TRUE),
					"level" => 2, 
				);
				if ($this->upload->do_upload('photo'))
				{
					   $unggah = $this->upload->data();
                       $alias = $unggah['file_name'];
				
					
					unlink('./foto_user/'.$this->input->post('old_pict', TRUE));
					$data['photo'] = $alias;

					$this->M_gps->update('account', $data, array('id' => $id));
						redirect('main/manage_user');
		
				}
				else {
					$this->M_gps->update('account', $data, array('id' => $id));
						redirect('main/manage_user');
		
				}
			}
		$data = $this->M_gps->get_where('account', array('id' => $id));


		foreach ($data->result() as $key) {
			$data->id = $key->id;
			$data->username = $key->username;
			$data->password = $key->password;
			$data->nama = $key->nama;
			$data->email = $key->email;
			$data->photo= $key->photo;

		}
		$this->load->view('edit_user',$data);
	}



public function hapus_user(){
		$this->cek_login();
		$this->M_gps->delete(['account'], ['id' => $this->uri->segment(3)]);

		redirect('main/manage_user');
	}



public function profile() 
	{
			$this->cek_login();
		$id = $this->session->userdata('id');

		if ($this->input->post('submit', TRUE) == 'Submit') {
			
				$config['upload_path'] = './foto_user/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 2048;
				$config['max_width'] = 1024;
				$config['max_height'] = 768;
				$config['file_name'] = 'gambar'.time();

				$this->load->library('upload', $config);
				
				$data = array(
					"username" => $this->input->post('username', TRUE),
					"nama"	 => $this->input->post('nama', TRUE),
					"email" => $this->input->post('email', TRUE),
					"level" => 2,
				);
				if ($this->upload->do_upload('photo'))
				{
					   $unggah = $this->upload->data();
                       $alias = $unggah['file_name'];
				
					
					unlink('./foto_user/'.$this->input->post('old_pict', TRUE));
					$data['photo'] = $alias;

					$this->M_gps->update('account', $data, array('id' => $id));
						redirect('main/profile');
		
				}
				else {
					$this->M_gps->update('account', $data, array('id' => $id));
						redirect('main/profile');
		
				}
			}
		$data = $this->M_gps->get_where('account', array('id' => $id));


		foreach ($data->result() as $key) {
			$data->id = $key->id;
			$data->username = $key->username;
			$data->nama = $key->nama;
			$data->email = $key->email;
			$data->photo= $key->photo;


		}
		$this->load->view('edit_profile',$data);
	}


function change_pwd(){
		$this->cek_login();
		$id = $this->session->userdata('id');
		$pass = $this->input->post('pass1', TRUE);
		$pass2 = $this->input->post('pass2', TRUE);
		$pass3 = $this->input->post('pass3', TRUE);
		if ($this->input->post('submit', TRUE) == 'Submit')
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('pass1', 'Password Baru', 'required');
			$this->form_validation->set_rules('pass2', 'Ketik Ulang Password Baru', 'required|matches[pass1]');
			$this->form_validation->set_rules('pass3', 'Password Lama', 'required');

			if ($this->form_validation->run() == TRUE)
			{
				
             $data = array(
					"password" => $this->input->post('pass1', TRUE)
					);
					$cond = array('id' => $this->session->userdata('id'));

					$ko = $this->M_gps->update('account', $data, $cond);
				

				}
				else{
					echo '<script type="text/javascript">alert("Password Gagal Diupdate");</script>';
				}
				$mk = $this->M_gps->get_where('account', array('password' => $pass3));
				foreach ($mk->result() as $key) {
					$mk->id = $key->id;
					$mk->password = $key->password; 
}
}	
		
		$this->load->view('change_pwd');    
	}

function cek_login()
	{
		if (!$this->session->userdata('id'))
		{
			redirect('main');
		}
	}

}
