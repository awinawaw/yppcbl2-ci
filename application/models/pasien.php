<?php
class pasien extends CI_Model{

	public function getPasien(){
		$query = $this->db->query("SELECT * from pasien");
		$res   = $query->result();  

		return $res;
	}

}