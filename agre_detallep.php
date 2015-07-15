<?php
require_once("conexion.php");
$cnn=conectar();
$id=$_POST['id'];
$cant=$_POST['cant'];
$pre=$_POST['pre'];
$tot=$_POST['tot'];
$nom=$_POST['nom'];
$pedido=$_POST['pedido'];
$sql="SELECT * FROM `detallepedido` WHERE `pedido_id`=".$pedido." and `comanda_id`=".$id."";
$rs=mysql_query($sql,$cnn);
$n=is_resource($rs)?mysql_num_rows($rs):0;
if($n>0)
    {
    echo "Platillo ya se encuentra en el detalle";
    }
else
    {
    //$query="INSERT INTO `temp_detallepedido`(`comanda_id`, `cantidad`, `precio`, `total`,nombre, `usuario`) VALUES (".$id.",".$cant.",".$pre.",".$tot.",'".$nom."',".$usuario.");";
    $query="INSERT INTO `detallepedido`(`comanda_id`, `pedido_id`, `Cantidad`, `PrecioUni`, `PrecioTotal`, `pedido_detalle_est`) VALUES (".$id.",".$pedido.",".$cant.",".$pre.",".$tot.",1);";
    if(mysql_query($query,$cnn)){
        echo "correcto";           
    }else{
        echo "error";
    }
   }
