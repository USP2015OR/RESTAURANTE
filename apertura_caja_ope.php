<?php
require_once("conexion.php");
$cnn=conectar();
$aperturacaja=$_POST['aperturacaja'];
$aperturamovimiento=$_POST['aperturamovimiento'];
$aperturafecha=$_POST['aperturafecha'];
$aperturamontoinicial=$_POST['aperturamontoinicial'];
$aperturadolar=$_POST['aperturadolar'];
$query1="UPDATE `caja` SET `caja_estado`=2 WHERE `caja_numero`= $aperturacaja;";
 mysql_query($query1,$cnn);
$query="INSERT INTO `movimiento`(`caja_id`, `movimiento_tipo`, `movimiento_fecha`, `movimiento_monini`, `movimiento_monfin`, `movimiento_recaudacion`, `movimiento_estado`, `movimiento_fechreg`, `movimiento_tipcam`) VALUES ('$aperturacaja',(case '$aperturamovimiento' when 'Apertura' then 1 end),'$aperturafecha','$aperturamontoinicial',0.00,0.00,1,now(),$aperturadolar);";
if(mysql_query($query,$cnn)){
		echo "correcto";
                
	}else{
		echo "FALLO";
	}
?>