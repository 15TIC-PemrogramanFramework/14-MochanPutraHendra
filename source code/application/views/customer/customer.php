
<?php $this->load->view('templates/header'); ?>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        	<div style="margin-top:-25px;margin-bottom:10px;" align="right"><?php echo anchor(site_url('customer/tambah'),
			'<i class="fa fa-plus-circle"></i> Tambah Data',
			'class="btn btn-primary"');?></div>	
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Data Customer</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                       <thead class="text-primary">
		<tr>
			<th>ID Customer </th>
			<th>Username</th>
			<th>Password </th>
			<th>Nama customer</th>
			<th>Tanggal bergabung </th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_customer as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_customer; ?></td>
			<td><?php echo $row->username; ?> </td>
			<td><?php echo $row->password; ?> </td>
			<td><?php echo $row->nama_customer; ?> </td>
			<td><?php echo $row->tanggal_bergabung; ?> </td>
					<td>
				<?php echo anchor(site_url('customer/edit/'.$row->id_customer),
					'<i class="fa fa-pencil" ></i>',
					'class="btn btn-warning"'); ?>
				<?php echo anchor(site_url('customer/delete/'.$row->id_customer),
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

