<?php
require_once("conexion.php");
                         //$r=document.frm_regempleado.txtpersonaid;
	                 $cnn=conectar();
$salida="";
$pedidoid=$_POST["elegido"];
//alert($id_pais);
// construimos el combo de ciudades deacuerdo al pais seleccionado
$combog = mysql_query("SELECT `pedido_id` FROM `pedido` where `mesa_id`='$pedidoid' and `pedido_estado`=1",$cnn);
$row = mysql_fetch_array($combog);
if ($row[0]!="") {
   $salida.= "<input type='text' readonly required='required' name='txtcomprobantepedido' class='form-control'  value='".$row[0]."'  placeholder='0.00'>";  
 
}else{
    $salida.= "<input type='text' readonly required='required' name='txtcomprobantepedido' class='form-control'  value='0.00'  placeholder='0.00'>";  
}
echo $salida;
?>