<?php
require_once("conexion.php");
$cnn=conectar();
$id=$_POST['id'];
$query="DELETE FROM `pedido` WHERE `pedido_id`=".$id."";
if(mysql_query($query,$cnn)){
    echo "correcto";
}else{
    echo "error";
}