<?php
	session_start();
        //$_SESSION['intentos']=0;
	require_once("conexion.php");
	$cnn=conectar();
	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion'];
        $precio=$_POST['precio'];
        $categoria=$_POST['categoria'];
	$query="INSERT INTO `comanda`(`comanda_nombre`, `comanda_descripcion`, `comanda_estado`, `comanda_precio`, `comanda_categoria`) VALUES ('$nombre','$descripcion',1,'$precio',$categoria)";
		if(mysql_query($query,$cnn)){
		echo "Correcto";
                
	}else{
		echo "FALLO";
	}
?>