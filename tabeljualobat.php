

			<?php
				$no = 1;
				include "koneksi.php";
				$res = $db->query("SELECT * FROM tabel_jual_obat");
				while ($data = $res->fetch(PDO::FETCH_LAZY)) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
					
						<td><?php echo $data['nama_obat']; ?></td>
						<td>
							<button class="hapus" id="<?php echo $data['id_obat']; ?>">Beli</button>
						</td>
					</tr>
		<?php   } ?>
</table>