<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$jabatan = $_POST['jabatan'];
	
	if($crud->buat($nip,$nama,$jabatan))
	{
		header("Location: index.php?page=tambah_record&inserted");
	}
	else
	{
		header("Location: index.php?page=tambah_record&failure");
	}
}
?>
<center><font size="6">Halaman Tambah Data</font></center>

<?php
if(isset($_GET['inserted']))
{
	?>
    <div class="container">
	<div class="alert alert-info">
    <strong>Selamat!</strong> Record telah sukses tersimpan....
	</div>
	</div>
    <?php
}
else if(isset($_GET['failure']))
{
	?>
    <div class="container">
	<div class="alert alert-warning">
    <strong>ERROR!</strong> Record Gagal disimpan !
	</div>
	</div>
    <?php
}
?>

<div class="clearfix"></div>
<br />

	 <form action="index.php?page=tambah_record" method='post'>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">NIP</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="nip" class="form-control" size="4" placeholder="Inputkan NIP disini !" required>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Pegawai</label>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" name="nama" class="form-control" placeholder="Inputkan Nama disini !" required>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Jabatan</label>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" name="jabatan" class="form-control" placeholder="Inputkan Jabatan disini !" required>
                    </div>
                </div>
                <div class="item form-group">
                    <div  class="col-md-6 col-sm-6 offset-md-3">
                        <input type="submit" name="btn-save" class="btn btn-primary" value="Simpan">
                    </div>
                </div>
                <div class="item form-group">
                    <div  class="col-md-6 col-sm-6 offset-md-3">
                        <a href="index.php?page=lihat_record" class="btn btn-large btn-success">Kembali ke Halaman Utama</a>
                    </div> 
                </div>
	</form>