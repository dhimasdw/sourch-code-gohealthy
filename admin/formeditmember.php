<fieldset>
	<legend><b>Edit member</b></legend>
	<?php
	include 'koneksi.php';
	$id = @$_POST['id'];
	$tampilperID = $db->query("SELECT * FROM tabel_member WHERE id_member = '$id'");
	$data = $tampilperID->fetch(PDO::FETCH_LAZY);
	?>
	<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>
				<input type="hidden" id="idmember" value="<?php echo $data['id_member']; ?>">
				<input type="text" id="username" value="<?php echo $data['username']; ?>">
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>
				<input type="text" id="password" value="<?php echo $data->password; ?>">
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>
				<input type="text" id="email" value="<?php echo $data->email; ?>">
			</td>
		</tr>
		<tr>
			<td>Nomer Telepon</td>
			<td>:</td>
			<td>
				<input type="text" id="no_telp" value="<?php echo $data->no_telp; ?>">
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