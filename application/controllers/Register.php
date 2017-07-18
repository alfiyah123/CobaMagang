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
		$this->load->view('al', $data);
	}

	public function simpan_data_utama()
	{
		$data['tipe'] = $this->input->post('tipe');
		$data['anggota'] = $this->input->post('anggota');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['jml_anggota'] = $this->input->post('jml_anggota');
		$data['tgl_masuk'] = $this->input->post('tgl_masuk');
		$data['tgl_keluar'] = $this->input->post('tgl_keluar');
		$this->User_model->saveDataUtama($data);
	}

}