

<?php $this->load->view('templates/header'); ?>
<div class="row">
	 <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        	<div style="margin-top:-25px;margin-bottom:10px;" align="right"><?php echo anchor(site_url('laundry/tambah'),
			'<i class="fa fa-plus-circle"></i> Tambah Data',
			'class="btn btn-primary"');?></div>	
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Data Transaksi</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                       <thead class="text-primary">

		
		<tr>
			<th>ID Transaksi </th>
			<th>ID Customer </th>
			<th>ID Paket </th>
			<th>Tanggal Transaksi </th>
			<th>Tanggal Selesai </th>
			<th>Biaya </th>
			<th>Berat </th>
			<th>Keterangan </th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_laundry as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_transaksi; ?> </td>
			<td><?php echo $row->id_customer; ?></td>
			<td><?php echo $row->id_paket; ?> </td>
			<td><?php echo $row->tanggal_transaksi; ?> </td>
			<td><?php echo $row->tanggal_selesai; ?> </td>
			<td><?php echo $row->biaya; ?> </td>
			<td><?php echo $row->berat; ?> Kg </td>
			<td><?php echo $row->keterangan; ?> </td>
				<td>
				<?php echo anchor(site_url('laundry/edit/'.$row->id_transaksi),
					'<i class="fa fa-pencil" ></i>',
					'class="btn btn-warning"'); ?>
				<?php echo anchor(site_url('laundry/delete/'.$row->id_transaksi),
					'<i class="fa fa-trash" ></i>',
					'class="btn btn-danger"'); ?>
			</td>
		</tr>
<?php } ?>

	</tbody>
</table>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php $this->load->view('templates/footer');  ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	});

</script>

