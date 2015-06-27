<?php
require_once("conexion.php");
$cnn=conectar();
$zona=$_POST['zona'];
$mesanumero=$_POST['mesanumero'];
$mesacapacidad=$_POST['mesacapacidad'];
$query="INSERT INTO `mesa`(`mesa_numero`, `mesa_estado`, `zona_id`, `mesa_capacidad`) VALUES ('$mesanumero','1','$zona','$mesacapacidad');";
if(mysql_query($query,$cnn)){
    echo "correcto";           
}else{
    echo "error";
}