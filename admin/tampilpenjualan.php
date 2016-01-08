<?php
if(isset($_COOKIE['userloginadmin']) && $_COOKIE['userloginadmin'] == 'loginadmin'){
?>
 <div class="box" id="tabel">	
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover">
			<tr>
		 		<td>No</td>
				<td>Nama Konsumen</td>
				<td>Total Bayar</td>
				<td>Bayar</td>
				<td>kembalian</td>
				<td>Opsi</td>
			</tr>
			<?php
				$no = 1;
				include "koneksi.php";
				$res = $db->query("select * from tabel_jual");
				while ($data = $res->fetch(PDO::FETCH_LAZY)) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['nama_konsumen']; ?></td>
						<td><?php echo $data['total_di_bayar']; ?></td>
						<td><?php echo $data['bayar']; ?></td>
						<td><?php echo $data['kembali']; ?></td>
						<td>
							<button >Pilih</button>
						</td>
					</tr>
			<?php   } ?>
		</table>
	</div>
</div>
<?php
} else {
    header("location:loginadmin.php");
}
?>