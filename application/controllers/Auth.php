<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	function __construct(){
		parent::__construct();		
		$this->load->model('Mymodel_admin');
	}

	function index(){
		$this->load->view('index');
	}

	function auth_akses(){
		$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek=$this->Mymodel_admin->auth_akses($username,$password);
        if($cek->num_rows() > 0){ //jika login sebagai dosen
                $data=$cek->row_array();
                $this->session->set_userdata('masuk',TRUE);
                if($data['level']=='1'){ //Akses admin
                    $data_session = array(
                    'nama' => $username,
                    'status' => "login"
                    );
                    $this->session->set_userdata($data_session);
                    $this->session->set_userdata('login','status');
                    $this->session->set_userdata('login','1');
                    $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('admin');
                 }
                 else if($data['level']=='2'){ //Akses admin
                    $data_session = array(
                    'nama' => $username,
                    'status' => "login"
                    );
                    $this->session->set_userdata($data_session);
                    $this->session->set_userdata('login','3');
                    $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('admin');
                 }
                 else if($data['level']=='3'){ //Akses admin
                    $data_session = array(
                    'nama' => $username,
                    'status' => "login"
                    );
                    $this->session->set_userdata($data_session);  
                    $this->session->set_userdata('login','3');
                    $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('admin');
                 }
                 else{
                 	redirect('auth/eror');
                 }
        }else{ //jika login sebagai mahasiswa
                   redirect('auth/eror');
        }
 
	}

	function eror(){
		$this->load->view('index');
	}



	function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}

}
