<?php

class M_donasi_yayasan extends CI_Model {
	
	public function __construct(){
		$this->load->database();
	}

	public function insert($data){								
		$this->db->query("INSERT INTO donasi_yayasan(nama_donatur, status, jumlah_donasi, bukti_donasi) VALUES('$data[name]', '$data[status]', '$data[jumlah]', '$data[foto]')");
	}
}
