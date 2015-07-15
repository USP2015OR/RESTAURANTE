<?php
require_once("conexion.php");
$cnn=conectar();
$usuario=$_GET['usuario'];
$query="SELECT p.`pedido_id`, p.`mesa_id`, p.`empleado_id`, p.`pedido_montot`, p.`pedido_estado`,m.mesa_numero,z.zona_nivel,z.zona_descripcion FROM `pedido` p
inner join mesa m on p.mesa_id=m.mesa_id
inner join zona z on z.zona_id=m.zona_id
WHERE `empleado_id`=".$usuario." and `pedido_estado`=1";
$rs=mysql_query($query,$cnn);
$nfilas = mysql_num_rows ($rs);?>
<center>
    <table class="table">
        <tr class="active">
        <td colspan="6">
            <center><font  size="3"><b>LISTADO DE PEDIDOS</b></font></center>
        </td>
        </tr>
        <tr class="success">
        <td>
            <center><font color="#2E2EFE" size="3"><b>MESA</b></font></center>
        </td>
        <td >
            <center><font color="#2E2EFE" size="3"><b>NIVEL</b></font></center>
        </td>
        <td>
            <center><font color="#2E2EFE" size="3"><b>ZONA</b></font></center>
        </td>
        <td>
            <center><font color="#2E2EFE" size="3"><b>MONTO</b></font></center>
        </td>
        <td>
            <center><font color="#2E2EFE" size="3"><b>DETALLE</b></font></center>
        </td>
        <td>
            <center><font color="#2E2EFE" size="3"><b>ELIMINAR</b></font></center>
        </td>
        </tr>
        <?php
        while($reg =mysql_fetch_array($rs))
            {?>
        <tr>
        <td>
            <center><?php echo $reg[5]; ?></center>
        </td>
        <td>
            <center><?php echo $reg[6]; ?></center>
        </td>
        <td>
            <center><?php echo $reg[7]; ?></center>
        </td>
        <td>
            <center><?php echo $reg[3]; ?></center>
        </td>
        <td width="100">
            <center><a href="#" onclick="cargarformulario('contenido','edit_det_pedido.php?pedido=<?php echo $reg[0]; ?>');">Detalle</a>
            </center>
        </td>
        <td width="100">
            <center><a href="#" onclick="elim_ped(<?php echo $reg[0]; ?>,<?php echo $usuario; ?>)">Eliminar</a></center>
        </td>
        </tr>
        <?PHP
            } ?>
    </table>
</center>
