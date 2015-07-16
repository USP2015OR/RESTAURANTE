<?php
require_once("conexion.php");
	$cnn=conectar();
        $id=$_POST['txtid'];
	$passvieja=$_POST['txtpassantigua'];
        $passnueva1=$_POST['txtpassnueva1'];
        $passnueva2=$_POST['txtpassnueva2'];
        if($passnueva1==$passnueva2){
            $query="SELECT * FROM `v_usuario` WHERE `usuario_id`=".$id." and `usuario_contrasena`=md5('".$passvieja."')";
            $rs=mysql_query($query,$cnn);
            $n=is_resource($rs)?mysql_num_rows($rs):0;
            if($n>0){
                $query2="update usuario set usuario_estado=1,`usuario_contrasena`=md5('".$passnueva1."') where usuario_id='".$id."'";
                //echo $query2;
                $rs=mysql_query($query2,$cnn) or die("error");
                echo "<script language=javascript>
            location.href='index.php';
            alert('Felicitaaciones, usuario desbloqueado, inicie sesión nuevamente');
	   </script>";
            }else{
                echo "<script language=javascript>
            location.href='restaurarpass.php';
            alert('Error en contraseña antigua');
	   </script>";
            }
        }else{
            echo "<script language=javascript>
            location.href='restaurarpass.php';
            alert('Contraseñas nuevas no coinciden');
	   </script>";
        }
	
?>

