<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register extends CI_Controller {


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('User/register');
	}

	public function selesai(){
		$this->load->view('User/selesai');
	}

	public function uploadProposal(){
		$error['error'] = '';
		$this->load->view('User/upload1', $error);
	}

	public function uploadFoto(){
		$error['error'] = '';
		$this->load->view('User/upload2', $error);
	}

	public function uploadFoto1(){
		$error['error'] = '';
		$this->load->view('User/upload3', $error);
	}

	public function uploadSuratPengantar(){
		$error['error'] = '';
		$this->load->view('User/upload', $error);
	}

	public function cek_email(){
		$data['email'] = $this->input->post('email');
		$this->User_model->cek_email($data);
	}

	public function simpan_data_utama()
	{

		$config['upload_path'] = './uploads/';
       	$config['allowed_types'] = 'pdf|doc';

       	$this->load->library('upload', $config);
       	$this->upload->do_upload();
       	
		//$this->User_model->saveDataUtama($this->upload->data());
		redirect(base_url().'User/Register/index');
	}

	public function simpan_data_personal()
	{

		$this->User_model->saveData();
		redirect(base_url().'User/Register/index');
	}

	public function simpan_data_personal1()
	{

		$this->User_model->saveData1();
		redirect(base_url().'User/Register/index');
	}


	function simpan(){
		$config['upload_path'] = 'uploads/surat_pengantar';
       	$config['allowed_types'] = 'jpg|png';
       	$config['max_size'] = '1000';

       	$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
 
			$this->load->view('User/upload', $error);
		}
		else{
			$data1['nomor_surat'] = $this->input->post('nomor_surat');
			$data1['perihal_surat'] = $this->input->post('perihal_surat');
			$data1['tgl_surat'] = $this->input->post('tgl_surat');
			$data1['nama_gambar_surat'] = $this->upload->data('file_name');
 	
 			$this->User_model->updateGambarSurat($data1);
			redirect(base_url().'User/Register/uploadProposal');
		}
	 }

	 function simpanProposal(){
		$config['upload_path'] = 'uploads/proposal';
       	$config['allowed_types'] = 'pdf|doc';
       	$config['max_size'] = '3000';

       	$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
 
			$this->load->view('User/upload1', $error);
		}
		else{
			$data1['nama_file_proposal'] = $this->upload->data('file_name');
 	
 			$this->User_model->updateFileProposal($data1);
			redirect(base_url().'User/Register/uploadFoto');
		}
	 }

	 function simpanFotoAnggota(){
	 	$config['upload_path'] = 'uploads/foto_anggota';
       	$config['allowed_types'] = 'jpg|png|gif';
       	$config['max_size'] = '300';

       	$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
 
			$this->load->view('User/upload2', $error);
		}
		else{
			$data1['foto'] = $this->upload->data('file_name');
 	
 			$data['data'] = $this->User_model->updateGambarFoto($data1);

 			if($data['data'] == '0'){
 				unset($_SESSION['id_magang']);
				session_destroy();
				$this->load->view('User/selesai');
			}else{
				redirect(base_url().'User/Register/uploadFoto1');	
			}
		}
		
	 }

	 function simpanFotoAnggota1(){
	 	$config['upload_path'] = 'uploads/foto_anggota';
       	$config['allowed_types'] = 'jpg|png|gif';
       	$config['max_size'] = '300';

       	$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
 
			$this->load->view('User/upload3', $error);
		}
		else{
			$data1['foto'] = $this->upload->data('file_name');
 	
 			$this->User_model->updateGambarFoto1($data1);
 			session_start('save_data');
			unset($_SESSION['id_magang']);
			session_destroy('save_data');
 			redirect(base_url().'User/Register/selesai');	
		}
    		
	 }

	 function coba(){

	 	$data = $this->User_model->coba();
	 	echo $data;
	 }

	 

}