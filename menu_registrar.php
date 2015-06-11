
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <title> REGISTRAR USUARIO </title>
    </head>
    <body>
			<div class="modal-header">
				<h5>SISTEMA DE PEDIDOS DE COMANDAS</h5>
			</div>
        <form id="frm_registromenu" name="frm_registromenu" class="form-vertical">
             <table style="margin: 0 auto;" >
               <tr>
                       <td colspan="4">
                               <center><p class="form-title">Registros de Platoss</p><br/></center>
                       </td>
               </tr>

               <tr>
                     <td width="10%"></td>
                     <td width="17%"><h4><span>Nombre:</span></h4></td>
                     <td width="50%"><input type="text"  id="txtnombre" class="form-control" placeholder="Ingrese su nombre"></td>
                     <td width="10%"></td>
               </tr>

               <tr>
                    <td></td>
                   <td><h4><span>Descripcion:</span></h4></td>
                   <td><input type="text" id="txtdescripcion" class="form-control" placeholder="Ingrese su Descripcion"></td>
                    <td></td>
               </tr>	

               <tr>
                    <td></td>    
                   <td><h4><span>Precio:</span></h4></td>
                   <td><input type="text" id="txtpre" class="form-control" placeholder="Ingrese su Precio"></td>
                            <td></td>
               </tr>
               <tr hidden>
                       <td><label for='txtCategoriaID'>CategoriaID:</label></td>
                       <td><input type='text' name='txtCategoriaID' id='txtCategoriaID' maxlength='10' placeholder='Ingrese personalID'/></td>
               </tr>

               <tr>
                    <td></td>	
                   <td><h4><span>Categoria:</span></h4></td>
                   <td><input type="text" id='txtCategoria'  maxlength='10' name='txtCategoria' class="form-control input-sm" placeholder="Seleccione Categoria" disabled></td>	
                   <td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#CATEGORIA">Buscar</button></td>
               </tr>
               <tr>
                <td></td>	
                <td></td>
                <td><button type="button" onclick="registromenu();" class="btn btn-primary">Registrar</button></td>
                <td></td>	
               </tr>
       </table>
     </form>
        	<div class="modal-footer">
                    <center> <h5>RESTAURANTE R & O </h5></center>
		</div>
        
        <div class="modal fade" id="CATEGORIA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                       <div class="modal-content">
                               <div class="modal-header">
                                       <h5>SISTEMA DE PEDIDOS DE COMANDAS</h5>
                               </div>
                                  <div class="modal-body">

                                   <form id="frm_categoria" name="frm_categoria" class="form-vertical" >
                                         <table class="table-striped">
                                            <tr>
                                            <td colspan="3">
                                                <center><p class="form-title">LISTA DE CATEGORIAS</p><br/></center>
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
                $clavebuscadah=mysql_query("SELECT subcategoria_id,subcategoria_nombre FROM `subcategoria` WHERE subcategoria_estado=1",$cnn) or
                die("Problemas en el select:".mysql_error());
                while($row = mysql_fetch_array($clavebuscadah))
                {?>
                                            <tr>
                                            <td> <h5><?php echo$row['subcategoria_id'];?> </h5></td>
                                            <td> <a href='#' data-dismiss="modal" onclick="select(<?php echo $row['subcategoria_id']; ?>,'<?php echo $row['subcategoria_nombre']; ?>');">
                                                   <h5><?php echo $row['subcategoria_nombre']; ?> </h5>

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
		$('#txtCategoriaID').val(id);
		$('#txtCategoria').val(nombre);
		
	}
</script>
