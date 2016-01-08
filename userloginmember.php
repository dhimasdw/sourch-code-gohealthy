<?php
include "koneksi.php";
$stmt = $db->prepare('select * from tabel_member where username = ?');
$stmt->execute(array($_POST['username']));
$user = $stmt->fetch(PDO::FETCH_OBJ);
setcookie('member' , $_POST['username'] , time()+7000);
if($user != null && $_POST['password'] == $user->password){
    setcookie('namamember' , $_POST['username'] , time()+20000);
    header('location:index.php');

    if($_POST['remember'] == '1'){
        setcookie('userloginmember', 'loginmember', time()+(3600*24));
    } else {
        setcookie('userloginmember', 'loginmember');
    }
} else {
	if($_POST['username'] == "" || $_POST['password'] == "" ){
		echo "Isi dengan lengkap...!!!";
        ?>
        <form action="loginmember.php" method="post">
            <button type="submit" name="submit">Back</button>
        </form>
        <?php
	} else {
		echo "<h1>Kombinasi Username = ".$_POST['username']." &amp; Password = ".$_POST['password']." tidak tepat</h1>";	
        ?>
        <form action="loginmember.php" method="post">
            <button type="submit" name="submit">Back</button>
        </form>
        <?php 
	}
}
?>