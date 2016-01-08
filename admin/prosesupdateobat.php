<?php 
	include "koneksi.php";
	$namaobat = @$_POST['namaobat'];
	$jenisobat = @$_POST['jenisobat'];
	$pilihobat = @$_POST['pilihobat'];
	$hargaobat = @$_POST['hargaobat'];
	$stokobat = @$_POST['stokobat'];
	$idobat = @$_POST['idobat'];

	if(@$_GET['page'] == 'tambah'){
		$tambah = $db->prepare("insert into tabel_obat values (?,?,NULL,?,?,?)");
		$tambah->execute(array($stokobat,$hargaobat,$namaobat,$jenisobat,$pilihobat));
		if($tambah->rowCount() > 0){
			echo "sukses";
		}
	} else if(@$_GET['page'] == 'edit'){
		$edit = $db->prepare("UPDATE tabel_obat SET nama_obat = ?, jenis_obat = ?, pilih_obat = ?, harga_obat = ?, stok_obat = ? WHERE id_obat = ?");
		$edit->execute(array($namaobat,$jenisobat,$pilihobat,$hargaobat,$stokobat,$idobat));
		if($edit->rowCount() > 0){
			echo "sukses";
		}
	} else if(@$_GET['page'] == 'hapus'){
		$del = $db->prepare("DELETE FROM tabel_obat WHERE id_obat = :id");
		$del->bindParam(":id",$idobat);
		$del->execute();
		if($del->rowCount() > 0){
			echo "sukses";
		}
	}
?>