<?php
$dsn='mysql:host=localhost;dbname=dacn';
$username='root';
$password='';
try{
	$db=new PDO($dsn,$username,$password);
	$db->exec('set names utf8');
}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>
