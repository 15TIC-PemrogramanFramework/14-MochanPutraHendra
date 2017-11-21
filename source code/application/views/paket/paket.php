
<?php $this->load->view('templates/header'); ?>
   <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        	<div style="margin-top:-25px;margin-bottom:10px;" align="right"><?php echo anchor(site_url('paket/tambah'),
			'<i class="fa fa-plus-circle"></i> Tambah Data',
			'class="btn btn-primary"');?></div>	
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Data Paket</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                       <thead class="text-primary">
		<tr>
			<th>Id Paket </th>
			<th>Nama Paket</th>
			<th>Harga Paket </th>
			<th>Hari Pengerjaan </th>
				<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_paket as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_paket; ?></td>
			<td><?php echo $row->nama_paket; ?> </td>
			<td><?php echo $row->harga_paket; ?> </td>
			<td><?php echo $row->keterangan_paket; ?> </td>
			
				<td>
				<?php echo anchor(site_url('paket/edit/'.$row->id_paket),
					'<i class="fa fa-pencil" ></i>',
					'class="btn btn-warning"'); ?>
				<?php echo anchor(site_url('paket/delete/'.$row->id_paket),
					'<i class="fa fa-trash" ></i>',
					'class="btn btn-danger"'); ?>
			</td>
		</tr>
<?php } ?>

	</tbody>
</div>
</div>
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

