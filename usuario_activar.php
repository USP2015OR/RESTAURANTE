<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
	session_start();
        //$_SESSION['intentos']=0;
	require_once("conexion.php");
	$cnn=conectar();
	$usuario=$_POST["usuario"];
        $count=count($usuario);
        for($i=0;$i<$count;$i++){
	$query="UPDATE `usuario` SET`usuario_estado`= 1 WHERE usuario_id=$usuario[$i]";
        mysql_query($query,$cnn) or die(mysql_errno());       
        }
      header('Location: usuario.php');
}
header('Location: usuario.php');
?>