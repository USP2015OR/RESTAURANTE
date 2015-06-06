<?php
require_once("conexion.php");
$cnn=conectar();
$pnombre=$_POST['pnombre'];
$snombre=$_POST['snombre'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$dni=$_POST['dni'];
$query="INSERT INTO `persona`(`persona_prinom`, `persona_apepat`, `persona_apemat`, `persona_dni`, `persona_estado`, `persona_fechreg`, `persona_segnom`) VALUES ('".$pnombre."','".$apaterno."','".$amaterno."','".$dni."',1,now(),'".$snombre."');";
//$rs=mysql_query($query,$cnn);
//$n=is_resource($rs)?mysql_num_rows($rs):0;
if(mysql_query($query,$cnn)){
    echo "correcto";           
}else{
    echo "error";
}
