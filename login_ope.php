<?php
	session_start();
        //$_SESSION['intentos']=0;
	require_once("conexion.php");
	$cnn=conectar();
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
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
	}else{
            $_SESSION['intentos']=$_SESSION['intentos']+1;
            if ($_SESSION['intentos']==3)
                {
                    $query2="update usuario set usuario_estado=2 where usuario_nombre='".$usuario."'";
                    $rs=mysql_query($query2,$cnn) or die("error");
                    $_SESSION['intentos']=0;
                    echo "Excedió el número de intentos, usuario bloqueado";
                }
            else
                {
                    echo "error en  usuario o clave".$_SESSION['intentos'];
                }
	}
