<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OnBoard extends MY_Controller {

	private $is_logged = FALSE;
	private $cok = 0;
	private $cok_hash = 0;
	private $uqi = 0;
	private $template_data;
	
	public function __construct() {
		parent::__construct();
		$this->template_data=new stdClass();
		
		$this->load->helper('url');
		$this->load->model('onBoard/onBoard_model');
	}
	public function index()
	{
		// dump_it($this->session);
		$this->load->view('onBoard',$this->template_data);
	}
	public function board() {
		$this->load->view('templates/home.php');
	}
	
	public function contact() {
		$this->load->view('templates/contact.php');
	}
	
	public function about() {
		$this->load->view('templates/about.php');
	}
	
}

