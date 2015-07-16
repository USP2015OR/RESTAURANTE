<?php
require_once("conexion.php");
$cnn=conectar();
$año=$_GET['año'];
$mes=$_GET['mes'];
$dia=$_GET['dia'];
//$nombre="";
if($mes==0){
    $query="SELECT c.comanda_nombre,(case dt.comanda_id when c.comanda_id then sum(dt.cantidad) end) as 'canti' 
FROM `detallecomprobante` dt 
inner join comanda c on c.comanda_id=dt.comanda_id 
inner join comprobante co on co.comprobante_id=dt.comprobante_id 
where year(co.comprobante_fechemi)=".$año."
group by c.comanda_nombre order by canti desc limit 10";
}
if($mes!=0 && $dia==0){
    $query="SELECT c.comanda_nombre,(case dt.comanda_id when c.comanda_id then sum(dt.cantidad) end) as 'canti' 
FROM `detallecomprobante` dt 
inner join comanda c on c.comanda_id=dt.comanda_id 
inner join comprobante co on co.comprobante_id=dt.comprobante_id 
where year(co.comprobante_fechemi)=".$año." and month(co.comprobante_fechemi)=".$mes."
group by c.comanda_nombre order by canti desc limit 10";
}
if($mes!=0 and $dia!=0){
    $query="SELECT c.comanda_nombre,(case dt.comanda_id when c.comanda_id then sum(dt.cantidad) end) as 'canti' 
FROM `detallecomprobante` dt 
inner join comanda c on c.comanda_id=dt.comanda_id 
inner join comprobante co on co.comprobante_id=dt.comprobante_id 
where year(co.comprobante_fechemi)=".$año." and month(co.comprobante_fechemi)=".$mes." and day(co.comprobante_fechemi)=".$dia."
group by c.comanda_nombre order by canti desc limit 10";
}
$rs=mysql_query($query,$cnn);
//$reg = mysql_fetch_array($rs);
$nfilas = mysql_num_rows ($rs);?>
<center>
    <table class="table">
        <tr>
        <td width="400">
            <font color="#2E2EFE" size="3"><b>NOMBRE</b></font>
        </td>
        <td width="200">
            <font color="#2E2EFE" size="3"><b>PEDIDOS</b></font>
        </td>
        </tr>
        <?php
        while($reg =mysql_fetch_array($rs))
            {?>
        <tr>
        <td>
            <?php echo $reg[0]; ?>
        </td>
        <td>
            <?php echo $reg[1]; ?>
        </td>
        </tr>
            <?PHP } ?>
    </table>
</center>