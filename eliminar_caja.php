<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
	session_start();
        //$_SESSION['intentos']=0;
	require_once("conexion.php");
$cnn=conectar();
$cid=$_POST['caja'];
  $count=count($cid);
  for($i=0;$i<$count;$i++){
$query="UPDATE `caja` SET `caja_estado`= 2 WHERE caja_id=$cid[$i]";
        mysql_query($query,$cnn) or die(mysql_errno());       
        }
 echo"<script type=\"text/javascript\">alert('Usted realizo la operacion correctamente'); window.location='usuario.php';</script>" ;
      
     
}
?>