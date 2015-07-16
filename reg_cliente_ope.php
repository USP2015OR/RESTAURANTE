<?php
require_once("conexion.php");
$cnn=conectar();
$nombre=$_POST['nombre'];
$ruc=$_POST['ruc'];
$rs=$_POST['rs'];
$query="INSERT INTO `cliente`(`cliente_ruc`, `cliente_estado`, `cliente_razsoc`, `persona_id`, `cliente_fechreg`) VALUES ('$ruc',1,'$rs','$nombre',curdate());";
if(mysql_query($query,$cnn)){
    echo "correcto";           
}else{
    echo "error";
}