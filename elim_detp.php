<?php
require_once("conexion.php");
$cnn=conectar();
$id=$_POST['id'];
$usuario=$_POST['usuario'];
$sql="DELETE FROM `temp_detallepedido` WHERE `id`=".$id." and `usuario`=".$usuario."";
if(mysql_query($sql,$cnn)){
    echo "correcto";
}else{
    echo "error";
}