
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
                $n = isset($_GET['n']) ? $_GET['n'] : '';
          if ($n!='') {
             $clavebuscadah=mysql_query("select CODIGO,EMPLEADO from v_empleado where estado=1 and empleado like '%$n%'",$cnn) 
                      or die("Problemas en el select:".mysql_error());}
          else {
             $clavebuscadah=mysql_query("select CODIGO,EMPLEADO from v_empleado where estado=1 ",$cnn) 
                     or die("Problemas en el select:".mysql_error());  }
               
                while($row = mysql_fetch_array($clavebuscadah))
                {?>
                         <tr>
                         <td> <h5><?php echo$row['CODIGO'];?> </h5></td>
                            <td> <a href='#' data-dismiss="modal" onclick="select(<?php echo $row['CODIGO']; ?>,'<?php echo $row['EMPLEADO']; ?>');">
				<h5><?php echo $row['EMPLEADO']; ?> </h5>
                                                           
                        </tr>
                   <?php  }?>
                        
                                             
                        
                    </table>
<script>
	function select(id, nombre) {
		$('#txtPersonaID').val(id);
		$('#txtPersona').val(nombre);
		$('#modalwindow').fadeOut(200);
	}
</script>
