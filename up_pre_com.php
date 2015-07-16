<?php
require_once("conexion.php");
$cnn=conectar();
$id=$_POST['id'];
$pre=$_POST['pre'];
$sql="UPDATE `comanda` SET `comanda_precio`=".$pre." WHERE `comanda_id`=".$id."";
if(mysql_query($sql,$cnn)){
    echo "correcto";
}else{
    echo "error";
}