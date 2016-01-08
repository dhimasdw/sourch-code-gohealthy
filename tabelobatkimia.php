<html>
<head>
	<title>Tabel Obat</title>
</head>
<body>
	<h1><a href="menu.html">HOME</a></h1>
	<h3>Jenis</h3>
	<ul>
		<li><a href="tabelobatherbal.php">Herbal</a></li>
		<li><a href="infoobat.html">Kimia</a></li>	
	</ul>
		<table border="1">
		<tr>
			<td>Id Obat</td>
			<td>Nama Obat</td>
			<td>Jenis Obat</td>
			<td>Pilih Obat</td>
		</tr>
	<?php
		include "koneksi.php";
		$kueri = mysql_query("select * from tabel_obat where pilih_obat = 'Kimia'");

		
		while ( $i = mysql_fetch_array($kueri)) {
			echo '<tr>
					<td>' .$i['id_obat']. '</td>
					<td>' .$i['nama_obat'].'</td>
					<td>' .$i['jenis_obat'].'</td>
					<td>' .$i['pilih_obat'].'</td>
				  </tr>';
		}
	?>
		</table>
</body>
</html>