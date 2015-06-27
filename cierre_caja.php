<?php
 require_once("conexion.php");
	       $cnn=conectar();
                $clavebuscadah=mysql_query("SELECT caja.caja_id ,caja.caja_numero FROM `movimiento` inner join caja on caja.caja_id=movimiento.caja_id",$cnn) or
                die("Problemas en el select:".mysql_error());
                //$row = mysql_fetch_array($clavebuscadah);

?>
<html>
    <head>
        <script type="text/javascript" charset="utf-8">
	  $(document).ready(function() {
	  // Parametros para el combo
	   $("#cbcaja").change(function () {
	      $("#cbcaja option:selected").each(function () {
	        elegido=$(this).val();
               //alert(elegido);
	        $.post("montoini.php", { elegido: elegido }, function(data){
	        $("#montoini").html(data);
                $("#montorecaudado").html(data);
	      });     
	     });
	   });    
	});
</script>
              <script type="text/javascript" charset="utf-8">
	  $(document).ready(function() {
	  // Parametros para el combo
	   $("#cbcaja").change(function () {
	      $("#cbcaja option:selected").each(function () {
	        elegido=$(this).val();
               //alert(elegido);
	        $.post("montorecaudado.php", { elegido: elegido }, function(data){
                $("#montorecaudado").html(data);
	      });     
	     });
	   });    
	});
</script>
                      <script type="text/javascript" charset="utf-8">
	  $(document).ready(function() {
	  // Parametros para el combo
	   $("#cbcaja").change(function () {
	      $("#cbcaja option:selected").each(function () {
	        elegido=$(this).val();
               //alert(elegido);
	        $.post("montoganancia.php", { elegido: elegido }, function(data){
                $("#montoganancia").html(data);
	      });     
	     });
	   });    
	});
</script>
    </head>
    <style> 
        a:hover{text-decoration:none;}
        a{text-decoration:none;} 
    </style>
    <body>
        <br>
    <center>
    <table width="50%">
    <tr><td>
    <div class="panel panel-primary">
        <div class="panel-heading"><center><h5>CIERRE DE CAJA</h5></center></div>
        <div class="panel-body">
            <center>
                <form id="frm_cierrecaja" name="frm_cierrecaja" class="form-vertical"><!-- method="post" action="restaurarpass_ope.php">-->
                <table>
                    <tr>
                    <td>
                        <h4>Numero de caja:</h4>
                    </td>
                    <td>
                    <SELECT id="cbcaja" NAME="cbcaja" class="form-control"  > 
                       <option value="0">Seleccione...</option>
                       <?php  
                       while($row = mysql_fetch_array($clavebuscadah)){?>    
                       <OPTION VALUE="<?php echo$row[0];?>" ><?php echo$row[1];?></OPTION>
                       <?php  }?>
                    </SELECT>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <h4>Tipo Movimineto:</h4>
                    </td>
                    <td>
                        <input type="text" readonly required="required" name="txtcierremovimiento" class="form-control"  value="Cierre" >
                    </td>
                    </tr>
                     <tr>
                    <td>
                        <h4>Fecha:</h4>
                    </td>
                    <td>
                        <input type="date"  name="txtcierrefecha" class="form-control"  value="<?php echo date("Y-m-d");?>">
                    </td>
                    </tr>
                     <tr>
                    <td>
                        <h4>Monto Inicial:</h4>
                    </td>
                    <td>
                       <div class="control-group">
                        <div class="controls">
                            <di id="montoini">
                            <input type="text" readonly required="required" name="txtcajanumero" class="form-control"  value="" placeholder="Monto Inicial">
                            </di>
                              
                        </div>
                      </div>
                    </td>
                    </tr>
                      <tr>
                    <td>
                        <h4>Monto Recaudado:</h4>
                    </td>
                    <td>
                     <div class="control-group">
                        <div class="controls">
                            <di id="montorecaudado">
                            <input type="text" readonly required="required" name="txtcajanumero" class="form-control"  value="" placeholder="Monto Recaudado">
                            </di>
                              
                        </div>
                      </div>    
                    </td>
                    </tr>
                          <tr>
                    <td>
                        <h4>Ganancias:</h4>
                    </td>
                    <td>
                         <div class="control-group">
                        <div class="controls">
                            <di id="montoganancia">
                            <input type="text" readonly required="required" name="txtcierremontoganancia" class="form-control"  value="" placeholder="Ganancias">
                            </di>
                              
                        </div>
                      </div>  
                    </td>
                    </tr>
                                        
                    <tr>
                    <td colspan="2">
                        <center>
                            <br><button type="button" onclick="cierre_caja();" class="btn btn-success">REGISTRAR</button>
                            
                        </center>
                    </td>
                    </tr>
                </table>
                </form>
            </center>
        </div>
        <div class="panel-footer"><center><h5>SISTEMA DE TOMA DE PEDIDOS DE COMANDAS</h5></center></div>
    </div>
    </td></tr>
    </table>
    </center>
    </body>
</html>

