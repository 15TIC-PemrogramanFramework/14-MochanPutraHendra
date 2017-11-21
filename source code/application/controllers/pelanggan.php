<?php 
/**
* 
*/
class pelanggan extends CI_controller
{
	
	function __construct()
	{
		
		parent::__construct();
		if($this->session->userdata('status') != "customer"){
			redirect(base_url("c_login"));
		}
		$this->load->model('laundry_model');
	}


function index()
{
$data['data_pelanggan']=$this->laundry_model->ambil_data_idCustomer($this->session->userdata('id_customer'));
$this->load->view('pelanggan/pelanggan',$data);
}}