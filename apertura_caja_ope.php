<?php
require_once("conexion.php");
$cnn=conectar();
$aperturacaja=$_POST['aperturacaja'];
$aperturamovimiento=$_POST['aperturamovimiento'];
$aperturafecha=$_POST['aperturafecha'];
$aperturamontoinicial=$_POST['aperturamontoinicial'];
$query="INSERT INTO `movimiento`(`caja_id`, `movimiento_tipo`, `movimiento_fecha`, `movimiento_monini`, `movimiento_monfin`, `movimiento_recaudacion`, `movimiento_estado`, `movimiento_fechreg`) VALUES ('$aperturacaja',(case '$aperturamovimiento' when 'Apertura' then 1 end),'$aperturafecha','$aperturamontoinicial',0.00,0.00,1,now());";
if(mysql_query($query,$cnn)){
		echo "correcto";
                
	}else{
		echo "FALLO";
	}
?>