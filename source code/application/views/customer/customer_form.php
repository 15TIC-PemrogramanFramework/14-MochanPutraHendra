<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	
	<div class="form-group">
		<label>Username</label>
		<input type="text" class="form-control" name="username" required placeholder="Masukkan Username" value="<?php echo $username;?>" />
	</div>

	<div class="form-group">

		<label>Password</label>
		<input type="password" class="form-control" name="password" required placeholder="Masukkan password" value="<?php echo $password;?>" />
	</div>

	<div class="form-group">
		<label>Nama Customer</label>
		<input type="text" class="form-control" name="nama_customer" required placeholder="Masukkan nama customer" value="<?php echo $nama_customer;?>" />
	</div>

	<div class="form-group">
		<label>Tanggal Bergabung</label>
		<input type="date" class="form-control" name="tanggal_bergabung" required placeholder="Masukkan tanggal bergabung" value="<?php echo $tanggal_bergabung;?>" />
	</div>

	<input type="hidden" name="id_customer" value="<?php echo $id_customer ?>">

	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('customer') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer') ?>