<?php
require_once("conexion.php");
$cnn=conectar();
$id=$_POST['id'];
$pedido=$_POST['pedido'];
$sql="DELETE FROM `detallepedido` WHERE `comanda_id`=".$id." and `pedido_id`=".$pedido."";
if(mysql_query($sql,$cnn)){
    echo "correcto";
}else{
    echo "error";
}