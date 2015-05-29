<?php
function conectar(){
	$servidor ="127.0.0.1";
	$db = "restaurante";
	$usuario = "root";
	$clave="";
	$cnn = mysql_connect($servidor, $usuario, $clave) or die("Error en la conexion");
	mysql_select_db($db, $cnn);
	return $cnn;
}
