<?php
defined ("BASEPATH") or exit("eROOOOR");
class Model_user extends CI_model{
	private $table="user";
	public function login($data){
		return $this->db->query("select * from ".$this->table." where nm_user='".$data["nm_user"]."' and pass=md5('".$data["password"]."')")->num_rows();
	}

	public function create_data($data){
		return $this->db->query("select * from ".$this->table." where nm_user='".$data["nm_user"]."' and pass=md5('".$data["password"]."')")->result();	
	}
}
?>