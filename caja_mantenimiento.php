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
                        <tr align="center">
                            <td>Codigo</td>
                            <td><center>Numero</center></td>
                            <td><center>Estado</center></td>
                            <td>Eliminar</td>
                        </tr>
                             <?php       
              require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("SELECT caja_id,caja_numero,case caja_estado when 1 then 'Activo' end FROM caja where caja_estado= 1",$cnn) or
                die("Problemas en el select:".mysql_error());
                while($row = mysql_fetch_array($clavebuscadah))
                {?>
                        <tr align="center">
                            <td><?php echo$row[0];?></td>
                            <td>Caja<?php echo$row[1];?></td>
                            <td><?php echo$row[2];?></td>
                            
                            <!--<td><input type="text" id="usuario" class="form-control input-sm" placeholder="Ingrese su Respuesta"></td>-->
                           <!--class="form-control input-sm"-->
                            <td><Input type="checkbox" class="form-control" name="caja[]" value="<?php echo$row[0];?>"/></td> 
                          
                        </tr>
                   <?php  }?>
                       <tr>                             
                       <td colspan="4"><center><button type="sumit" onclick="" class="btn btn-success">Eliminar Usuario</button></center></td>                            
                      </tr>
                    </table>
            </form> 
   </body>
</html>
	