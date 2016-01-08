<?php 
	$db = null;
	$config['debug'] = true;
	try{
		$db = new PDO("mysql:host=localhost;dbname=db_kesehatan", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		echo $e->getMessage();
	}
?>