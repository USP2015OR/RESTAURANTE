<?php
session_start();
require_once("conexion.php");
$cnn=conectar();
$respuesta=$_POST['respuesta'];
$usuario=$_POST['usuario'];
$query="select * from v_usuario_login where usuario='$usuario' and RESPUESTA=md5('$respuesta')";
$rs=mysql_query($query,$cnn);
$n=is_resource($rs)?mysql_num_rows($rs):0;
if($n>0){
	$row=mysql_fetch_array($rs);
        $_SESSION['id']=$row[5];
        echo "correcto";
}else{
    echo "incorrecto";
}

