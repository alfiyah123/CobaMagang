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
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['data'] = "";
		$this->load->view('User/login', $data);
	}

	public function download_file()
	{
		$this->load->helper(array('url','download'));
		force_download('uploads/Peraturan.pdf',NULL);
	}

	public function home(){
		session_start('login_user');
		$data['data'] = $this->User_model->getDetail();
		$data['data1'] = $this->User_model->getDetail1();
		$data['data2'] = $this->User_model->getGbrName();
		$this->load->view('User/home_user', $data);
	}

	public function login_user(){
		$data['email'] = $this->input->post('login_email');
		$data['password'] = $this->input->post('login_password');
		$dataa['data'] = $this->User_model->cek_login($data);
		if($dataa['data'] == '2'){
			$this->load->view('User/login', $dataa);
		}
		else if($dataa['data'] == '1'){
			$this->load->view('User/login', $dataa);
		}else{
			redirect(base_url().'User/Login/home');
		}
	}
	

	public function lupa_password(){
		$data['data'] = "";
		$this->load->view('User/lupaPassword', $data);
	}

	public function user_lupa(){
		$data['email'] = $this->input->post('email_password');
		$dataa['data'] = $this->User_model->lupa_password($data);
		$this->load->view('User/lupaPassword', $dataa);
	}

	public function konfirmasi(){
		$data['konfirmasi'] = $this->input->post('konfirmasi');
		$this->User_model->konfirmasi($data);
	}
	
	public function logout(){
		session_start('login_user');
		unset($_SESSION['id_magang']);
		session_destroy('login_user');
		redirect(base_url().'User/Home/index');
	}

}