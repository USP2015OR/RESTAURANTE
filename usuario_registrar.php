
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <title> REGISTRAR USUARIO </title>
    </head>
    <body>
			<div class="modal-header">
				<h5>SISTEMA DE PEDIDOS DE COMANDAS</h5>
			</div>
     
      <table style="margin: 0 auto;" >
	<tr>
		<td colspan="4">
			<center><p class="form-title">Crear Usuario</p><br/></center>
		</td>
	</tr>
        
	<tr>
            <td></td>
              <td width="30%"><h4><span>Usuario:</span></h4></td>
                <td width="60%"><input type="text"  id="txtusuario" class="form-control" placeholder="Username"></td>
        <td></td>
        </tr>
        
	<tr>
             <td></td>
	    <td width="30%"><h4><span>Clave:</span></h4></td>
            <td width="60%"><input type="password" id="txtclave" class="form-control input-sm" placeholder="Ingrese su Clave"></td>
             <td></td>
	</tr>	
        
        <tr>
             <td></td>    
            <td><h4><span>Pregunta secreta:</span></h4></td>
            <td><input type="text" id="txtpregunta" class="form-control input-sm" placeholder="Ingrese su Pregunta Secreta"></td>
                     <td></td>
	</tr>
        
        <tr>  
                <td></td>
		<td><h4><span>Respuesta:</span></h4></td>
                <td><input type="text" id="txtrespuesta" class="form-control input-sm" placeholder="Ingrese su Respuesta"></td>	
                 <td></td>
	</tr>
        
        <tr>
             <td></td>	
            <td><h4><span>Empleado:</span></h4></td>
            <td><input type="text" id="txtrespuesta" class="form-control input-sm" placeholder="Seleccione Empleado"></td>	
            <td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#EMPLEADO">Buscar</button></td>
	</tr>
	<tr>
	 <td></td>	
         <td></td>
                <td><button type="button" onclick="registro();" class="btn btn-primary">Registrar</button></td>
         <td></td>	
	</tr>
</table>
        			<div class="modal-footer">
                                    <center> <h5>RESTAURANTE R & O </h5></center>
			</div>
        
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
                        <td width="15%">Codigo</td>
                            <td width="60%"><center>Empleado</center></td>
                            <td width="15%"><center>Opcion</center></td>
                        </tr>
                   <?php 
              require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("select CODIGO,EMPLEADO from v_empleado where estado=1",$cnn) or
                die("Problemas en el select:".mysql_error());
                while($row = mysql_fetch_array($clavebuscadah))
                {?>
                         <tr>
                            <td><input type="hidden" name="codigo" VALUE="<?php echo$row['CODIGO'];?>"><?php echo$row['CODIGO'];?></td>
                            <td><input type="hidden" name="empleado" VALUE="<?php echo$row['EMPLEADO'];?>"><?php echo$row['EMPLEADO'];?></td>
                            <td><center><button type="button" onclick="registrousuario();" class="btn btn-link">Seleccionar</button></center></td>                                 
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
