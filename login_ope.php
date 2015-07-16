<?php
	session_start();
	require_once("conexion.php");
	$cnn=conectar();
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
	$query="select `u`.`usuario_nombre` AS `USUARIO`,`u`.`usuario_contrasena` AS `CONTRASENA`,`u`.`usuario_estado` AS `ESTADO`,`e`.`empleado_cargo` AS `CARGO`,concat(`p`.`persona_prinom`,' ',`p`.`persona_apepat`) AS `NOMBRE`,`u`.`usuario_id` AS `ID`,`u`.`usuario_respuesta` AS `RESPUESTA` from ((`restaurante`.`usuario` `u` join `restaurante`.`empleado` `e` on((`e`.`empleado_id` = `u`.`empleado_id`))) join `restaurante`.`persona` `p` on((`p`.`persona_id` = `e`.`persona_id`))) where `u`.`usuario_nombre`='$usuario' and `u`.`usuario_contrasena`=md5('$clave')";
	$rs=mysql_query($query,$cnn);
	$n=is_resource($rs)?mysql_num_rows($rs):0;
	if($n>0){
		$row=mysql_fetch_array($rs);
                $_SESSION['estado']=$row[2];
                if($_SESSION['estado']==1)
                    {
                        $_SESSION['tipousuario']=$row[3];
                        $_SESSION['nombre']=$row[4];
                        $_SESSION['id']=$row[5];
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
