<?php
function conectar(){
	$servidor ="192.168.1.39";
	$db = "restaurante";
	$usuario = "richard";
	$clave="12345678";
	$cnn = mysql_connect($servidor, $usuario, $clave) or die("Error en la conexion");
	mysql_select_db($db, $cnn);
	return $cnn;
}
