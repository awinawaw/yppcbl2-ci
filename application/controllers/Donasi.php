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
		//Validasi request untuk jumlah donasi yang akan di donasikan
		$this->form_validation->set_rules('amount','Amount','required|alpha_numeric', array('required'=>'Anda harus memasukan nominal yang akan di donasikan'));

		if ($this->form_validation->run() != false) {

		$data['tipe'] = array(
			'nama' => $this->input->post('fname'),
			'amount' => $this->input->post('amount'),
			'payment' => $this->input->post('payment')
		);
		$this->load->view('pembayaran',$data);
		} else{
			$this->load->view('donasi_yayasan');
		}
	}

	public function showAction(){
		//validasi untuk bukti foto saat akan menyelesaikan transaksi donasi
		// $this->form_validation->set_rules('foto','Foto','required', array('required'=>'Anda harus mengirimkan bukti transaksi untuk menyelesaikan donasi yang anda berikan'));
		// echo "$this->input->post('foto');";

		if (!empty($_FILES['foto']['name'])) {


			$data = array(
				'name' => $this->input->post('fname'),
				'jumlah' => $this->input->post('amount'),
				'status' => 1
				// 'foto' => $this->input->post('foto') 
			);
			
			$data['foto'] = $this->uploadFoto();
			
			$this->M_donasi_yayasan->insert($data);
			
			$this->load->view('thanks',);

		}else{
			$data['tipe'] = array(
			'nama' => $this->input->post('fname'),
			'amount' => $this->input->post('amount'),
			'payment' => $this->input->post('payment')
		);
		$this->load->view('pembayaran',$data);		
	}
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