<?php
function conectar(){
	$servidor ="192.168.1.40";
	$db = "restaurante";
	$usuario = "root";
	$clave="";
	$cnn = mysql_connect($servidor, $usuario, $clave) or die("Error en la conexion");
	mysql_select_db($db, $cnn);
	return $cnn;
}
