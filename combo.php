<?php
require_once("conexion.php");
                         //$r=document.frm_regempleado.txtpersonaid;
	                 $cnn=conectar();
$salida="";
$id_pais=$_POST["elegido"];
//alert($id_pais);
// construimos el combo de ciudades deacuerdo al pais seleccionado
$combog = mysql_query("SELECT zona_id,zona_descripcion FROM `zona` where zona_nivel= (case '$id_pais' when 'Primero' then 1 when 'Segundo' then 2 when 'Tercero' then 3 end)",$cnn);
  
while($sql_p = mysql_fetch_row($combog))
  {
   $salida.= "<option value='".$sql_p[0]."'>".$sql_p[1]."</option>";
  }  
echo $salida;
?>