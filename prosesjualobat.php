<?php 
	$namakonsumen = @$_POST['namakonsumen'];
	$namaobat = @$_POST['namaobat'];
	$jumlahbeli = @$_POST['jumlahbeli'];
	$hargaobatsatuan = @$_POST['hargaobatsatuan'];
	$hargaakhir = @$_POST['hargaakhir'];
	$pilihobat = @$_POST['pilihobat'];
	$jenisobat = @$_POST['jenisobat'];
	$sisastok = @$_POST['sisastok'];
	include "koneksi.php";

	if(@$_GET['page'] == 'inputbeli'){
		$stok = $db->query("UPDATE tabel_obat SET stok_obat = '$sisastok' WHERE nama_obat = '$namaobat'");
		if($stok->rowCount() > 0){
			$tambah = $db->query("INSERT into tabel_jual_data 
				values ('$namakonsumen','$namaobat','$jenisobat','$pilihobat','$hargaobatsatuan','$jumlahbeli','$hargaakhir',NULL)");
			if($tambah->rowCount() > 0){
				echo "sukses";
			}	
		}
	} 

	if(@$_GET['page'] == 'simpan'){
		$namakonsumensimpan = @$_POST['namakonsumensimpan'];
		$totalbayari = @$_POST['totalbayari'];
		$bayartotal = @$_POST['bayartotal'];
		$kembali = @$_POST['kembali'];

		$inset = $db->prepare("INSERT into tabel_jual values (?,?,?,?)");
		$tambaah = $inset->execute(array($namakonsumensimpan,$totalbayari,$bayartotal,$kembali));
		if($tambaah->rowCount() > 0){
			echo "sukses";
		}	
	} 
?>