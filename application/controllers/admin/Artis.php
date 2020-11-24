<?php
defined ("BASEPATH") or exit("eRROR");

class Artis extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("model_artis");

	}

	public function random($n){
		$char="1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$has="";
		$pj=strlen($char)-1;
		for($i=0;$i<$n;$i++){
			$index=rand(0,$pj);
			$has.=$char[$index];
		}
		return $has;
	}

	public function index(){
		$data["artis"]=$this->model_artis->read_data();
		$this->load->view("admin/artis/index",$data);
	}
	public function del(){
		$this->model_artis->delete($_GET["kd"]);
		redirect(base_url("/index.php/admin/Artis"));
	}

	public function edit(){
		$data["artis"]=$this->model_artis->search($_GET["kd"]);
		$this->load->view("admin/artis/partials/partial_edit",$data);
	}

	public function add(){
		$post=$this->input->post();
		$kd=$this->random(3);
		$nm=htmlspecialchars($post["nm"]);
		$form_data=["kd_artis"=>$kd,"nm_artis"=>$nm];
		$cek_nm=$this->model_artis->cek_nama($form_data);
		if($cek_nm<=0){
			$this->model_artis->add($form_data);
			redirect(base_url("/index.php/admin/Artis"));
		}
		else{
			redirect(base_url("/index.php/admin/Artis"));	
		}
	}

	public function update(){
		$post=$this->input->post();
		$kd=$_GET["kd"];
		$nm=htmlspecialchars($post["nm"]);
		$form_data=["nm_artis"=>$nm];
		$cek_nm=$this->model_artis->cek_nama($form_data);
		if($cek_nama<=0){
			$this->model_artis->update($form_data,$kd);
			redirect(base_url("/index.php/admin/Artis"));
		}
		else{
			redirect(base_url("/index.php/admin/Artis"));	
		}
	}
}
?>