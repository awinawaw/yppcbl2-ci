<?php

class donatur extends CI_Model {
	
	public function __construct(){
		$this->load->database();
	}

	public function find_donatur($data){
		$query = $this->db->query("SELECT * from donatur where email = '$data[email]' AND password = '$data[password]'");
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $result) {
				return $result;
			}
		}else{
			return 0;
		}
	}
}
