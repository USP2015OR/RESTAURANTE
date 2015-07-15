<?php
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
       
    </head>
    <body>
			<div class="modal-body">
                             <center><h3><font color="#5858FA"><b>LISTADO DE BEBIDAS</b></font></h3></center>
                            
  <form id="frm_eliminarcaja" name="frm_eliminarcaja" class="form-vertical" action="eliminar_caja.php" method="post">
      <table  class="table-striped" align="center" width="60%" border="2" bgcolor="#6095F1">
                  <tr align="center" bgcolor="#6095F1" >
                            <td>Codigo</td>
                            <td>Nombre</td>
                            <td>Precio</td>
                            <td>Categoria</td>
                        </tr>
                         
                             <?php       
              require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("SELECT comanda_id,comanda_nombre, comanda_precio,subcategoria_nombre,categoria_nombre FROM `comanda` inner join subcategoria on subcategoria.subcategoria_id=comanda.comanda_categoria inner join categoria on categoria.`categoria_id`=subcategoria.`categoria_id` where categoria.categoria_nombre='Bebida'and comanda_estado=1",$cnn) or
                die("Problemas en el select:".mysql_error());
                while($row = mysql_fetch_array($clavebuscadah))
                        
                {?>
                        <tr align="center">
                        <td><?php echo $row[0];?></td>
                        <td><?php echo $row[1];?></td>
                        <td><?php echo$row[2];?></td>
                        <td><?php echo$row[3];?></td>
                          
                        </tr>
                        
                   <?php  }?>
                     
                    </table>
            </form> 
                 
                            
     
<script type="text/javascript">
// Solo permite ingresar numeros.
function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}
</script>
                            
                            
        <div class="modal fade" id="selempleado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>MODIFICAR CAJA</h5></center>
			</div>
                    <div class="modal-body">
                        <form id="frm_mocaja" name="frm_mocaja" class="form-vertical">
                            <center>
                                 <table>
                     <tr hidden>
                    <td>
                        <h4>Numero de caja:</h4>
                    </td>
                    <td>
                        <input type="text" id='txtcaja' name="txtcaja" class="form-control"  value="" >
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <h4>Numero de caja:</h4>
                    </td>
                    <td>
                        <input type="text" id='txtcajanum' name="txtcajanum" class="form-control"  onKeyPress="return soloNumeros(event)" value="" >
                    </td>
                    </tr>
                    <tr>
                    <td colspan="2">
                        <center>
                            <br><button type="button" onclick="update_caja();" class="btn btn-success">ACTUALIZAR</button>
                            
                        </center>
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
	function select(id,numero) {
		$('#txtcajanum').val(numero);
                $('#txtcaja').val(id);
		$('#modalwindow').fadeOut(200);
	}
</script>


 