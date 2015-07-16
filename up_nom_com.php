<?php
require_once("conexion.php");
$cnn=conectar();
$id=$_POST['id'];
$nombre=$_POST['nom'];
$sql="UPDATE `comanda` SET `comanda_nombre`='".$nombre."' WHERE `comanda_id`=".$id."";
if(mysql_query($sql,$cnn)){
    echo "correcto";
}else{
    echo "error";
}