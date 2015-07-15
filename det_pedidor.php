<?php
require_once("conexion.php");
$cnn=conectar();
$suma=0;
$pedido=$_GET['pedido'];
//$nombre="";
$query="SELECT dp.`comanda_id`, dp.`pedido_id`, dp.`Cantidad`, dp.`PrecioUni`, dp.`PrecioTotal`, c.comanda_nombre
FROM `detallepedido`  dp
inner join comanda c on c.comanda_id=dp.comanda_id
WHERE `pedido_id`=".$pedido."";
$rs=mysql_query($query,$cnn);
$nfilas = mysql_num_rows ($rs);?>
<br>
<center>
    <table class="table">
        <tr>
        <td class="active" colspan="6">
            <center><font  size="3"><b>DETALLE DEL PEDIDO</b></font></center>
        </td>
        </tr>
        <tr class="success">
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
        <td width="100">
            <center><font color="#2E2EFE" size="3"><b></b></font></center>
        </td>
        <td width="100">
            <center><font color="#2E2EFE" size="3"><b></b></font></center>
        </td>
        </tr>
        <?php
        while($reg =mysql_fetch_array($rs))
            {?>
        <tr>
        <td>
            <?php echo $reg[5]; ?>
        </td>
        <td>
            <center><?php echo $reg[2]; ?></center>
        </td>
        <td>
            <center><?php echo $reg[3]; ?></center>
        </td>
        <td>
            <center><?php echo $reg[4]; ?></center>
        </td>
        <td width="100">
            <center><a href="#" onclick="pascid(<?php echo $reg[0]; ?>)" data-toggle="modal" data-target="#updetalle">Editar</a>
            </center>
        </td>
        <td width="100">
            <center><a href="#" onclick="elim_detpp(<?php echo $reg[0] ?>,<?php echo $pedido; ?>)">Eliminar</a></center>
        </td>
        </tr>
        <?PHP 
            $suma=$suma+$reg[4];
            } ?>
        <tr>
        <td colspan="3">
            <font color="#2E2EFE" size="3"><b>TOTAL</b></font>
        </td>
        <td>
            <center><b><?php echo $suma; ?></b></center>
        </td>
        <td width="100">
            <center><font color="#2E2EFE" size="3"><b></b></font></center>
        </td>
        <td width="100">
            <center><font color="#2E2EFE" size="3"><b></b></font></center>
        </td>
        </tr>
    </table>
</center>
<?php
$sql="UPDATE `pedido` SET `pedido_montot`=".$suma." WHERE `pedido_id`=".$pedido."";
mysql_query($sql,$cnn);
?>
<div class="modal fade" id="updetalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>EDITAR CANTIDAD</h5></center>
			</div>
                    <div class="modal-body">
                        <form id="frm_re" name="frm_nca" class="form-vertical">
                            <center>
                                <table>
                                    <tr>
                                    <td>
                                        <input type="text" name="txtncantidad" maxlength="50"  id="txtncantidad" class="form-control" placeholder="Cantidad" onkeypress="return soloNumeros(event)">
                                    </td>
                                    <td>
                                        <button type="button" onclick="up_detpp(<?php echo $pedido; ?>)" class="btn btn-success" data-dismiss="modal" >Guardar</button>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td colspan="2" hidden>
                                        <input type="text" name="txtncid" maxlength="50"  id="txtncid" class="form-control">
                                    </td>
                                    </tr>
                                </table>
                            </center>
                        </form>
                    </div>
			<div class="modal-footer">
				<center> <h7> SISTEMA DE PEDIDOS DE COMANDAS</h7></center>
			</div>
		
	</div>
</div>
</div>