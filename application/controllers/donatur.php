<?php

class donatur extends CI_Controller {

    public function pendafaranDonatur(){
    	$data = array(
    		'id' => $this->input->post('nama').$this->input->post('pass'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'nomer' => $this->input->post('nomer'),
			'pass' => md5($this->input->post('pass')),
			'alamat' => $this->input->post('alamat')
    	);
			$this->M_donatur->insert($data);
			redirect('home');
    }

    public function dashboard(){
		$this->load->view('donatur-dashboard');
    }

}