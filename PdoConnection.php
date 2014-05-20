<?php

try{
	$strConnection = 'mysql:host=localhost;dbname=stagev2';
	$arrExtraParam = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	$pdo           = new PDO($strConnection, 'root', 'root', $arrExtraParam); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	$msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
	die($msg);
}

?>
