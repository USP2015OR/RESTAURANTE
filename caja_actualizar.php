<?php
        require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("SELECT caja_id,caja_numero,case caja_estado when 1 then 'Activo' end FROM caja where caja_estado= 1",$cnn) or
                die("Problemas en el select:".mysql_error());
                $con=0;
                while($row = mysql_fetch_array($clavebuscadah)){
                    $numero[$con]=$row[1];
                    $con++;
                }
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <title>MANTENIMIENT0 DE CAJA</title>
    </head>
    <body>
			<div class="modal-header">
				<h5>SISTEMA DE PEDIDOS DE COMANDAS</h5>
			</div>
			<div class="modal-body">
                            
                            
                            <form id="frm_eliminarcaja" name="frm_eliminarcaja" class="form-vertical" action="eliminar_caja.php" method="post">
      <table class="table-striped" align="center">
                        
                        <tr>
                            <td colspan="5">
                            <center><p class="form-title">Mantenimiento de Caja</p><br/></center>
                            </td>
                        </tr>
                        <br>
                        <tr align="center">
                            <td>Codigo</td>
                            <td>Numero</td>
                            <td>Estado</td>
                           
                        </tr>
                         <br>
                         <style> 
a:hover{text-decoration:none;}
a{text-decoration:none;} 
</style>
           
                             <?php       
              require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("SELECT caja_id,caja_numero,case caja_estado when 1 then 'Activo' end FROM caja where caja_estado= 1",$cnn) or
                die("Problemas en el select:".mysql_error());
                while($row = mysql_fetch_array($clavebuscadah))
                        
                {?>
                        <tr align="center">
                        <td> <br><?php echo$row[0];?></td>
                        <td> <br><a data-toggle="modal" data-target="#selempleado"  onclick="select(<?php echo $row[0]; ?>,'<?php echo $row[1]; ?>');">Caja<?php echo$row[1];?></a></td>
                            <td> <br><?php echo$row[2];?></td>
                          
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


 