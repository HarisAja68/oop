<?php
include_once 'dbconfig.php';
?>

<div class="container" style="margin-top:20px">
		<center><font size="6">Data Pegawai</font></center>
		<hr>
		<a href="index.php?page=tambah_record"><button class="btn btn-dark right">Tambah Data</button></a>
	<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO</th>
					<th>NIP</th>
					<th>Nama Pegawai</th>
					<th>Jabatan</th>
					<th class="text-center"> Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query = "SELECT * FROM table2";
				$newquery = $crud->paging($query);
				$crud->lihatdata($newquery);
				?>
			<tbody>
		</table>
	</div>
</div>