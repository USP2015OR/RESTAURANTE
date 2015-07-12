<?php
require_once("conexion.php");
$cnn=conectar();
$id=$_POST['id'];
$sql="DELETE FROM `temp_detallepedido` WHERE `id`=".$id."";
if(mysql_query($sql,$cnn)){
    echo "correcto";
}else{
    echo "error";
}