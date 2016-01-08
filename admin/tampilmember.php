<?php
if(isset($_COOKIE['userloginadmin']) && $_COOKIE['userloginadmin'] == 'loginadmin'){
?>
 <div class="box" id="tabel">	
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover">
			<tr>
		 		<td>No</td>
				<td>User Name</td>
				<td>Password</td>
				<td>Email</td>
				<td>Nomer Telepon</td>
				<td>Opsi</td>
			</tr>
			<?php
				$no = 1;
				include "koneksi.php";
				$res = $db->query("select * from tabel_member");
				while ($data = $res->fetch(PDO::FETCH_LAZY)) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['username']; ?></td>
						<td><?php echo $data['password']; ?></td>
						<td><?php echo $data['email']; ?></td>
						<td><?php echo $data['no_telp']; ?></td>
						<td>
							<button class="hapus" id="<?php echo $data['id_member']; ?>">Hapus</button>
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