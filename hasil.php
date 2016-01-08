<?php 
	$namaobat = @$_POST['namaobat'];
	include "koneksi.php";
	$tampil = $db->query("SELECT * FROM tabel_obat WHERE nama_obat = '$namaobat'");
	$data = $tampil->fetch(PDO::FETCH_LAZY);
?>
<table>
<tr>
	<td>Nama Obat</td>
	<td>:</td>
	<td><input id="namaobat" value="<?php echo $data['nama_obat'];?>" disabled></td>
</tr>
<tr>
	<td>Jenis Obat</td>
	<td>:</td>
	<td><input id="jenisobat" value="<?php echo $data['jenis_obat'];?>" disabled></td>
</tr>
<tr>
	<td>Pilih Obat</td>
	<td>:</td>
	<td><input id="pilihobat" value="<?php echo $data['pilih_obat'];?>" disabled></td>
</tr>
<tr>
	<td>Harga Obat Satuan</td>
	<td>:</td>
	<td><input id="hargaobatsatuan" value="<?php echo $data['harga_obat'];?>" disabled></td>
</tr>
<tr>
	<td>Stok Obat</td>
	<td>:</td>
	<td><input id="stokobat" value="<?php echo $data['stok_obat'];?>" disabled></td>
</tr>
<tr>
		<td>Jumlah Beli Obat Di Pilih</td>
		<td>:</td>
		<td><input id="jumlahbeli"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><button id="beli" >Beli</button>
		<button id="tabelmuncul">Tampilkan Data Yang Dibeli</button>
	</td>
</tr>
</table>
</fieldset>