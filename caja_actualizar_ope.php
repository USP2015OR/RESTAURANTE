<?php
require_once("conexion.php");
$cnn=conectar();
$cajaid=$_POST['cajaid'];
$cajanumero=$_POST['cajanumero'];
$query="UPDATE `caja` SET `caja_numero`=$cajanumero WHERE `caja_id`=$cajaid;";
if(mysql_query($query,$cnn)){
		echo "correcto";
                
	}else{
		echo "FALLO";
	}
?>