<?php
?>
<html>
    <head>
        
    </head>
    <body>
        <form id="frm_login" name="frm_regempleado" class="form-vertical"><center>
            <table>
                <tr>
                <td colspan="3">
                    <center>
                        <h3><font color="#5858FA"><b>REGISTRO DE TRABAJADORES</b></font></h3>
                    </center>
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtpersona"><b>Persona: </b></label></h5>
                </td>
                <td>
                    <input type="text" readonly required="required" name="txtpersona" maxlength="50" id="txtpersona" class="form-control" placeholder="Empleado">
                </td>
                <td>
                    <button type="button" onclick="" class="btn btn-success" data-toggle="modal" data-target="#selcempleado" >Buscar</button>
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtdireccion"><b>Dirección: </b></label></h5>
                </td>
                <td colspan="2">
                    <input type="text" required="required" name="txtdireccion" maxlength="50"  id="txtdireccion" class="form-control" placeholder="Dirección">
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtfecha"><b>Fecha de nacimiento: </b></label></h5>
                </td>
                <td colspan="2">
                    <input type="text" required="required" name="txtafecha" maxlength="50" id="txtfecha" class="form-control" placeholder="Fecha de Nacimiento">
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txttelefono"><b>Telefono: </b></label></h5>
                </td>
                <td colspan="2">
                    <input type="text" required="required" name="txttelefono" maxlength="50" id="txttelefono" class="form-control" placeholder="Telefono">
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="cbocargo"><b>Cargo: </b></label></h5>
                </td>
                <td colspan="2">
                    <SELECT id="cbocargo" NAME="cbocargo" class="form-control" > 
                        <OPTION VALUE="1">Mozo</OPTION>
                        <OPTION VALUE="2">Cocinero</OPTION>
                        <OPTION VALUE="3">Cajero</OPTION>
                        <OPTION VALUE="4">Encargado de cocina</OPTION>
                        <OPTION VALUE="5">Administrador</OPTION>
                        <OPTION VALUE="6">Gerene</OPTION> 
                    </SELECT>
                </td>
                </tr>
                <tr>
                <td colspan="3">
                    <center>
                        <br><button type="button" onclick="" class="btn btn-success">Registrar</button>
                    </center>
                </td>
                </tr>
            </table></center>
        </form>
        <div class="modal fade" id="selcempleado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>SELECCIONAR EMPLEADO</h5></center>
			</div>
                    <div class="modal-body">
                        <form id="frm_re" name="frm_re" class="form-vertical">
                            <center>
                                <table>
                                    <tr>
                                    <td>
                                        <input type="text" name="txtdireccion" maxlength="50"  id="txtdireccion" class="form-control" placeholder="Nombres y apellidos">
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>
                                        <div id="busemple">
                                            
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
    </body>
</html>

