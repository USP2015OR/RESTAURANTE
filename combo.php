<?php
require_once("conexion.php");
                         //$r=document.frm_regempleado.txtpersonaid;
	                 $cnn=conectar();
$salida="";
$id_nivel=$_POST["elegido"];
//alert($id_pais);
// construimos el combo de ciudades deacuerdo al pais seleccionado
 $clavebus=mysql_query("SELECT Count(*) FROM `mesa` inner join zona on zona.zona_id=mesa.zona_id where zona.zona_nivel=(case '$id_nivel' when 'Primero' then 1 when 'Segundo' then 2 when 'Tercero' then 3 end)",$cnn) or
                die("Problemas en el select:".mysql_error());
                $row1 = mysql_fetch_array($clavebus);
if ($row1[0]< 20) {
 $combog = mysql_query("SELECT zona_id,zona_descripcion FROM `zona` where zona_nivel= (case '$id_nivel' when 'Primero' then 1 when 'Segundo' then 2 when 'Tercero' then 3 end)",$cnn);
 
while($sql_p = mysql_fetch_row($combog))
  {
   $salida.= "<option value='".$sql_p[0]."'>".$sql_p[1]."</option>";
  }  
echo $salida;
}else{
      echo"<script type=\"text/javascript\">alert('El nivel se encuentra lleno');</script>" ;
}
?>