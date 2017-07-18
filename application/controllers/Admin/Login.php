<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller {

 
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
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$this->load->view('Admin/login');
	}

	public function home(){
		session_start();
		$data['data'] = $this->Admin_model->getAllDataTerimaFiks();
		$data['data1'] = $this->Admin_model->getAllDataTerimaPenelitianFiks();
		$this->load->view('Admin/home',$data);
	}

	public function kerja_praktek(){
		$data['data'] = $this->Admin_model->getAllData();
		$data['data1'] = $this->Admin_model->getAllDataTerima();
		$data['data2'] = $this->Admin_model->getAllDataTolak();
		$this->load->view('Admin/admin',$data);
	}

	public function penelitian(){
		$data['data'] = $this->Admin_model->getAllDataPenelitian();
		$data['data1'] = $this->Admin_model->getAllDataTerimaPenelitian();
		$data['data2'] = $this->Admin_model->getAllDataTolakPenelitian();
		$this->load->view('Admin/penelitian',$data);
	}

	public function gbr_home(){
		session_start();
		$data['pesan'] = '';
		$this->load->view('Admin/gbr_home',$data);
	}

	public function gbr_user(){
		session_start();
		$data['pesan'] = '';
		$this->load->view('Admin/gbr_user',$data);
	}

	public function proseslogin()
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$this->Admin_model->cek_login($data);
		redirect(base_url().'Admin/Login/kerja_praktek');
	}

	public function detail(){
		$data['id_magang'] = $this->input->get('id');
		$dataa['data'] = $this->Admin_model->detail($data);
		$dataa['data1'] = $this->Admin_model->getDataMagang($data);
		$this->load->view('Admin/popup',$dataa);
	}

	public function detailTot(){
		$data['id_magang'] = $this->input->get('id');
		$dataa['data'] = $this->Admin_model->detailTotal($data['id_magang']);
		$this->load->view('Admin/berhasil', $dataa);
	}

	public function proses(){
		$data['id_magang'] = $this->input->get('id');
		$data['proses'] = $this->input->get('proses');
		$data['kelas'] = $this->input->get('kelas');
		$dataa['hasil'] = $this->Admin_model->proses($data);
		echo '<script type="text/javascript">alert('.$dataa['hasil'].');</script>';
		if($data['kelas'] == 0){
			redirect(base_url().'Admin/Login/kerja_praktek');
		}else{
			redirect(base_url().'Admin/Login/penelitian');
		}
		
	}

	public function logout(){
		session_start();
		unset($_SESSION['username']);
		session_destroy();
		redirect(base_url().'Admin/Login/index');
	}

	public function downloadProposal(){
		$data['id_magang'] = $this->input->get('id');
		$dataa['nama'] = $this->Admin_model->getProposalName($data);
		$this->load->helper(array('url','download'));
		force_download('uploads/proposal/'.$dataa['nama'],NULL);
	}

	public function downloadSuratPengantar(){
		$data['id_magang'] = $this->input->get('id');
		$dataa['nama'] = $this->Admin_model->getSuratName($data);
		$this->load->helper(array('url','download'));
		force_download('uploads/surat_pengantar/'.$dataa['nama'],NULL);
	}

	public function surat(){
		$data['id_magang'] = $this->input->get('id');
		$data['data'] = $this->Admin_model->getDataMagang($data);
		$data['data1'] = $this->Admin_model->getDataAnggota($data);
 		$this->load->view('Admin/surat', $data);
	}

	function simpanGbrHome(){
		session_start();
	 	$config['upload_path'] = 'uploads/background';
       	$config['allowed_types'] = 'jpg|png|gif';

       	$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload()){
			$error = array('pesan' => $this->upload->display_errors());
 
			$this->load->view('Admin/gbr_home', $error);
		}
		else{
			$data1['gambar'] = $this->upload->data('file_name');
 	
 			$data['pesan'] = $this->Admin_model->updateGbrHome($data1);
 			$this->load->view('Admin/gbr_home', $data);
		}
	}

	function simpanGbrUser(){
		session_start();
	 	$config['upload_path'] = 'uploads/background';
       	$config['allowed_types'] = 'jpg|png|gif';

       	$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload()){
			$error = array('pesan' => $this->upload->display_errors());
 
			$this->load->view('Admin/gbr_user', $error);
		}
		else{
			$data1['gambar'] = $this->upload->data('file_name');
 	
 			$data['pesan'] = $this->Admin_model->updateGbrUser($data1);
 			$this->load->view('Admin/gbr_user', $data);
		}
    		
	 }

	 function cetak(){
	 	$data['id_magang'] = $this->input->get('id');
	 	$a = array();
	 	$a = explode('|', $data['id_magang']);
	 	$hasil_id = array();
	 	$no = 0;
	 	for($i = 0; $i < count($a); $i++){
	 		if($a[$i] != '0'){
	 			if(in_array($a[$i], $hasil_id)){
	 				continue;
	 			}else{
	 				$hasil_id[$no] = $a[$i];
	 				$no++;
	 			}
	 		} 
	 	}
	 	$this->Admin_model->cobaCetak($hasil_id);
	 }

	 function cetak1(){
	 	$data['id_magang'] = $this->input->get('id');
	 	$a = array();
	 	$a = explode('|', $data['id_magang']);
	 	$hasil_id = array();
	 	$no = 0;
	 	for($i = 0; $i < count($a); $i++){
	 		if($a[$i] != '0'){
	 			if(in_array($a[$i], $hasil_id)){
	 				continue;
	 			}else{
	 				$hasil_id[$no] = $a[$i];
	 				$no++;
	 			}
	 		} 
	 	}
	 	$this->Admin_model->cobaCetak($hasil_id);
	 }

	 function cv(){
	 	$data['id_magang'] = $this->input->get('id_magang');
	 	$data['id_anggota'] = $this->input->get('id_anggota');
	 	$this->Admin_model->cv($data);
	 }

	 function hapusSemuaKerjaPraktek(){
	 	$this->Admin_model->hapusSemuaKerjaPraktek();
		redirect(base_url().'Admin/Login/kerja_praktek');
	 }

	 function hapusSemuaPenelitian(){
	 	$this->Admin_model->hapusSemuaPenelitian();
		redirect(base_url().'Admin/Login/penelitian');
	 }

	 function cetaklaporankp(){
	 	$this->Admin_model->cetakLaporanKp();
	 	redirect(base_url().'Admin/Login/kerja_praktek');
	 }

	  function cetaklaporanpenelitian(){
	 	$this->Admin_model->cetakLaporanPenelitian();
	 	redirect(base_url().'Admin/Login/penelitian');
	 }
	

}
