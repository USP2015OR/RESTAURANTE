<?php
require_once("conexion.php");
$cnn=conectar();
$caja=$_POST['caja'];
$query="INSERT INTO `caja`(`caja_numero`, `caja_estado`) VALUES ('.$caja.',1);";
if(mysql_query($query,$cnn)){
    echo "correcto";           
}else{
    echo "error";
}