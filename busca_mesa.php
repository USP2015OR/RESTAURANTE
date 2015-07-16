<?php
require_once("conexion.php");
$cnn=conectar();
$niv=$_GET['niv'];
$zon=$_GET['zon'];
//$nombre="";
$query="SELECT m.`mesa_numero`,m.`mesa_capacidad`,m.`mesa_id`, (case m.`mesa_estado` when 1 then 'Libre' when 3 then 'Ocupada' end) as estado, `mesa_estado`
FROM `mesa` m 
inner join zona z on z.zona_id=m.zona_id WHERE z.zona_nivel=".$niv." and z.zona_descripcion='".$zon."'";
$rs=mysql_query($query,$cnn);
//$reg = mysql_fetch_array($rs);
$nfilas = mysql_num_rows ($rs);?>
<center>
    <table class="table table-striped">
        <tr>
        <td width="200">
            <center><font color="#2E2EFE" size="3"><b>NUMERO</b></font></center>
        </td>
        <td>
            <center><font color="#2E2EFE" size="3"><b>CAPACIDAD</b></font></center>
        </td>
        <td>
            <center><font color="#2E2EFE" size="3"><b>ESTADO</b></font></center>
        </td>
        </tr>
        <?php
        while($reg =mysql_fetch_array($rs))
            {?>
        <tr>
        <td>
            <center><?php echo $reg[0]; ?></center>
        </td>
        <td>
            <center><?php echo $reg[1]; ?></center>
        </td>
        <td>
            <center><a href="#" onclick="cam_estado(<?php echo $reg[4]; ?>,<?php echo $reg[2]; ?>)"><?php echo $reg[3]; ?></a></center>
        </td>
        </tr>
            <?PHP } ?>
    </table>
</center>

