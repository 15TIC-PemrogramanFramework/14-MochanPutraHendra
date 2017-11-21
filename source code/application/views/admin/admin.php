

<?php $this->load->view('templates/header'); ?>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        	<div style="margin-top:-25px;margin-bottom:10px;" align="right"><?php echo anchor(site_url('admin/tambah'),
			'<i class="fa fa-plus-circle"></i> Tambah Data',
			'class="btn btn-primary"');?></div>	
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Data Admin</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                       <thead class="text-primary">
		<tr>
			<th>ID Admin</th>
			<th>Nama </th>
			<th>username </th>
			<th>Password </th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_admin as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_admin; ?> </td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->username; ?></td>
			<td><?php echo $row->password; ?> </td>
				<td>
				<?php echo anchor(site_url('admin/edit/'.$row->id_admin),
					'<i class="fa fa-pencil" ></i>',
					'class="btn btn-warning"'); ?>
				<?php echo anchor(site_url('admin/delete/'.$row->id_admin),
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

