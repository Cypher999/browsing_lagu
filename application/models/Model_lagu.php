<?php
defined ("BASEPATH") or exit("eRROR");

class Model_lagu extends CI_model{
	private $table="lagu";
	public function add($data){
		$this->upload_lagu($data["kd_lagu"]);
		return $this->db->insert($this->table,$data);
	}
	public function update($data,$where){
		if(isset($_FILES["lagu"]["name"])){
			$this->upload_lagu($where);
		}
		return $this->db->update($this->table,$data,["kd_lagu"=>$where]);
	}
	public function read_data(){
		return $this->db->query("select lagu.judul_lagu,genre.gen,artis.nm_artis,lagu.kd_lagu from ".$this->table." inner join artis on lagu.kd_artis=artis.kd_artis inner join genre on lagu.kd_gen=genre.kd_gen")->result();
	}
	public function search($data){
		return $this->db->get_where($this->table,["kd_lagu"=>$data])->result();
	}
	public function delete($data){
		$cek_file="./upload/".$data.".mp3";
		if(file_exists($cek_file)){
			unlink($cek_file);
		}
		return $this->db->delete($this->table,["kd_lagu"=>$data]);
	}

	public function upload_lagu($aaa){
		$config["upload_path"]="./upload";
		$config["allowed_types"]="mp3";
		$config["file_name"]=$aaa;
		$config["overwrite"]=true;
		$config["max_size"]="10240";
		$this->load->library("upload",$config);
		if($this->upload->do_upload('lagu')){
			return $this->upload->data("file_name");
		}
	}
}
?>