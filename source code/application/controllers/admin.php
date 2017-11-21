<?php 
/**
* 
*/
class admin extends CI_controller
{
	
	function __construct()
	{
		
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('admin_model');
	}


function index()
{
$data['data_admin']=$this->admin_model->ambil_data();
$this->load->view('admin/admin',$data);
}
public function tambah()
		{
			$data=array(
				'action' 	 => site_url('admin/tambah_aksi'),

				'id_admin'		=> set_value('id_admin'),
				
				'username'		=> set_value('username'),
				'nama'	=> set_value('nama'),
				'password'		=> set_value('password'),
				'button'	=>'Tambah'
				);

			$this->load->view('admin/admin_form',$data);
		}
			function tambah_aksi()
		{
			$data=array(

			'id_admin'		=> $this->input->post('id_admin'),
				
			'username'		=> $this->input->post('username'),
			'nama'		=> $this->input->post('nama'),
			'password'	=> $this->input->post('password')
			);
			$this->admin_model->tambah_data($data);
			redirect(site_url('admin'));
		}
			public function delete($id)
		{
			$this->admin_model->hapus_data($id);
			redirect(site_url('admin'));
		}
		function edit($id)
		{
			$mhs=$this->admin_model->ambil_data_id($id);
			$data=array(
			'id_admin'		=> set_value('id_admin',$mhs->id_admin),
			'username'	=> set_value('username',$mhs->username),
			'nama'		=> set_value('nama',$mhs->nama),
			'password'	=> set_value('password',$mhs->password),
			'action' 	=> site_url('admin/edit_aksi'),
			'button'	=>'Edit'
			);
			$this->load->view('admin/admin_form',$data);
		}	
		function edit_aksi()
		{
			$data=array(
			'id_admin'		=> $this->input->post('id_admin'),
			'username'		=> $this->input->post('username'),
			'nama'		=> $this->input->post('nama'),
			'password'	=> $this->input->post('password')
			);
			$id=$this->input->post('id_admin');
			$this->admin_model->edit_data($id,$data);
			redirect(site_url('admin'));
		}


}




 ?>