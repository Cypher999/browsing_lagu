<?php
defined ("BASEPATH") or exit("eRROR");

class Lagu extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("model_lagu");

	}
	public function index(){
		$data["arr"]["lagu"]=$this->model_lagu->read_data();
		$this->load->view("non_admin/lagu/index",$data);
	}

}
?>