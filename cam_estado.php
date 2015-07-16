<?php
require_once("conexion.php");
$cnn=conectar();
$id=$_POST['id'];
$est=$_POST['est'];
if($est==1){
    $sql="UPDATE `mesa` SET `mesa_estado`=3 WHERE `mesa_id`=".$id."";
}else{
    $sql="UPDATE `mesa` SET `mesa_estado`=1 WHERE `mesa_id`=".$id."";
}
if(mysql_query($sql,$cnn)){
    echo "correcto";
}else{
    echo "error";
}