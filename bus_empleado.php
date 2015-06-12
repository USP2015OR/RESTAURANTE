<?php
require_once("conexion.php");
$cnn=conectar();
$nombre=$_GET['nombre'];
//$nombre="";
$query="SELECT concat(`persona_prinom`,' ',`persona_segnom`,' ',`persona_apepat`,' ',`persona_apemat`) as 'nombre', `persona_dni`,persona_id
FROM `persona` WHERE concat(`persona_prinom`,' ',`persona_segnom`,' ',`persona_apepat`,' ',`persona_apemat`) like '".$nombre."%' and persona_estado=1 limit 10";
$rs=mysql_query($query,$cnn);
//$reg = mysql_fetch_array($rs);
$nfilas = mysql_num_rows ($rs);?>
<center>
    <table class="table-striped">
        <tr>
        <td>
            <font color="#2E2EFE" size="3"><b>NOMBRES Y APELLIDOS</b></font>
        </td>
        <td>
            <font color="#2E2EFE" size="3"><b>DNI</b></font>
        </td>
        </tr>
        <?php
        while($reg =mysql_fetch_array($rs))
            {?>
        <tr>
        <td>
            <a href="#" data-dismiss="modal" onclick="pasdemp('<?php echo $reg[0]; ?>',<?php echo $reg[2]; ?>)"><?php echo $reg[0]; ?></a>
        </td>
        <td>
            <?php echo $reg[1]; ?>
        </td>
        <td>
            <?PHP } ?>
    </table>
</center>

