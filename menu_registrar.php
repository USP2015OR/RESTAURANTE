
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <title> REGISTRAR USUARIO </title>
        <script type="text/javascript">
// Solo permite ingresar numeros.
function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}
</script>
    </head>
    <body>
        <form id="frm_registromenu" name="frm_registromenu" class="form-vertical">
             <table style="margin: 0 auto;" >
               <tr>
                       <td colspan="3">
                              <center><h3><font color="#5858FA"><b>REGISTRO DE PLATOS</b></font></h3></center>
                       </td>
               </tr>

               <tr>
                   
                    <td><h5><label for="txtusuario"><b>Nombre:</b></label></h5></td>
                    <td colspan="2"><input type="text"  id="txtnombre" class="form-control" placeholder="Ingrese su nombre"></td>
                    
               </tr>

               <tr>
                    
                   <td><h5><label for="txtusuario"><b>Descripcion:</b></label></h5></td>
                   <td colspan="2"><input type="text" id="txtdescripcion" class="form-control" placeholder="Ingrese su Descripcion"></td>
                   
               </tr>	

               <tr>
                       
                   <td><h5><label for="txtusuario"><b>Precio:</b></label></h5></td>
                   <td colspan="2"><input type="text" id="txtpre" class="form-control" placeholder="Ingrese su Precio"></td>
                            
               </tr>
               <tr hidden>
                       <td><label for='txtCategoriaID'>CategoriaID:</label></td>
                       <td><input type='text' name='txtCategoriaID' id='txtCategoriaID' maxlength='10' placeholder='Ingrese personalID'/></td>
               </tr>

               <tr>
                    
                   <td><h5><label for="txtusuario"><b>Categoria:</b></label></h5></td>
                   <td><input type="text" id='txtCategoria'  maxlength='10' name='txtCategoria' class="form-control input-sm" placeholder="Seleccione Categoria" disabled></td>	
                   <td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#CATEGORIA">Buscar</button></td>
               </tr>
               <tr>
               <td colspan="3">
              <center>
                 <br><button type="button" onclick="registromenu();" class="btn btn-success">Registrar</button>
              </center>
                       </td>
               </tr>
       </table>
     </form>
        	
        
        <div class="modal fade" id="CATEGORIA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                       <div class="modal-content">
                               <div class="modal-header">
                                       <h5>SISTEMA DE PEDIDOS DE COMANDAS</h5>
                               </div>
                                  <div class="modal-body">

                                   <form id="frm_categoria" name="frm_categoria" class="form-vertical" >
                                       <table class="table-striped" align="center">
                                            <tr>
                                            <td colspan="3">
                                                <center><p class="form-title">LISTA DE CATEGORIAS</p><br/></center>
                                                </td>
                                            </tr>
                                            <tr>
                                            <th>Codigo</th>
                                                <th><center>Categoria</center></th>
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
