<?php
require_once("conexion.php");
$cnn=conectar();
$id=$_POST['id'];
$cant=$_POST['cant'];
$pre=$_POST['pre'];
$tot=$_POST['tot'];
$nom=$_POST['nom'];
$usuario=$_POST['usuario'];
$sql="SELECT * FROM `temp_detallepedido` WHERE `comanda_id`=".$id." and usuario=".$usuario."";
$rs=mysql_query($sql,$cnn);
$n=is_resource($rs)?mysql_num_rows($rs):0;
if($n>0)
    {
    echo "Platillo ya se encuentra en el detalle";
    }
else
    {
    $query="INSERT INTO `temp_detallepedido`(`comanda_id`, `cantidad`, `precio`, `total`,nombre, `usuario`) VALUES (".$id.",".$cant.",".$pre.",".$tot.",'".$nom."',".$usuario.");";
    if(mysql_query($query,$cnn)){
        echo "correcto";           
    }else{
        echo "error";
    }
   }
