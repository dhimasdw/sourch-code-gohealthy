<?php 
	include "koneksi.php";
	$idmember = @$_POST['idmember'];
	$username = @$_POST['username'];
	$password = @$_POST['password'];
	$email = @$_POST['email'];
	$no_telp = @$_POST['no_telp'];
	

	if(@$_GET['page'] == 'edit'){
		$edit = $db->prepare("UPDATE tabel_member SET username = ?, password = ?, email = ?, no_telp = ? WHERE id_member = ?");
		$edit->execute(array($username,$password,$email,$no_telp,$idmember));
		if($edit->rowCount() > 0){
			echo "sukses";
		}
	} else if(@$_GET['page'] == 'hapus'){
		$del = $db->prepare("DELETE FROM tabel_member WHERE id_member = :id");
		$del->bindParam(":id",$idmember);
		$del->execute();
		if($del->rowCount() > 0){
			echo "sukses";
		}
	}
?>