<?php
require_once("conexion.php");
$cnn=conectar();
$niv=$_GET['niv'];
$zon=$_GET['zon'];
//$nombre="";
$query="SELECT m.`mesa_numero`,m.`mesa_capacidad`,m.`mesa_id` FROM `mesa` m inner join zona z on z.zona_id=m.zona_id WHERE z.zona_nivel=".$niv." and z.zona_descripcion='".$zon."' limit 10";
$rs=mysql_query($query,$cnn);
//$reg = mysql_fetch_array($rs);
$nfilas = mysql_num_rows ($rs);?>
<center>
    <table class="table-striped">
        <tr>
        <td width="200">
            <center><font color="#2E2EFE" size="3"><b>NUMERO</b></font></center>
        </td>
        <td>
            <center><font color="#2E2EFE" size="3"><b>CAPACIDAD</b></font></center>
        </td>
        </tr>
        <?php
        while($reg =mysql_fetch_array($rs))
            {?>
        <tr>
        <td>
            <center><a href="#" data-dismiss="modal" onclick="pasme('<?php echo $reg[2]; ?>',<?php echo $reg[0]; ?>)"><?php echo $reg[0]; ?></a></center>
        </td>
        <td>
            <center><?php echo $reg[1]; ?></center>
        </td>
        </tr>
            <?PHP } ?>
    </table>
</center>

