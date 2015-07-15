<?php
require_once("conexion.php");
$cnn=conectar();
$usuario=$_POST['usuario'];
$query="DELETE FROM `temp_detallepedido` WHERE `usuario`=".$usuario."";
mysql_query($query,$cnn);