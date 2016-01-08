<?php
if(isset($_COOKIE['userloginadmin']) && $_COOKIE['userloginadmin'] == 'loginadmin'){
?>
<fieldset>
	<legend><b>Tabel Obat</b></legend>
	<div class="box" id="tabel">	
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover">
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
</div>
</div>
</fieldset>
<?php
} else {
    header("location:loginadmin.php");
}
?>