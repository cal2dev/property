<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends REST_Controller {

	protected $msg = [];
	
	public function __construct() {
		parent::__construct();
		//$this->load->helper("form");
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('contact/contact_model');
	}
	public function index_get()
	{
		$this->challengeDetails_get(); 
	}
	
	
	/****************************************************
	 *  Function to Challenge page
	 ****************************************************/
	function challengeDetails_get() {
		$this->load->view('challenge_details.php');
	}
	
	/****************************************************
	 *  Function to connectWithUs page
	 ****************************************************/
	function connectWithUs_get() {
		$this->load->view('connect_with_us.php');
	}
	
	
	
	/****************************************************
	 *  Function to form submit
	 ****************************************************/
	
	function challengeSubmit_post() {
		$msg=array();
		$is_register=0;
		$post_val= $this->input->post('data') ;  // for payload var $this->_post_args
	
		
		if($post_val){ 
			$this->form_validation->set_data($post_val);
			if($this->form_validation->run('challenge_submit') == FALSE) {
				$err=$this->form_validation->error_array();
			//	var_dump($err);
				if(isset($err['home_location']))$msg[]=$err['home_location'];
				if(isset($err['pincode']))	$msg[]=$err['pincode'];
				$this->responser($msg,400);
			}else { 
				 $is_submit=$this->contact_model->challengeSubmit(filterParameters($post_val));
				 $is_submit=1;
				if($is_submit){
					$msg[]=CHALLENGE_ACCEPTED;
					$this->responser($msg,200);
				}else{
					$this->responser($msg,400);
				} 
			}
		}
		//$this->response($message, 200); // 200 being the HTTP response code for success
	}
	
	
	function connectSubmit_post() {
		$msg=array();
		$is_register=0;
		$post_val= $this->input->post('data') ;  // for payload var $this->_post_args
	dump_it($this->input->post('data'),1);
	
		if($post_val){
			$this->form_validation->set_data($post_val);
			if($this->form_validation->run('challenge_submit') == FALSE) {
				$err=$this->form_validation->error_array();
				//	var_dump($err);
				if(isset($err['home_location']))$msg[]=$err['home_location'];
				if(isset($err['pincode']))	$msg[]=$err['pincode'];
				$this->responser($msg,400);
			}else {
				$is_submit=$this->contact_model->connectSubmit(filterParameters($post_val));
				$is_submit=1;
				if($is_submit){
					$msg[]=CONNECTED_SUCCESSFULLY;
					$this->responser($msg,200);
				}else{
					$this->responser($msg,400);
				}
			}
		}
		//$this->response($message, 200); // 200 being the HTTP response code for success
	}
	
	
	
	function responser($msg,$code) {
	//	$message = array("error");
		$message = array("nos" => count($msg),"message" =>$msg);
		$this->response($message, $code); // 200 - for success, 400 - error
	}
	
	
}
