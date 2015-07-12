<?php
require_once("conexion.php");
$cnn=conectar();
$suma=0;
//$nombre="";
$query="SELECT `nombre`,`cantidad`, `precio`, `total`,id FROM `temp_detallepedido`";
$rs=mysql_query($query,$cnn);
//$reg = mysql_fetch_array($rs);
$nfilas = mysql_num_rows ($rs);?>
<center>
    <table class="table-striped">
        <tr>
        <td colspan="6">
            <center><font  size="3"><b>DETALLE DEL PEDIDO</b></font></center>
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
        <td width="100">
            <center><a href="#" onclick="pascid(<?php echo $reg[4]; ?>)" data-toggle="modal" data-target="#updetalle">Editar</a>
            </center>
        </td>
        <td width="100">
            <center><a href="#" onclick="elim_detp(<?php echo $reg[4] ?>)">Eliminar</a></center>
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
        <td width="100">
            <center><font color="#2E2EFE" size="3"><b></b></font></center>
        </td>
        <td width="100">
            <center><font color="#2E2EFE" size="3"><b></b></font></center>
        </td>
        </tr>
    </table>
</center>
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
                                        <input type="text" name="txtncantidad" maxlength="50"  id="txtncantidad" class="form-control" placeholder="Cantidad">
                                    </td>
                                    <td>
                                        <button type="button" onclick="up_detp()" class="btn btn-success" data-dismiss="modal" >Guardar</button>
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