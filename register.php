<?php 
		$username = @$_POST['username'];
		$password = @$_POST['password'];
        $email = @$_POST['email'];
		$no_telp = @$_POST['no_telp'];
		$no_rek = @$_POST['no_rek'];
		$alamat = @$_POST['alamat'];
		
        include "koneksi.php";

        if(@$_GET['page'] == 'save'){
			$hoax = $db->prepare("INSERT INTO tabel_member VALUES (NULL,?,?,?,?,?,?)");
            $sow = $hoax->execute(array($username,$password,$email,$no_telp,$alamat,$no_rek));
            if($sow->rowCount() > 0){
                echo "sukses";
            } 
		}

?>