<?php
require_once("conexion.php");
$cnn=conectar();
$nombre=$_GET['nombre'];
$cat=$_GET['cat'];
//$nombre="";
$query="SELECT `comanda_id`,`comanda_nombre`,`comanda_descripcion`,`comanda_precio` FROM `comanda` WHERE `comanda_nombre` like ('".$nombre."%') and `comanda_categoria`=".$cat." limit 10";
$rs=mysql_query($query,$cnn);
//$reg = mysql_fetch_array($rs);
$nfilas = mysql_num_rows ($rs);?>
<center>
    <table class="table-striped">
        <tr>
        <td width="300">
            <font color="#2E2EFE" size="3"><b>NOMBRE</b></font>
        </td>
        <td>
            <font color="#2E2EFE" size="3"><b>PRECIO</b></font>
        </td>
        </tr>
        <?php
        while($reg =mysql_fetch_array($rs))
            {?>
        <tr>
        <td>
            <a href="#" data-dismiss="modal" onclick="pascom('<?php echo $reg[1]; ?>',<?php echo $reg[3]; ?>,<?php echo $reg[0]; ?>)"><?php echo $reg[1]; ?></a>
        </td>
        <td>
            <?php echo $reg[3]; ?>
        </td>
        </tr>
            <?PHP } ?>
    </table>
</center>

