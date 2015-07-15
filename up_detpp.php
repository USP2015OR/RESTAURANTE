<?php
require_once("conexion.php");
$cnn=conectar();
$id=$_POST['id'];
$pedido=$_POST['pedido'];
$cant=$_POST['cant'];
$sql="UPDATE `detallepedido` SET `Cantidad`=".$cant.",`PrecioTotal`=".$cant."*`PrecioUni` WHERE `comanda_id`=".$id." and `pedido_id`=".$pedido."";
if(mysql_query($sql,$cnn)){
    echo "correcto";
}else{
    echo "error";
}