

<?php $this->load->view('templates/header2'); ?>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                   	
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Data Pelanggan</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                       <thead class="text-primary">
		<tr>
			<th>id transaksi </th>
			<th>id customer </th>
			<th>id paket </th>
			<th>tanggal transaksi </th>
			<th>tanggal selesai </th>
			<th>biaya </th>
			<th>berat </th>
			<th>keterangan </th>
		
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_pelanggan as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_transaksi; ?> </td>
			<td><?php echo $row->id_customer; ?></td>
			<td><?php echo $row->id_paket; ?> </td>
			<td><?php echo $row->tanggal_transaksi; ?> </td>
			<td><?php echo $row->tanggal_selesai; ?> </td>
			<td><?php echo $row->biaya; ?> </td>
			<td><?php echo $row->berat; ?> Kg </td>
			<td><?php echo $row->keterangan; ?> </td>
			
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

