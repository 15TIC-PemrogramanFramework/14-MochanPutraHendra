<?php 
/**
* 
*/
class laundry extends CI_controller
{
	
	function __construct()
	{
		
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('laundry_model');
		$this->load->model('customer_model');
		$this->load->model('paket_model');
	}


function index()
{
		$data['data_customer']=$this->customer_model->ambil_data();
		$data['data_laundry']=$this->laundry_model->ambil_data();
		$this->load->model('customer_model');
		$this->load->view('laundry/laundry',$data);
}
public function tambah()
		{
			$data=array(
				'action' 	=> site_url('laundry/tambah_aksi'),
				//'id_transaksi'		=> set_value('id_transaksi'),
				'data_customer'	=> $this->customer_model->ambil_data(),
				'data_paket'	=> $this->paket_model->ambil_data(),
				'tanggal_transaksi'	=> set_value('tanggal_transaksi'),
				'tanggal_selesai'	=> set_value('tanggal_selesai'),
				'biaya'	=> set_value('biaya'),
				'berat'		=> set_value('berat'),
				'keterangan'		=> set_value('keterangan'),
				'button'	=>'Tambah'
				);

//			$this->data['id_customer'] = 
			$this->load->view('laundry/laundry_form_tambah',$data);
  			//$this->load->view('customer_model', $this->data);
		}
			function tambah_aksi()
		{
			$berat = $this->input->post('berat');
			$id_paket = $this->input->post('id_paket');
	switch ($id_paket) {
		case 2 :
			$total= $berat * 23000;
			break;
		case 3:
		$total= $berat * 6000;
		break;
		case 4:
		$total = $berat * 4000;
		default:
		$total = $berat * 3500;
			break;
	}

	
			$data=array(
			//'id_transaksi'		=> $this->input->post('id_transaksi'),
			'id_customer'			=> $this->input->post('id_customer'),
			'id_paket'				=> $id_paket,
			'tanggal_transaksi'		=> $this->input->post('tanggal_transaksi'),
			'tanggal_selesai'		=> $this->input->post('tanggal_selesai'),
			'biaya'					=> $total,
			'berat'					=> $this->input->post('berat'),
			'keterangan'			=> $this->input->post('keterangan')
			);
			$this->laundry_model->tambah_data($data);
			redirect(site_url('laundry'));
		}
			public function delete($id)
		{
			$this->laundry_model->hapus_data($id);
			redirect(site_url('laundry'));
		}
		function edit($id)
		{
			$mhs=$this->laundry_model->ambil_data_id($id);
			$data=array(
			'id_transaksi'		=> set_value('id_transaksi',$mhs->id_transaksi),
			'id_customer'		=> set_value('id_customer',$mhs->id_customer),
			'id_paket'			=> set_value('id_paket',$mhs->id_paket),
			'data_customer'	=> $this->customer_model->ambil_data(),
			'data_paket'	=> $this->paket_model->ambil_data(),
			'tanggal_transaksi'	=> set_value('tanggal_transaksi',$mhs->tanggal_transaksi),
			'tanggal_selesai'	=> set_value('tanggal_selesai',$mhs->tanggal_selesai),
			'biaya'				=> set_value('biaya',$mhs->biaya),
			'berat'				=> set_value('berat',$mhs->berat),
			'keterangan'		=> set_value('keterangan',$mhs->keterangan),
			'action' 			=> site_url('laundry/edit_aksi'),
			'button'			=>'Edit'
			);
			$this->load->view('laundry/laundry_form',$data);
		}	
		function edit_aksi()
		{
				$berat = $this->input->post('berat');
			$id_paket = $this->input->post('id_paket');
	switch ($id_paket) {
		case 2 :
			$total= $berat * 23000;
			break;
		case 3:
		$total= $berat * 6000;
		break;
		case 4:
		$total = $berat * 4000;
		default:
		$total = $berat * 3500;
			break;
	}

			$data=array(
			
			'id_customer'		=> $this->input->post('id_customer'),
			'id_paket'			=> $this->input->post('id_paket'),
			'tanggal_transaksi'	=> $this->input->post('tanggal_transaksi'),
			'tanggal_selesai'	=> $this->input->post('tanggal_selesai'),
			'biaya'				=> $total,
			'berat'				=> $this->input->post('berat'),
			'keterangan'		=> $this->input->post('keterangan')
			);
			$id_transaksi = $this->input->post('id_transaksi');
			$this->laundry_model->edit_data($id_transaksi,$data);
			redirect('laundry');
		}



}



 ?>