
                <table class="table-striped">
                        <tr>
                        <td colspan="3">
                            <center><p class="form-title">LISTA DE COMANDAS</p><br/></center>
                            </td>
                        </tr>
                        <tr>
                        <th width="15%">Codigo</th>
                            <th width="60%"><center>Comanda</center></th>
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
             $clavebuscadah=mysql_query("SELECT comanda_id,comanda_nombre FROM `comanda` where comanda_estado=1 and comanda_nombre like '$n%'",$cnn) 
                      or die("Problemas en el select:".mysql_error());}
          else {
             $clavebuscadah=mysql_query("SELECT comanda_id,comanda_nombre FROM `comanda` where comanda_estado=1",$cnn) 
                     or die("Problemas en el select:".mysql_error());  }
               
                while($row = mysql_fetch_array($clavebuscadah))
                {?>
                         <tr>
                         <td> <h5><?php echo$row['comanda_id'];?> </h5></td>
                            <td> <a href='#' data-dismiss="modal" onclick="select(<?php echo $row['comanda_id']; ?>,'<?php echo $row['comanda_nombre']; ?>');">
				<h5><?php echo utf8_decode($row['comanda_nombre']); ?> </h5>
                                                           
                        </tr>
                   <?php  }?>   
                    </table>
<script>
	function select(id, nombre) {
		$('#txtmenudiacomandaID').val(id);
		$('#txtmenudiacomanda').val(nombre);
		$('#modalwindow').fadeOut(200);
	}
</script>
