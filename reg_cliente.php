<?php
?>
<html>
    <head>
       <script type="text/javascript">
        function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode;
	return (key >= 48 && key <= 57);
}
        </script>  
        
         <script>
          function validar(){
             //alert("Ingrese direccion") ;
            if(document.frm_regcliente.txtnombre.value.length==0){
              alert("seleccione cliente") ;
              document.frm_regcliente.txtnombre.focus();
              return 0;
        }
         reg_cliente();    
    } 
        </script>
    </head>

    <body>
        <form id="frm_regcliente" name="frm_regcliente" class="form-vertical"><center>
            <table>
                <tr>
                <td colspan="3">
                    <center>
                        <h3><font color="#5858FA"><b>REGISTRO DE CLIENTE</b></font></h3>
                    </center>
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtnombre"><b>Nombre: </b></label></h5>
                </td>
                <td hidden>
                    <input readonly type="text" required="required" name="txtid" maxlength="50" id="txtid" class="form-control" placeholder="Primer nombre">
                </td>
                <td>
                    <input readonly type="text" required="required" name="txtnombre" maxlength="50" id="txtnombre" class="form-control" placeholder="Primer nombre">
                </td>
                <td>
                    <button type="button" onclick="" class="btn btn-success" data-toggle="modal" data-target="#selcliente" >Buscar</button>
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtruc"><b>Ruc: </b></label></h5>
                </td>
                <td colspan="2">
                    <input  type="text"  name="txtruc" maxlength="50"  id="txtruc" class="form-control" placeholder="Ingrese ruc">
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtrs"><b>Razon Social: </b></label></h5>
                </td>
                <td colspan="2">
                    <input  type="text"  name="txtrs" maxlength="50" id="rs" class="form-control" placeholder="Ingrese Rason Social">
                </td>
                </tr>
                
                <tr>
                <td colspan="3">
                    <center>
                        <br><button type="button" onclick="validar();" class="btn btn-success">Registrar</button>
                    </center>
                </td>
                </tr>
            </table></center>
        </form>
         <div class="modal fade" id="selcliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>SELECCIONAR PERSONA</h5></center>
			</div>
                    <div class="modal-body">
                        <form id="frm_re" name="frm_re" class="form-vertical">
                            <center>
                                <table>
                                    <tr>
                                    <td>
                                        <input type="text" name="txtBuscar" id='txtBuscar' maxlength="50"   class="form-control" placeholder="Comanda">
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
	$('#busemple').load('mdclienteList.php?n='+$('#txtBuscar').val());
}
</script>
    </body>
</html>

