<?php
require_once("conexion.php");
                         //$r=document.frm_regempleado.txtpersonaid;
	                 $cnn=conectar();
$salida="";
$cajaid=$_POST["elegido"];
//alert($id_pais);
// construimos el combo de ciudades deacuerdo al pais seleccionado
$combog = mysql_query("SELECT movimiento_monini FROM `movimiento` where `caja_id`= '$cajaid' and movimiento_fecha=curdate()",$cnn);
$row = mysql_fetch_array($combog);
   $salida.= "<input type='text' readonly required='required' name='txtcierremontoinicial' class='form-control'  value='".$row[0]."' >";  
echo $salida;
?>