<?php
$usuario=$_GET['usuario'];
?>
<html>
    <head>
        <script type="text/javascript">
        cargarformulario('detalle','det_pedido.php');
        </script>
    </head>
    <body>
        <form id="frm_regempleado" name="frm_regpedido" class="form-vertical"><center>
            <table>
                <tr>
                <td colspan="3">
                    <center>
                        <h3><font color="#5858FA"><b>REGISTRO DE PEDIDOS</b></font></h3>
                    </center>
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtmesa"><b>Mesa: </b></label></h5>
                </td>
                <td>
                    <input type="text" readonly required name="txtmesa" maxlength="50" id="txtmesa" class="form-control" placeholder="Mesa">
                </td>
                <td>
                    <button type="button" onclick="busca_mesa();" class="btn btn-success" data-toggle="modal" data-target="#selcmesa" >Buscar</button>
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtcomanda"><b>Platillo: </b></label></h5>
                </td>
                <td>
                    <input type="text" readonly required="required" name="txtcomanda" maxlength="50" id="txtcomanda" class="form-control" placeholder="Platillo">
                </td>
                <td>
                    <button type="button" onclick="busca_comanda();" class="btn btn-success" data-toggle="modal" data-target="#selccomanda" >Buscar</button>
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtcantidad"><b>Cantidad: </b></label></h5>
                </td>
                <td colspan="2">
                    <input type="number" required="required" name="txtcantidad"  id="txtcantidad" class="form-control" value="1" onkeyup="caltotal()" onchange="caltotal()">
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtprecio"><b>Precio: </b></label></h5>
                </td>
                <td colspan="2">
                    <input type="text" readonly required="required" name="txtprecio" id="txtprecio" class="form-control" value="0">
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txttotal"><b>Total: </b></label></h5>
                </td>
                <td colspan="2">
                    <input type="text" maxlength="9" required readonly name="txttotal" id="txttotal" class="form-control" value="0">
                </td>
            </tr>
                <tr>
                <td colspan="3">
                    <center>
                        <br><button type="button" onclick="agregar_detalle();" class="btn btn-success">Agregar</button>
                    </center>
                </td>
                </tr>
                <tr hidden>
                    <td><label for='txtcomandaid'>comandaid</label></td>
                    <td colspan="2"><input type='text' name='txtcomandaid' id='txtcomandaid' maxlength='10' placeholder='Ingrese personalID'/></td>
                </tr>
                <tr hidden>
                    <td><label for='txtmesaid'>mesaid</label></td>
                    <td colspan="2"><input type='text' name='txtmesaid' id='txtmesaid' maxlength='10' placeholder='Ingrese personalID'/></td>
                </tr>
            </table></center>
        </form>
        <div class="modal fade" id="selccomanda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>SELECCIONAR PLATILLO</h5></center>
			</div>
                    <div class="modal-body">
                        <form id="frm_re" name="frm_re" class="form-vertical">
                            <center>
                                <table>
                                    <tr>
                                    <td>
                                        <input type="text" name="txtbusc" maxlength="50"  id="txtbusc" class="form-control" placeholder="Nombre" onkeyup="busca_comanda();">
                                    </td>
                                    <td>
                                        <SELECT id="cbocategoria" NAME="cbocategoria" class="form-control" onchange="busca_comanda();"> 
                                            <OPTION VALUE="1">Bebida</OPTION>
                                            <OPTION VALUE="2">Sopa</OPTION>
                                            <OPTION VALUE="3">Postre</OPTION>
                                            <OPTION VALUE="4">Segundo</OPTION>
                                        </SELECT>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td colspan="2">
                                        <div id="buscomanda">
                                            
                                        </div>
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
        <div class="modal fade" id="selcmesa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>SELECCIONAR MESA</h5></center>
			</div>
                    <div class="modal-body">
                        <form id="frm_me" name="frm_me" class="form-vertical">
                            <center>
                                <table>
                                    <tr>
                                    <td>
                                        <label for="cbonivel">Nivel:</label>
                                    </td>
                                    <td>
                                        <SELECT id="cbonivel" NAME="cbonivel" class="form-control" onchange="busca_mesa();"> 
                                            <OPTION VALUE="1">1</OPTION>
                                            <OPTION VALUE="2">2</OPTION>
                                            <OPTION VALUE="3">3</OPTION>
                                        </SELECT>
                                    </td>
                                    <td>
                                        <label for="cbozona">Zona:</label>
                                    </td>
                                    <td>
                                        <SELECT id="cbozona" NAME="cbozona" class="form-control" onchange="busca_mesa();"> 
                                            <OPTION VALUE="A">A</OPTION>
                                            <OPTION VALUE="B">B</OPTION>
                                            <OPTION VALUE="C">C</OPTION>
                                        </SELECT>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td colspan="4">
                                        <div id="buscamesa">
                                            
                                        </div>
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
        <center>
        <table>
            <tr>
            <td>
                <div id="detalle"></div>
            </td>
            </tr>
            <tr>
            <td>
                <center>
                    <br><button type="button" onclick="registrar_pedido(<?php echo $usuario; ?>);" class="btn btn-success">Registrar Pedido</button>
                </center>
            </td>
            </tr>
        </table>
        </center>
    </body>
</html>


