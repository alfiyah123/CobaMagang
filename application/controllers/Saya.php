<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Saya extends CI_Controller {


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
		$this->load->model('Saya_model');
	}

	public function index()
	{
		$data['data'] = $this->Saya_model->getAllData();
		$this->load->view('al', $data);
	}

	public function simpan_data()
	{
		$data['nama_depan'] = $this->input->post('nama_depan');
		$data['nama_belakang'] = $this->input->post('nama_belakang');
		$this->Saya_model->saveData($data);
		redirect(base_url().'Saya');
	}

	public function edit($id){
		$data['data_mhs'] = $this->Saya_model->getDataById($id);
		$this->load->view('editAl',$data);
	}

	public function delete($id){
		$data['data_mhs'] = $this->Saya_model->deleteData($id);
		redirect(base_url().'Saya');
	}

	public function tampil($namadepan, $namabelakang)
	{
		echo "nama saya adalah ".$namadepan. " ".$namabelakang;
	}

	public function update_data($id)
	{
		$data['nama_depan'] = $this->input->post('nama_depan');
		$data['nama_belakang'] = $this->input->post('nama_belakang');
		$this->Saya_model->updateData($data, $id);
		redirect(base_url().'Saya');
	}

	public function tampil_view($namadepan, $namabelakang)
	{
		$data['namadepan'] = $namadepan;
		$data['namabelakang'] = $namabelakang;
		$this->load->view('alfiyah', $data);
	}
}