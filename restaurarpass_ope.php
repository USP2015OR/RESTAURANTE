<?php
require_once("conexion.php");
	$cnn=conectar();
        $id=$_POST['id'];
	$passvieja=$_POST['passvieja'];
        $passnueva=$_POST['passnueva'];
	$query="SELECT * FROM `usuario` WHERE `uduario_id`=".$id." and `usuario_contrasena`='".$passvieja."'";
	$rs=mysql_query($query,$cnn);
	$n=is_resource($rs)?mysql_num_rows($rs):0;
        if($n>0){
            $query2="update usuario set usuario_estado=1,`usuario_contrasena`=".$passnueva." where usuario_id='".$id."'";
            $rs=mysql_query($query2,$cnn) or die("error");
            echo "correcto";
        }else{
            echo "error";
        }
?>

