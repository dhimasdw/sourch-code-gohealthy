
	<table border="1">
		<tr>
			<td>No</td>
			<td>Nama Obat</td>
			<td>Opsi</td>
		</tr>
		<?php 
			include "koneksi.php";
			$no=1;
			$data = $db->query("SELECT * FROM tabel_obat ORDER BY nama_obat ASC");
			while ($tampil = $data->fetch(PDO::FETCH_LAZY)) {
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $tampil['nama_obat']; ?></td>
					<td>
						<button class="pilihobat" id="<?php echo $tampil['nama_obat']; ?>">Pilih</button>
					</td>
				</tr>
				<?php
			}
		?>
</table>
<br>
