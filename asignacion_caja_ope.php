<?php
require_once("conexion.php");
$cnn=conectar();
$cbcaja=$_POST['cbcaja'];
$asignaciontrabajadorID=$_POST['asignaciontrabajadorID'];
$fechainicio=$_POST['fechainicio'];
$fechafin=$_POST['fechafin'];
$cbcaja1=$_POST['cbcaja1'];
$query="INSERT INTO `asignacion`(`caja_id`, `empleado_id`, `asignacion_fechini`, `asignacion_fechfin`, `asignacion_turno`, `asignacion_estado`, `asignacion_fechreg`) VALUES ($cbcaja,$asignaciontrabajadorID,'$fechainicio','$fechafin',$cbcaja1,1,curdate());";
if(mysql_query($query,$cnn)){
		echo "correcto";
                
	}else{
		echo "FALLO";
	}
?>