<?php
require_once("conexion.php");
$cnn=conectar();
$cierrecaja=$_POST['cierrecaja'];
$cierremovimiento=$_POST['cierremovimiento'];
$cierrefecha=$_POST['cierrefecha'];
$cierremontoinicial=$_POST['cierremontoinicial'];
$cierremontorecaudado=$_POST['cierremontorecaudado'];
$cierremontoganancia=$_POST['cierremontoganancia'];
$query1="UPDATE `caja` SET `caja_estado`=1 WHERE `caja_numero`= $cierrecaja;";
 mysql_query($query1,$cnn);
$query="UPDATE `movimiento` SET `movimiento_tipo`=2,`movimiento_monfin`=$cierremontorecaudado,`movimiento_recaudacion`=$cierremontoganancia,`movimiento_estado`=2 WHERE `caja_id`= $cierrecaja and `movimiento_fecha`= curdate() and `movimiento_tipo`=1;";
if(mysql_query($query,$cnn)){
		echo "correcto";
                
	}else{
		echo "Fallo";
	}
?>