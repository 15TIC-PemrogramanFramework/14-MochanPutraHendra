<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('laundry').'"><i class="fa fa-money fa-fw"></i> Transaksi</a>
	</li><li>
		<a href="'.site_url('customer').'"><i class="fa fa-users fa-fw"></i> Customer</a>
	</li><li>
		<a href="'.site_url('paket').'"><i class="fa fa-inbox fa-fw"></i> Paket</a>
	</li><li>
		<a href="'.site_url('admin').'"><i class="fa fa-edit fa-fw"></i> Edit Akun</a>
	</li>';
	}
		function generate_sidemenu2()
	{
		return '<li>
		<a href="'.site_url('pelanggan').'"><i class="fa fa-home fa-fw"></i> Home</a>
	</li>';
	}

