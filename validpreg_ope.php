<?php
session_start();
require_once("conexion.php");
$cnn=conectar();
$respuesta=$_POST['respuesta'];
$usuario=$_POST['usuario'];
$query="select * from v_usuario_login where usuario='$usuario' and contrasena=md5('$clave')";
$rs=mysql_query($query,$cnn);
$n=is_resource($rs)?mysql_num_rows($rs):0;
if($n>0){
	$row=mysql_fetch_array($rs);
        $_SESSION['estado']=$row[2];
        if($_SESSION['estado']==1)
        {
            $_SESSION['tipousuario']=$row[3];
            $_SESSION['nombre']=$row[4];
            $_SESSION['usuario']=$usuario;
            echo "Bienvenido";
        }
        else
        {
            echo "Usuario bloqueado o eliminado";
        }
}

