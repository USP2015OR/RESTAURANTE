<?php
require_once("conexion.php");
$cnn=conectar();
$cierrecaja=$_POST['cierrecaja'];
$cierremovimiento=$_POST['cierremovimiento'];
$cierrefecha=$_POST['cierrefecha'];
$cierremontoinicial=$_POST['cierremontoinicial'];
$cierremontorecaudado=$_POST['cierremontorecaudado'];
$cierremontoganancia=$_POST['cierremontoganancia'];
$query="INSERT INTO `movimiento`(`caja_id`, `movimiento_tipo`, `movimiento_fecha`, `movimiento_monini`, `movimiento_monfin`, `movimiento_recaudacion`, `movimiento_estado`, `movimiento_fechreg`) VALUES ('$cierrecaja',(case '$cierremovimiento' when 'Cierre' then 2 end),'$cierrefecha','$cierremontoinicial','$cierremontoganancia','$cierremontorecaudado',2,now());";
if(mysql_query($query,$cnn)){
		echo "correcto";
                
	}else{
		echo "FALLO";
	}
?>