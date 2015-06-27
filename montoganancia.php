<?php
require_once("conexion.php");
                         //$r=document.frm_regempleado.txtpersonaid;
	                 $cnn=conectar();
$salida="";
$cajaid=$_POST["elegido"];
//alert($id_pais);
// construimos el combo de ciudades deacuerdo al pais seleccionado
$combog = mysql_query("SELECT sum(comprobante_monfin) FROM `comprobante` WHERE comprobante_fechreg=curdate() and caja_id='$cajaid'",$cnn);
$row = mysql_fetch_array($combog);
   $salida.= "<input type='text' readonly required='required' name='txtcierremontoganancia' class='form-control'  value='".$row[0]."' >";  
echo $salida;
?>