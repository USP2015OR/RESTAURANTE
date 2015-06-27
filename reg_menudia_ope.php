<?php
require_once("conexion.php");
$cnn=conectar();
$fecha=$_POST['menudiafecha'];
$cantidad=$_POST['menudiacantidad'];
$comandaid=$_POST['menudiacomandaid'];
$query="INSERT INTO `menudia`(`menudia_fecha`, `menudia_cantidad`, `menudia_estado`, `comanda_id`) VALUES ('$fecha','$cantidad',1,'$comandaid');";
if(mysql_query($query,$cnn)){
    echo "correcto";           
}else{
    echo "error";
}