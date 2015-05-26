<?php
	session_start();
        $_SESSION['intentos']=0;
	require_once("conexion.php");
	$cnn=conectar();
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
	$query="select * from usuario where nomcuenta='$usuario' and clave=md5('$clave')";
	$rs=mysql_query($query,$cnn);
	$n=is_resource($rs)?mysql_num_rows($rs):0;
	if($n>0){
		$row=mysql_fetch_array($rs);
		//$_SESSION['tipousuario']=$row[5];
		$_SESSION['usuario']=$usuario;
		echo "Bienvenido";		
	}else{
            $_SESSION['intentos']=$_SESSION['intentos']+1;
            if ($_SESSION['intentos']==3)
                {
                    $query2="update usuario set usuario_estado=2 where usuario_nombre="+$_SESSION['usuario'];
                }
            echo "error en  usuario o clave";
	}
