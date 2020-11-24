<?php
defined ("BASEPATH") or exit("eRROR");

class Genre extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("model_genre");

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
		$data["genre"]=$this->model_genre->read_data();
		$this->load->view("admin/genre/index",$data);
	}
	public function del(){
		$this->model_genre->delete($_GET["kd"]);
		redirect(base_url("/index.php/admin/Genre"));
	}

	public function edit(){
		$data["genre"]=$this->model_genre->search($_GET["kd"]);
		$this->load->view("admin/genre/partials/partial_edit",$data);
	}

	public function add(){
		$post=$this->input->post();
		$kd=$this->random(3);
		$nm=htmlspecialchars($post["nm"]);
		$form_data=["kd_gen"=>$kd,"gen"=>$nm];
		$cek_nm=$this->model_genre->cek_nama($form_data);
		if($cek_nm<=0){
			$this->model_genre->add($form_data);
			redirect(base_url("/index.php/admin/Genre"));
		}
		else{
			redirect(base_url("/index.php/admin/Genre"));	
		}
	}

	public function update(){
		$post=$this->input->post();
		$kd=$_GET["kd"];
		$nm=htmlspecialchars($post["nm"]);
		$form_data=["gen"=>$nm];
		$cek_nm=$this->model_genre->cek_nama($form_data);
		if($cek_nama<=0){
			$this->model_genre->update($form_data,$kd);
			redirect(base_url("/index.php/admin/Genre"));
		}
		else{
			redirect(base_url("/index.php/admin/Genre"));	
		}
	}
}
?>