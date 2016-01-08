 <div class="box">	
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover">
		<tr>
		 	<td>No</td>
			<td>Nama Obat</td>
			<td>Jenis Obat</td>
			<td>Obat Untuk</td>
			<td>Harga Obat</td>
			<td>Stok Obat</td>
			<td>Opsi</td>
		</tr>
			<?php
				$no = 1;
				include "koneksi.php";
				$res = $db->query("select * from tabel_obat");
				while ($data = $res->fetch(PDO::FETCH_LAZY)) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['nama_obat']; ?></td>
						<td><?php echo $data['jenis_obat']; ?></td>
						<td><?php echo $data['pilih_obat']; ?></td>
						<td><?php echo $data['harga_obat']; ?></td>
						<td><?php echo $data['stok_obat']; ?></td>
						<td>
							<button class="edit" id="<?php echo $data['id_obat']; ?>">Edit</button>
							<button class="hapus" id="<?php echo $data['id_obat']; ?>">Hapus</button>
						</td>
					</tr>
		<?php   } ?>
	</table>
</div>
</div>