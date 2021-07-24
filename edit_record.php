<?php
include_once 'dbconfig.php';
if (isset($_POST['btn-update'])) {
	$id = $_GET['edit_id'];
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$jabatan = $_POST['jabatan'];

	if ($crud->update($id, $nip, $nama, $jabatan)) {
		$msg = "<div class='alert alert-info'>
				<strong>Selamat</strong> Record telah berhasil diubah :)
				</div>";
	} else {
		$msg = "<div class='alert alert-warning'>
				<strong>ERROR!</strong> Update Record Gagal !
				</div>";
	}
}

if (isset($_GET['edit_id'])) {
	$id = $_GET['edit_id'];
	extract($crud->getID($id));
}

?>
<div class="container" style="margin-top:20px">
	<center>
		<font size="6">Halaman Edit Data</font>
	</center>
	<hr>
	<?php
	if (isset($msg)) {
		echo $msg;
	}
	?>

	<form method="post">
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">NIP</label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="nip" class="form-control" size="4" value="<?php echo $nip; ?>" required>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Pegawai</label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" required>
			</div>
		</div>
</div>
<div class="item form-group">
	<label class="col-form-label col-md-3 col-sm-3 label-align">Jabatan</label>
	<div class="col-md-6 col-sm-6">
		<input type="text" name="jabatan" class="form-control" value="<?php echo $jabatan; ?>" required>
	</div>
</div>
<div class="item form-group">
	<div class="col-md-6 col-sm-6 offset-md-3">
		<input type="submit" name="btn-update" class="btn btn-primary" value="Update Record">
		<a href="index.php?page=lihat_record" class="btn btn-large btn-success">Cancel</a>
	</div>
</div>
<div class="item form-group">
	<div class="col-md-6 col-sm-6 offset-md-3">
		<a href="index.php?page=lihat_record" class="btn btn-secondary btn-sm">Kembali ke Halaman Utama</a>
	</div>
</div>
</form>