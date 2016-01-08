<?php
include "koneksi.php";
$stmt = $db->prepare('select * from tabel_admin where admin = ?');
$stmt->execute(array($_POST['admin']));
$admin = $stmt->fetch(PDO::FETCH_OBJ);

if($admin != null && $_POST['password'] == $admin->password){
    header('location:halamanadmin.php');

    if($_POST['remember'] == '1'){
        setcookie('adminlogin', 'login', time()+(3600*24));
    } else {
        setcookie('adminlogin', 'login');
    }
} else {
	if($_POST['admin'] == "" || $_POST['password'] == "" ){
		echo "Isi dengan lengkap...!!!";
	} else {
		echo "<h1>Kombinasi admin = ".$_POST['admin']." &amp; Password = ".$_POST['password']." tidak tepat</h1>";	
	}
}
?>