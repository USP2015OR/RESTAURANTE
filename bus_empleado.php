<?php
require_once("conexion.php");
$cnn=conectar();
//$nombre=$_POST['nombre'];
$nombre="";
$query="SELECT concat(`persona_prinom`,' ',`persona_segnom`,' ',`persona_apepat`,' ',`persona_apemat`) as 'nombre', `persona_dni`
FROM `persona` WHERE concat(`persona_prinom`,' ',`persona_segnom`,' ',`persona_apepat`,' ',`persona_apemat`) like '".$nombre."%' and persona_estado=1";
$rs=mysql_query($query,$cnn);
//$reg = mysql_fetch_array($rs);
$nfilas = mysql_num_rows ($rs);?>
<center>
    <table class="table">
        <tr>
        <td>
            NOMBRES Y APELLIDOS
        </td>
        <td>
            DNI
        </td>
        <td>
            OPCIÓN
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
        <td>
        <button type="button" onclick="" class="btn btn-success">Seleccionar</button>
        </td>
        </tr>
            <?PHP } ?>
    </table>
</center>

