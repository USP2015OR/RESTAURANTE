
                <table class="table-striped">
                        <tr>
                        <td colspan="3">
                            <center><p class="form-title">LISTA DE CLIENTES</p><br/></center>
                            </td>
                        </tr>
                        <tr>
                        <th width="15%">Codigo</th>
                            <th width="60%"><center>Cliente</center></th>
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
             $clavebuscadah=mysql_query("select * from v_persona where estado=1 and Apellidos like '$n%'LIMIT 10",$cnn) 
                      or die("Problemas en el select:".mysql_error());}
          else {
             $clavebuscadah=mysql_query("select * from v_persona where estado=1 LIMIT 10",$cnn) 
                     or die("Problemas en el select:".mysql_error());  }
               
                while($row = mysql_fetch_array($clavebuscadah))
                {?>
                         <tr>
                         <td> <h5><?php echo$row['persona_id'];?> </h5></td>
                            <td> <a href='#' data-dismiss="modal" onclick="select(<?php echo $row['persona_id']; ?>,'<?php echo $row['Nombres']; ?>');">
				<h5><?php echo utf8_decode($row['Nombres']);?></h5>
                                                           
                        </tr>
                   <?php  }?>
                        
                                             
                     </table>

<script>
	function select(id, nombre) {
		$('#txtid').val(id);
		$('#txtnombre').val(nombre);
		$('#modalwindow').fadeOut(200);
	}
</script>
