<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {	

	public function authLogin(){				
		$data = array(
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
		);
		$user_data = $this->donatur->find_donatur($data);
		
		if($user_data){
			$data_session = array(
				'status' => 'LOGIN',
				'nama' => $user_data['NAMA_DONATUR']
			);

			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('message', "Welcome ".$data_session['nama']);
			redirect('home');
		}else{
			$this->session->set_flashdata('message',"No Credential");
			redirect('home');
		}
		// echo "authLogins";
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}
}
