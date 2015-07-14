<?php
require_once("conexion.php");
$cnn=conectar();
$id=$_POST['id'];
$usuario=$_POST['usuario'];
$cant=$_POST['cant'];
$sql="UPDATE `temp_detallepedido` SET `cantidad`=".$cant.",`total`=".$cant."*`precio`  WHERE `id`=".$id." and `usuario`=".$usuario."";
if(mysql_query($sql,$cnn)){
    echo "correcto";
}else{
    echo "error";
}