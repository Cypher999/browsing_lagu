<?php
defined ("BASEPATH") or exit("eRROR");

class Model_genre extends CI_model{
	private $table="genre";
	public function add($data){
		return $this->db->insert($this->table,$data);
	}
	public function update($data,$where){
		return $this->db->update($this->table,$data,["kd_gen"=>$where]);
	}
	public function cek_nama($data){
		return $this->db->get_where($this->table,["gen"=>$data["gen"]])->num_rows();
	}

	public function read_data(){
		return $this->db->get($this->table)->result();
	}
	public function search($data){
		return $this->db->get_where($this->table,["kd_gen"=>$data])->result();
	}
	public function delete($data){
		return $this->db->delete($this->table,["kd_gen"=>$data]);
	}
}
?>