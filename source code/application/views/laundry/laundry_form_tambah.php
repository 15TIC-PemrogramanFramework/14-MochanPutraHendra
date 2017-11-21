<?php $this->load->view('templates/header'); 
?>
<script type="text/javascript">
	
function setTanggalSelesai(d)
{
	
	var days=d;
	var y = document.getElementsByName("tanggal_transaksi")[0].value;
	var from = y.split("-");
	var fromDate = new Date(from[0],from[1]-1,from[2]);
	//alert(fromDate);
	fromDate.setDate(fromDate.getDate() + parseInt(days));
	//alert(fromDate);
	document.getElementsByName("tanggal_selesai")[0].valueAsDate = fromDate;
	
}

function setJumlahHari() {
	var x = document.getElementsByName("id_paket")[0];
	alert(x.value);
}




</script>

<form action="<?php echo $action; ?>" method="post">
	
	<div class="form-group">
		<label>Nama Customer</label>
		<select class="form-control" name="id_customer">
			<?php 
			foreach ($data_customer as $key) 
			{
				echo '<option value="'.$key->id_customer.'">'.$key->nama_customer.'</option>';
			}
			?>
		</select>


<input type="hidden" name="id_transaksi" />


	</div>

	

	<div class="form-group">
		<label>Nama Paket</label>
		<select class="form-control" name="id_paket" onchange="setJumlahHari()">
			<?php 
			foreach ($data_paket as $key) 
			{
				echo '<option value="'.$key->id_paket.'" data-ini="'.$key->keterangan_paket.'">'.$key->nama_paket.'</option>';
			}
			?>
		</select>

	<input type="hidden" class="form-control" name="keterangan" required placeholder="jumlah hari" >

	</div>



	<div class="form-group">
		<label>Tanggal Transaksi</label>
		<input type="date" class="form-control" name="tanggal_transaksi" required placeholder="Masukkan tanggal transaksi" value="<?php echo $tanggal_transaksi;?>" onchange ="setTanggalSelesai(4);"/>
	</div>

	
	<div class="form-group">
		<label>Tanggal Selesai</label>
		<input type="date" class="form-control" name="tanggal_selesai" required placeholder="Masukkan tanggal selesai" value="<?php echo $tanggal_selesai;?>" />
	</div>


	<div class="form-group">
		<label>Berat</label>
		<input type="text" class="form-control" name="berat" required placeholder="Masukkan berat" value="<?php echo $berat;?>" />
	</div>
	<div class="form-group">
		<label>Keterangan</label>
		<select class="form-control" name="keterangan" value="<?php echo $keterangan;?>">
			<option>Keterangan</option>
			<option>Diantar</option>
			<option>Dijemput</option></select>
		</div>
		<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
		<a href="<?php echo site_url('laundry') ?>" class="btn btn-default">Cancel</a>
	
	</form>
	<?php $this->load->view('templates/footer') ?>