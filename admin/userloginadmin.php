
<?php
include "koneksi.php";
$stmt = $db->prepare('select * from tabel_admin where nama_admin = ?');
$stmt->execute(array($_POST['usernameadmin']));
$user = $stmt->fetch(PDO::FETCH_OBJ);
setcookie('admin' , $_POST['usernameadmin'] , time()+7000);
if($user != null && $_POST['passwordadmin'] == $user->password){
    header('location:halamanadmin.php');

    if($_POST['remember'] == '1'){
        setcookie('userloginadmin', 'loginadmin', time()+(3600*24));
    } else {
        setcookie('userloginadmin', 'loginadmin');
    }
} else {
    if($_POST['usernameadmin'] == "" || $_POST['passwordadmin'] == "" ){
        echo "Isi dengan lengkap...!!!";
        ?>
        <form action="loginadmin.php" method="post">
            <button type="submit" name="submit">Back</button>
        </form>
        <?php
    } else {
        echo "<h1>Kombinasi Username = ".$_POST['usernameadmin']." &amp; Password = ".$_POST['passwordadmin']." tidak tepat</h1>";    
    ?>
        <form action="loginadmin.php" method="post">
            <button type="submit" name="submit">Back</button>
        </form>
        <?php 
    }
}
?>