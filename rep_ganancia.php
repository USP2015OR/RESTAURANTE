<?php
require_once("conexion.php");
$cnn=conectar();
$año=$_GET['año'];
$mes=$_GET['mes'];
$dia=$_GET['dia'];
//$nombre="";
if($mes==0){
    $query="SELECT caja.caja_numero,`movimiento_monfin` FROM `movimiento` inner join caja on caja.caja_id=movimiento.caja_id 
where year(movimiento_fecha)=".$año."
 limit 10";
    $query1="SELECT sum(`movimiento_monfin`)FROM `movimiento` inner join caja on caja.caja_id=movimiento.caja_id 
where year(movimiento_fecha)=".$año."
";
}
if($mes!=0 && $dia==0){
   $query="SELECT caja.caja_numero,`movimiento_monfin` FROM `movimiento` inner join caja on caja.caja_id=movimiento.caja_id 
where year(movimiento_fecha)=".$año." and month(movimiento_fecha)=".$mes."
 limit 10";
    $query1="SELECT sum(`movimiento_monfin`)FROM `movimiento` inner join caja on caja.caja_id=movimiento.caja_id 
where year(movimiento_fecha)=".$año." and month(movimiento_fecha)=".$mes."";
}
if($mes!=0 and $dia!=0){
    $query="SELECT caja.caja_numero,`movimiento_monfin` FROM `movimiento` inner join caja on caja.caja_id=movimiento.caja_id 
where year(movimiento_fecha)=".$año." and month(movimiento_fecha)=".$mes." and day(movimiento_fecha)=".$dia."
 limit 10";
     $query1="SELECT sum(`movimiento_monfin`)FROM `movimiento` inner join caja on caja.caja_id=movimiento.caja_id 
         where year(movimiento_fecha)=".$año." and month(movimiento_fecha)=".$mes." and day(movimiento_fecha)=".$dia."";
}
$rs=mysql_query($query,$cnn);
$rs1=mysql_query($query1,$cnn);
//$reg = mysql_fetch_array($rs);
$nfilas = mysql_num_rows ($rs);
$nfilas1 = mysql_fetch_array ($rs1);?>
<center>
    <table class="table">
        <tr>
        <td width="400">
            <font color="#2E2EFE" size="3"><b>CAJA</b></font>
        </td>
        <td width="200">
            <font color="#2E2EFE" size="3"><b>MONTO</b></font>
        </td>
        </tr>
        <?php
        while($reg =mysql_fetch_array($rs))
            {?>
        <tr>
        <td>Caja
            <?php echo $reg[0]; ?>
        </td>
        <td>
            <?php echo $reg[1]; ?>
        </td>
        </tr>
            <?PHP } ?>
         <tr class="active">
         <td width="400" >
            <font color="#2E2EFE" size="3"><b>TOTAL:</b></font>
        </td>
        <td >
            <?php echo $nfilas1[0]; ?>
        </td>
        </tr>
    </table>
   
</center>