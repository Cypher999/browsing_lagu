<?php
defined ("BASEPATH") or exit("eRROR");

class Model_artis extends CI_model{
	private $table="artis";
	public function add($data){
		return $this->db->insert($this->table,$data);
	}
	public function update($data,$where){
		return $this->db->update($this->table,$data,["kd_artis"=>$where]);
	}
	public function cek_nama($data){
		return $this->db->get_where($this->table,["nm_artis"=>$data["nm_artis"]])->num_rows();
	}

	public function read_data(){
		return $this->db->get($this->table)->result();
	}
	public function search($data){
		return $this->db->get_where($this->table,["kd_artis"=>$data])->result();
	}
	public function delete($data){
		return $this->db->delete($this->table,["kd_artis"=>$data]);
	}
}
?>