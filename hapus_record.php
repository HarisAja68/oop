<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-del']))
{
	$id = $_GET['delete_id'];
	$crud->hapus($id);
	header("Location: index.php?page=hapus_record&deleted");	
}

?>
<div class="container" style="margin-top:20px">
<center><font size="6">Halaman Hapus Data</font></center>
<hr>
<div class="container">

	<?php
	if(isset($_GET['deleted']))
	{
		?>
		<center>
        <div class="alert alert-success">
    	<strong>Success!</strong> record telah dihapus... 
        </div>
		</center>
        <?php
	}
	else
	{
		?>
		<center>
        <div class="alert alert-danger">
    	<strong>Perhatian</strong> apa anda yakin akan menghapusnya ? 
		</div>
		</center>
        <?php
	}
	?>	
</div>
 	
	<?php
	if(isset($_GET['delete_id']))
	{
    $stmt = $con->prepare("SELECT * FROM table2 WHERE id=:id");
    $stmt->execute(array(":id"=>$_GET['delete_id']));
    while($row=$stmt->fetch(PDO::FETCH_BOTH))
    {
    ?>
             <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIP</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nip" class="form-control" size="4" value="<?php echo($row['nip']); ?>">
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nip" class="form-control" size="4" value="<?php echo($row['nama']); ?>">
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jabatan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nip" class="form-control" size="4" value="<?php echo($row['jabatan']); ?>">
				</div>
			</div>
    <?php
    }
    ?>
    <?php
	}
	?>

<p>
<?php
if(isset($_GET['delete_id']))
{
	?>
  	<form method="post">
      <div class="item form-group">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                    <button class="btn btn-large btn-primary" type="submit" name="btn-del">IYA</button>
					<a href="index.php?page=lihat_record" class="btn btn-large btn-success">TIDAK</a>
                </div> 
    	</div>
    </form>
	<?php
}
else
{
	?>
	<break><break><break><break><break><break>
        <a href="index.php?page=lihat_record" class="btn btn-large btn-primary">Kembali ke Halaman Utama</a>
		</div>
    <?php
}
?>