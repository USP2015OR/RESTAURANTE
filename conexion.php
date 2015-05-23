<?php
function conectar(){
	$servidor ="localhost";
	$db = "colegio";
	$usuario = "root";
	$clave="";
	$cnn = mysql_connect($servidor, $usuario, $clave) or die("Error en la conexion");
	mysql_select_db($db, $cnn);
	return $cnn;
}
?>