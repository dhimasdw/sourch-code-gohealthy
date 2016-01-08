
<?php
if(isset($_COOKIE['userloginadmin']) && $_COOKIE['userloginadmin'] == 'loginadmin'){
?>
<fieldset>
<table class="table table-hover">
<div class="col-md-6">
	<tr>
		<td>No</td>
		<td>Nama Obat</td>
		<td>Jenis Obat</td>
		<td>Pilih Obat</td>
		<td>Harga Satuan Obat</td>
		<td>Jumlah Beli</td>
		<td>Harga Akhir</td>
	</tr>
		<?php 
		$namakonsumen = @$_POST['namakonsumen'];
		include "koneksi.php";
		$no=1;
		$data = $db->query("SELECT * FROM tabel_jual_data where nama_konsumen = '$namakonsumen' order by nama_obat ASC");
		while ($tampil = $data->fetch(PDO::FETCH_LAZY)) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $tampil['nama_obat']; ?></td>
				<td><?php echo $tampil['jenis_obat']; ?></td>
				<td><?php echo $tampil['pilih_obat']; ?></td>
				<td><?php echo $tampil['harga_obat_satuan']; ?></td>
				<td><?php echo $tampil['jumlah_beli']; ?></td>
				<td><?php echo $tampil['harga_akhir'] ?></td>
			</tr>
			<?php
		}
	?>
</div>
</table>
</fieldset>
<?php
} else {
    header("location:loginadmin.php");
}
?>
