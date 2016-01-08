<?php
if(isset($_COOKIE['userloginadmin']) && $_COOKIE['userloginadmin'] == 'loginadmin'){
?>
<?php 
	include "koneksi.php";
	$idmember = @$_POST['idmember'];
	
	if(@$_GET['page'] == 'hapus'){
		$del = $db->query("DELETE FROM tabel_member WHERE id_member = '$idmember'");
		if($del->rowCount() > 0){
			echo "sukses";
		}
	}
?>
<?php
} else {
    header("location:loginadmin.php");
}
?>