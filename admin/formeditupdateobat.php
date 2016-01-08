<fieldset>
	<legend><b>Edit Obat</b></legend>
	<?php
	include 'koneksi.php';
	$id = @$_POST['id'];
	$tampilperID = $db->query("SELECT * FROM tabel_obat WHERE id_obat = '$id'");
	$data = $tampilperID->fetch(PDO::FETCH_LAZY);
	?>
	<table>
		<tr>
			<td>Nama Obat</td>
			<td>:</td>
			<td>
				<input type="hidden" id="idobat" value="<?php echo $data['id_obat']; ?>">
				<input type="text" id="namaobat" value="<?php echo $data['nama_obat']; ?>">
			</td>
		</tr>
		<tr>
			<td>Jenis Obat</td>
			<td>:</td>
			<td>
				<select id="jenisobat">
					<option value="Sashet" <?php if($data->jenis_obat == 'Sashet'){ echo "selected";} ?>>Sashet</option>
					<option value="Cair" <?php if($data->jenis_obat == 'Cair'){ echo "selected";} ?>>Cair</option>
					<option value="Tablet" <?php if($data->jenis_obat == 'Tablet'){ echo "selected";} ?>>Tablet</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pilih Obat</td>
			<td>:</td>
			<td>
				<select id="pilihobat">
					<option value="kepala" <?php if($data->pilih_obat == 'kepala'){ echo "selected";} ?>>kepala</option>
					<option value="badan" <?php if($data->pilih_obat == 'badan'){ echo "selected";} ?>>badan</option>
				</select>	
			</td>
		</tr>
		<tr>
			<td>Harga Obat</td>
			<td>:</td>
			<td>
				<input type="text" id="hargaobat" value="<?php echo $data->harga_obat; ?>">
			</td>
		</tr>
		<tr>
			<td>Stok Obat</td>
			<td>:</td>
			<td>
				<input type="text" id="stokobat" value="<?php echo $data->stok_obat; ?>">
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