<?php
	session_start();
        //$_SESSION['intentos']=0;
	require_once("conexion.php");
	$cnn=conectar();
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
        $pregunta=$_POST['pregunta'];
        $respuesta=$_POST['respuesta'];
        $empleado=$_POST['empleado'];
	$query="INSERT INTO `usuario`(`usuario_nombre`, `usuario_contrasena`, `usuario_pregunta`, `usuario_respuesta`, `empleado_id`, `usuario_estado`) VALUES ('$usuario',md5('$clave'),'$pregunta','$respuesta','$empleado',1)";
		if(mysql_query($query,$cnn)){
		echo "SU REGISTRO FUE REALIZADO CORRECTAMENTE";
                
	}else{
		echo "FALLO";
	}
?>