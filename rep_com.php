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
    <table class="table">
        <tr>
        <td width="400">
            <font color="#2E2EFE" size="3"><b>NOMBRE</b></font>
        </td>
        <td width="200">
            <font color="#2E2EFE" size="3"><b>PRECIO</b></font>
        </td>
        </tr>
        <?php
        while($reg =mysql_fetch_array($rs))
            {?>
        <tr>
        <td>
            <a href="#" data-toggle="modal" data-target="#upnom" onclick="pasidcom(<?php echo $reg[0]; ?>)"><?php echo $reg[1]; ?></a>
        </td>
        <td>
            <a href="#" data-toggle="modal" data-target="#uppre" onclick="pasidcom(<?php echo $reg[0]; ?>)"><?php echo $reg[3]; ?></a>
        </td>
        </tr>
            <?PHP } ?>
    </table>
</center>
<div class="modal fade" id="upnom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>EDITAR NOMBRE DE COMANDA</h5></center>
			</div>
                    <div class="modal-body">
                        <form id="frm_re" name="frm_re" class="form-vertical">
                            <center>
                                <table>
                                    <tr>
                                    <td>
                                        <input type="text" name="txtnombre" maxlength="50"  id="txtnombre" class="form-control" placeholder="Nombre" onkeypress="return soloLetras(event)">
                                    </td>
                                    <td>
                                        <button type="button" onclick="edit_nom_com();" class="btn btn-success" data-dismiss="modal" >Guardar</button>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td colspan="2" hidden>
                                        <input type="text" name="txtidcom" maxlength="50"  id="txtidcom" class="form-control">
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

<div class="modal fade" id="uppre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>EDITAR PRECIO DE COMANDA</h5></center>
			</div>
                    <div class="modal-body">
                        <form id="frm_pre" name="frm_pre" class="form-vertical">
                            <center>
                                <table>
                                    <tr>
                                    <td>
                                        <input type="text" name="txtprecio" maxlength="50"  id="txtprecio" class="form-control" placeholder="Precio" onkeypress="return soloNumeros(event)">
                                    </td>
                                    <td>
                                        <button type="button" onclick="edit_pre_com();" class="btn btn-success" data-dismiss="modal" >Guardar</button>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td colspan="2" hidden>
                                        <input type="text" name="txtidcom2" maxlength="50"  id="txtidcom2" class="form-control">
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

