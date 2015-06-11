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
            <td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#EMPLEADO">Buscar</button></td>
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
<!--BUSCAR EMPLEADO-->
        
 <div class="modal fade" id="EMPLEADO" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5>SISTEMA DE PEDIDOS DE COMANDAS</h5>
			</div>
			<div class="modal-body">
                            
                            <form id="frm_empleado" name="frm_empleado" class="form-vertical" >
                <table class="table-striped">
                        <tr>
                        <td colspan="3">
                            <center><p class="form-title">LISTA DE EMPLEADOS</p><br/></center>
                            </td>
                        </tr>
                        <tr>
                        <th width="15%">Codigo</th>
                            <th width="60%"><center>Empleado</center></th>
                        </tr>
<style> 
a:hover{text-decoration:none;}
a{text-decoration:none;} 
</style>
                   <?php 
              require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("select CODIGO,EMPLEADO from v_empleado where estado=1",$cnn) or
                die("Problemas en el select:".mysql_error());
                while($row = mysql_fetch_array($clavebuscadah))
                {?>
                         <tr>
                         <td> <h5><?php echo$row['CODIGO'];?> </h5></td>
                            <td> <a href='#' data-dismiss="modal" onclick="select(<?php echo $row['CODIGO']; ?>,'<?php echo $row['EMPLEADO']; ?>');">
				<h5><?php echo $row['EMPLEADO']; ?> </h5>
                                                           
                        </tr>
                   <?php  }?>
                        
                                             
                        
                    </table>
            </form>    
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

        
 </body>
</html>
<script>
	function select(id, nombre) {
		$('#txtPersonaID').val(id);
		$('#txtPersona').val(nombre);
		$('#modalwindow').fadeOut(200);
	}
</script>

