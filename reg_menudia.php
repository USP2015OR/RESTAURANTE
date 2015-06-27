<?php
?>
<html>
    <head>
        
    </head>
    <style> 
        a:hover{text-decoration:none;}
        a{text-decoration:none;} 
    </style>
    <body>
        <br>
    <center>
    <table width="50%">
    <tr><td>
    <div class="panel panel-primary">
        <div class="panel-heading"><center><h5>REGISTRO DEL MENU DEL DIA</h5></center></div>
        <div class="panel-body">
            <center>
                <form id="frm_menudia" name="frm_menudia" class="form-vertical"><!-- method="post" action="restaurarpass_ope.php">-->
                <table>
                    <tr>
                    <td>
                        <h4>Fecha:</h4>
                    </td>
                    <td colspan="2">
                        <input type="date"  name="txtmenudiafecha" class="form-control"  value="<?php echo date("Y-m-d");?>" >
                    </td>
                    </tr>
                     <tr>
                    <td>
                        <h4>Cantidad:</h4>
                    </td>
                    <td colspan="2">
                        <input type="text" name="txtmenudiacantidad" class="form-control"  value="" placeholder="Ingrese Cantidad">
                    </td>
                    </tr>
                     
                     <tr hidden>
		     <td><label for='txtmenudiacomandaID'>PersonaID:</label></td>
		     <td><input type='text' name='txtmenudiacomandaID' id='txtmenudiacomandaID' maxlength='10' placeholder='Ingrese personalID'/></td>
	             </tr>
                     <tr>
                    <td>
                        <h4>Comanda:</h4>
                    </td>
                    <td>
                        <input type="text" readonly required="required" id='txtmenudiacomanda' name="txtmenudiacomanda" class="form-control"  value=""  placeholder="Seleccione Comanda" >
                    </td> 
                    <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#selempleado">Buscar</button></td>
                    
                    </tr>
                    <tr>
                    <td colspan="3">
                        <center>
                            <br><button type="button" onclick="reg_menudia();" class="btn btn-success">REGISTRAR</button>
                            
                        </center>
                    </td>
                    </tr>
                </table>
                </form>
            </center>
        </div>
        <div class="panel-footer"><center><h5>SISTEMA DE TOMA DE PEDIDOS DE COMANDAS</h5></center></div>
    </div>
    </td></tr>
    </table>
    </center>
         <div class="modal fade" id="selempleado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>SELECCIONAR COMANDA</h5></center>
			</div>
                    <div class="modal-body">
                        <form id="frm_re" name="frm_re" class="form-vertical">
                            <center>
                                <table>
                                    <tr>
                                    <td>
                                        <input type="text" name="txtBuscar" id='txtBuscar' maxlength="50"  id="txtdireccion" class="form-control" placeholder="Comanda">
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
   <script>
$(document).ready(function(e) {
	mostrarDatos();
	$('#txtBuscar').keyup(function(e) {
		mostrarDatos();
	});
});
function mostrarDatos() {
	$('#busemple').load('mdcomandaList.php?n='+$('#txtBuscar').val());
}
</script>
        

