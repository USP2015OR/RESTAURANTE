<?php
function conectar(){
	$servidor ="192.168.2.1";
	$db = "restaurante";
	$usuario = "richard";
	$clave="12345678";
	$cnn = mysql_connect($servidor, $usuario, $clave) or die("Error en la conexion");
	mysql_select_db($db, $cnn);
	return $cnn;
}
