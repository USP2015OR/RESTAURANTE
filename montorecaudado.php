<?php
require_once("conexion.php");
                         //$r=document.frm_regempleado.txtpersonaid;
	                 $cnn=conectar();
$salida="";
$cajaid=$_POST["elegido"];
$suma=0;
//alert($id_pais);
// construimos el combo de ciudades deacuerdo al pais seleccionado
$combog = mysql_query("SELECT sum(comprobante_monfin) FROM `comprobante` WHERE comprobante_fechreg=curdate() and caja_id='$cajaid'",$cnn);
$row = mysql_fetch_array($combog);
$combog1 = mysql_query("SELECT movimiento_monini FROM `movimiento` where `caja_id`= '$cajaid' and movimiento_fecha=curdate()",$cnn);
$row1 = mysql_fetch_array($combog1);
$suma=$row[0]+$row1[0];
$suma1=$suma.".00";
$salida.= "<input type='text' readonly required='required' name='txtcierremontorecaudado' class='form-control'  value='".$suma1."' >";  
echo $salida;
?>