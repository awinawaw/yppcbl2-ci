<?php

class Donasi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


	public function donasi_pasien()
	{
		$data['pasien'] = $this->pasien->getPasien();
		$this->load->view('donasi_pasien',$data);
		
	}

	// public function donasi_pasienver2()
	// {
	// 	$this->load->view('donasi_pasienver2');
	// }
	
	public function donasi_yayasan()
	{
		$this->load->view('donasi_yayasan');
	}
	
	public function transaksi()
	{
		$this->load->view('listpasien');
	}



	public function showPembayaran()
	{
		$data['tipe'] = array(
			'nama' => $this->input->post('fname'),
			'amount' => $this->input->post('amount'),
			'payment' => $this->input->post('payment')
		);
		$this->load->view('pembayaran',$data);
	}

	public function showAction(){
		$this->form_validation->set_rules('foto','Foto','required');


		if ($this->form_validation->run() != false) {
			$data['foto'] = $this->uploadFoto();
			$this->load->view('thanks',$status);

		}else{
			$data['tipe'] = array(
			'nama' => $this->input->post('fname'),
			'amount' => $this->input->post('amount'),
			'payment' => $this->input->post('payment')
		);
		$this->load->view('pembayaran',$data);		}
	}

	public function uploadFoto(){
            $config['upload_path']          = 'asset/images/buktipembayaran';
            $config['allowed_types']        = 'gif|jpg|png';
            // $config['max_size']             = 100;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')){
                  return $this->upload->data('file_name');
            }else{
                  return FALSE;
            }
      }

      

}