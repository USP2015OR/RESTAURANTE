<?php
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <title> REGISTRAR USUARIO </title>
    </head>
    <body>
<form id="frm_creausuario" name="frm_creausuario" class="form-vertical" >
      <table style="margin: 0 auto;" >
	<tr>
		<td colspan="3">
                    <center><h3><font color="#5858FA"><b>CREACION DE USUARIOS</b></font></h3></center>
		</td>
	</tr>
        
	<tr>
            <td><h5><label for="txtusuario"><b>Usuario:</b></label></h5></td>
            <td colspan="2"><input type="text" required="required" id="txtusuario" class="form-control" placeholder="Username"></td>
        </tr>
        
	<tr>
        <td><h5><label for='txtclave'><b>Clave:</b></label></h5></td>
        <td colspan="2"><input type="password" required="required" id="txtclave" class="form-control" placeholder="Ingrese su Clave"></td>
             
	</tr>	
        
        <tr>
            
            <td><h5><label for='txtpregunta'><b>Pregunta secreta:</b></label></h5></td>
            <td colspan="2"><input type="text" id="txtpregunta" required="required" class="form-control" placeholder="Ingrese su Pregunta Secreta"></td>
                    
	</tr>
        
        <tr>  
             
	     <td><h5><label for='txtrespuesta'><b>Respuesta:</b></label></h5></td>
             <td colspan="2"><input type="text" required="required" id="txtrespuesta" class="form-control" placeholder="Ingrese su Respuesta"></td>	
                
	</tr>
        <tr hidden>
		<td><label for='txtPersonaID'>PersonaID:</label></td>
		<td><input type='text' name='txtPersonaID' id='txtPersonaID' maxlength='10' placeholder='Ingrese personalID'/></td>
	</tr>
        
        <tr>
            <td><h5><label for='txtpersona'><b>Empleado:</b></label></h5></td>
            <td><input type="text" id='txtPersona' required="required"  maxlength='10' name='txtPersona' class="form-control" placeholder="Seleccione Empleado" disabled></td>	
            <td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#selempleado">Buscar</button></td>
	</tr>
	<tr>
		<td colspan="3">
        <center>
                 <br><button type="button" onclick="registro();" class="btn btn-success">Registrar</button>
       	</center>
            </td>
	</tr>
</table>
</form>
        
 <div class="modal fade" id="selempleado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                        <input type="text" name="txtBuscar" id='txtBuscar' maxlength="50"  id="txtdireccion" class="form-control" placeholder="Nombres y apellidos">
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
     
       
   <script>
$(document).ready(function(e) {
	mostrarDatos();
	$('#txtBuscar').keyup(function(e) {
		mostrarDatos();
	});
});
function mostrarDatos() {
	$('#busemple').load('mdpersonaList.php?n='+$('#txtBuscar').val());
}
</script>
        
        
        
        
        
        

