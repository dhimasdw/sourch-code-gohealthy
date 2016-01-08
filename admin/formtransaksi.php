<?php
if(isset($_COOKIE['userloginadmin']) && $_COOKIE['userloginadmin'] == 'loginadmin'){
?>
<table>
	<tr>
		<td>Total Bayar</td>
		<td><input id="totaldibayar" value="0" disabled></td>
	</tr>
	<tr>
		<td>Bayar</td>
		<td><input id="dibayar" value="0"></td>
	</tr>
	<tr>
		<td>Kembali</td>
		<td><input id="kembali" value="0" disabled></td>
	</tr>
	<tr><td></td>
		<td>
			<button id="simpan">Bayar</button>
		</td>
	</tr>
		<tr><td></td>
		<td>
			<button id="selesai" disabled>Selesai</button>
		</td>
	</tr>
</table>
<?php
} else {
    header("location:loginadmin.php");
}
?>
