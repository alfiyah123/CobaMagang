<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller {


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
		$data['data'] = $this->User_model->getGbrHome();
		$this->load->view('User/home', $data);
	}

	public function load_logo(){
		$this->load->view('img/logo2.png');
	}

	public function load_loading(){
		$this->load->view('img/loading.gif');
	}

	public function load_ok(){
		$this->load->view('img/ok.png');
	}

	public function slider1(){
		$this->load->view('img/01.jpg');
	}

	public function slider2(){
		$this->load->view('img/02.jpg');
	}

	public function slider3(){
		$this->load->view('img/03.jpg');
	}

	public function slider4(){
		$this->load->view('img/04.jpg');
	}

	public function slider5(){
		$this->load->view('img/05.jpg');
	}

	public function slider6(){
		$this->load->view('img/06.jpg');
	}

	public function slider7(){
		$this->load->view('img/07.jpg');
	}
	

}