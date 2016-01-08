<fieldset>
	<legend><b>Edit Obat</b></legend>
	<?php
	include 'koneksi.php';
	$id = @$_POST['id'];
	$tampilperID = $db->query("SELECT * FROM tabel_penyakit WHERE id_penyakit = '$id'");
	$data = $tampilperID->fetch(PDO::FETCH_LAZY);
	?>
	<table>
		<tr>
			<td>Nama Penyakit</td>
			<td>:</td>
			<td>
				<input type="hidden" id="idpenyakit" value="<?php echo $data['id_penyakit']; ?>">
				<input type="text" id="namapenyakit" value="<?php echo $data['nama_penyakit']; ?>">
			</td>
		</tr>
		<tr>
			<td>Info Penyakit</td>
			<td>:</td>
			<td>
				<textarea id="infopenyakit" ><?php echo $data['info_penyakit']; ?></textarea>
			</td>
		</tr>
		<tr>
			<td>Pilih Penyakit</td>
			<td>:</td>
			<td>
				<select id="pilihpenyakit">
					<option value="kepala">kepala</option>
					<option value="badan" <?php if($data->pilih_penyakit == 'badan'){ echo "selected";} ?>>badan</option>
				</select>	
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button id="simpanedit">Edit</button>
			</td>
		</tr>
	</table>
</fieldset>