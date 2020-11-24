<?php
defined ("BASEPATH") or exit("eRROR");

class Lagu extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("model_lagu");
		$this->load->model("model_artis");
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
		$data["arr"]["lagu"]=$this->model_lagu->read_data();
		$data["arr"]["artis"]=$this->model_artis->read_data();
		$data["arr"]["genre"]=$this->model_genre->read_data();
		$this->load->view("admin/lagu/index",$data);
	}
	public function del(){
		$this->model_lagu->delete($_GET["kd"]);
		redirect(base_url("/index.php/admin/Lagu"));
	}

	public function edit(){
		$data["arr"]["lagu"]=$this->model_lagu->search($_GET["kd"]);
		$data["arr"]["artis"]=$this->model_artis->read_data();
		$data["arr"]["genre"]=$this->model_genre->read_data();
		$this->load->view("admin/lagu/partials/partial_edit",$data);
	}

	public function add(){
		$post=$this->input->post();
		$kd_lg=$this->random(3);
		$kd_artis=htmlspecialchars($post["artis"]);
		$kd_genre=htmlspecialchars($post["genre"]);
		$nm=htmlspecialchars($post["nm_lagu"]);
		$form_data=["kd_lagu"=>$kd_lg,"kd_artis"=>$kd_artis,"kd_gen"=>$kd_genre,"judul_lagu"=>$nm];
		$this->model_lagu->add($form_data);
		redirect(base_url("/index.php/admin/Lagu"));
	}

	public function update(){
		$post=$this->input->post();
		$kd_lg=$_GET["kd"];
		$kd_artis=htmlspecialchars($post["artis"]);
		$kd_genre=htmlspecialchars($post["genre"]);
		$nm=htmlspecialchars($post["nm_lagu"]);
		$form_data=["kd_artis"=>$kd_artis,"kd_gen"=>$kd_genre,"judul_lagu"=>$nm];		
		$this->model_lagu->update($form_data,$kd_lg);
		redirect(base_url("/index.php/admin/Lagu"));
	}
}
?>