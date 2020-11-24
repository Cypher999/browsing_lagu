<?php
defined ("BASEPATH") or exit("eRROR");

class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("model_user");

	}

	public function login(){
		$post=$this->input->post();
		$nm_user=htmlspecialchars($post["nm"]);
		$password=htmlspecialchars($post["ps"]);
		$form_data=["nm_user"=>$nm_user,"password"=>$password];
		$data["user"]=$this->model_user->login($form_data);
		if($data["user"]<=0){
			redirect(site_url("/index.php?stat=err"));
		}
		else{
			$data["login"]=$this->model_user->create_data($form_data);
			foreach ($data["login"] as $log) {
				$user_data=["nm_user"=>$log->nm_user,"tipe"=>$log->type];
			}
			$this->session->set_userdata($user_data);
			redirect(site_url("/index.php"));		
			
			
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url("/index.php"));		
	}

}
?>