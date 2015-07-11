<?php
require_once("conexion.php");
$cnn=conectar();
$suma=0;
//$nombre="";
$query="SELECT `nombre`,`cantidad`, `precio`, `total` FROM `temp_detallepedido`";
$rs=mysql_query($query,$cnn);
//$reg = mysql_fetch_array($rs);
$nfilas = mysql_num_rows ($rs);?>
<center>
    <table class="table-striped">
        <tr>
        <td colspan="4">
            <center><font  size="5"><b>DETALLE DEL PEDIDO</b></font></center>
        </td>
        </tr>
        <tr>
        <td width="300">
            <font color="#2E2EFE" size="3"><b>NOMBRE</b></font>
        </td>
        <td width="150">
            <center><font color="#2E2EFE" size="3"><b>CANTIDAD</b></font></center>
        </td>
        <td width="150">
            <center><font color="#2E2EFE" size="3"><b>PRECIO</b></font></center>
        </td>
        <td width="150">
            <center><font color="#2E2EFE" size="3"><b>TOTAL</b></font></center>
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
            <center><?php echo $reg[1]; ?></center>
        </td>
        <td>
            <center><?php echo $reg[2]; ?></center>
        </td>
        <td>
            <center><?php echo $reg[3]; ?></center>
        </td>
        </tr>
        <?PHP 
            $suma=$suma+$reg[3];
            } ?>
        <tr>
        <td colspan="3">
            <font color="#2E2EFE" size="3"><b>TOTAL</b></font>
        </td>
        <td>
            <center><b><?php echo $suma; ?></b></center>
        </td>
        </tr>
    </table>
</center>