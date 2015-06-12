<?php
require_once("conexion.php");
$cnn=conectar();
$pid=$_POST['pid'];
$direccion=$_POST['direccion'];
$fecha=$_POST['fecha'];
$telefono=$_POST['telefono'];
$cargo=$_POST['cargo'];
$query="INSERT INTO `empleado`(`persona_id`, `empleado_direccion`, `empleado_fechnac`, `empleado_telefono`, `empleado_estado`, `empleado_cargo`, `empleado_fechreg`) 
VALUES (".$pid.",'".$direccion."','".$fecha."','".$telefono."',1,".$cargo.",CURDATE());";
//$rs=mysql_query($query,$cnn);
//$n=is_resource($rs)?mysql_num_rows($rs):0;
if(mysql_query($query,$cnn)){
    echo "correcto";           
}else{
    echo "error";
}