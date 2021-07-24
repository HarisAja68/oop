<?php

	class crud
	{
		private $db;

		function __construct($con)
		{
			$this->db = $con;
		}

		public function buat($nip, $nama, $jabatan)
		{
			try {
				$stmt = $this->db->prepare("INSERT INTO table2(nip,nama,jabatan) VALUES(:nip, :nama, :jabatan)");
				$stmt->bindparam(":nip", $nip);
				$stmt->bindparam(":nama", $nama);
				$stmt->bindparam(":jabatan", $jabatan);
				$stmt->execute();
				return true;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}

		public function getID($id)
		{
			$stmt = $this->db->prepare("SELECT * FROM table2 WHERE id=:id");
			$stmt->execute(array(":id" => $id));
			$editRow = $stmt->fetch(PDO::FETCH_ASSOC);
			return $editRow;
		}

		public function update($id, $nip, $nama, $jabatan)
		{
			try {
				$stmt = $this->db->prepare("UPDATE table2 SET nip=:nip, nama=:nama, jabatan=:jabatan WHERE id=:id ");
				$stmt->bindparam(":id", $id);
				$stmt->bindparam(":nip", $nip);
				$stmt->bindparam(":nama", $nama);
				$stmt->bindparam(":jabatan", $jabatan);
				$stmt->execute();

				return true;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}

		public function hapus($id)
		{
			$stmt = $this->db->prepare("DELETE FROM table2 WHERE id=:id");
			$stmt->bindparam(":id", $id);
			$stmt->execute();
			return true;
		}

		public function lihatdata($query)
		{
			$stmt = $this->db->prepare($query);
			$stmt->execute();

			if ($stmt->rowCount() > 0) {
				$no = 1;
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
				<tr>
					<td><?php echo ($no); ?></td>
					<td><?php echo ($row['nip']); ?></td>
					<td><?php echo ($row['nama']); ?></td>
					<td><?php echo ($row['jabatan']); ?></td>
					<td>
						<center>
							<a href="index.php?page=edit_record&edit_id=<?php echo ($row['id']); ?>" class="btn btn-secondary btn-sm">Edit</a>
							<a href="index.php?page=hapus_record&delete_id=<?php echo ($row['id']); ?>" class="btn btn-danger btn-sm">Hapus</a>
						</center>
					</td>
				<?php
				$no++;
			}
		} else {
				?>
				<tr>
					<td>Data tidak ditemukan...</td>
				</tr>
	<?php
		}
	}

	public function paging($query)
	{
		$query2 = $query;
		return $query2;
	}
}
