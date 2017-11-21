<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	

	<div class="form-group">
		<label>Nama Paket</label>
		<input type="text" class="form-control" name="nama_paket" required placeholder="Masukkan nama paket" value="<?php echo $nama_paket;?>" />
		
	</div>

	<div class="form-group">
		<label>Harga Paket</label>
		<input type="text" class="form-control" name="harga_paket" required placeholder="Masukkan harga paket" value="<?php echo $harga_paket;?>" />
	</div>

	<div class="form-group">
		<label>Lama Pengerjaan</label>
		<input  type="text" class="form-control" name="keterangan_paket" required placeholder="Hari Pengerjaan" value="<?php echo $keterangan_paket;?>" />
	</div>
	<input type="hidden" name="id_paket" value="<?php echo $id_paket ?>">

	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('paket') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer') ?>