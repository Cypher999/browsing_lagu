<?php
defined ("BASEPATH") or exit("eRROR");

class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		if(empty($this->session->userdata("nm_user"))){
			$this->load->view("user/index");	
		}
		else{
			if($this->session->userdata("tipe")=="A"){
				$this->load->view("admin/home/index");
			}
			else{
				$this->load->view("non_admin/home/index");	
			}
		}
	}
}
?>