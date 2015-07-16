<?php

$usuario=$_GET['id'];
 // echo"<script type=\"text/javascript\">alert($usuario);</script>" ;

        require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("SELECT `pedido_id`,pedido.`mesa_id`,`empleado_id`,`pedido_montot`,`pedido_estado`,`ubicacion_id`,`pedido_recargo` FROM `pedido` inner join mesa on mesa.mesa_id= pedido.mesa_id where `pedido_estado`=1",$cnn) or
                die("Problemas en el select:".mysql_error());
                
                $clavebuscadah1=mysql_query("SELECT max(comprobante_id) FROM `comprobante`",$cnn) or
                die("Problemas en el select:".mysql_error());
                $row = mysql_fetch_array($clavebuscadah1);
                
                $clavebuscadah2=mysql_query("SELECT `empleado_id` FROM `usuario` WHERE `usuario_id`=$usuario",$cnn) or
                die("Problemas en el select:".mysql_error());
                $row1 = mysql_fetch_array($clavebuscadah2);
                
                $clavebuscadah3=mysql_query("SELECT caja.caja_id, caja.caja_numero FROM `asignacion` inner join caja on caja.caja_id=asignacion.caja_id WHERE `empleado_id`=$row1[0] and `asignacion_fechreg`=curdate()",$cnn) or
                die("Problemas en el select:".mysql_error());
                $row2 = mysql_fetch_array($clavebuscadah3);
               
              
?>
<html>
    <head>
        <script type="text/javascript">
      //  cargarformulario('detalle','det_comprobante.php');
        </script>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <title>REGISTRO DE COMPROBANTE</title>
         <script type="text/javascript" charset="utf-8">
	  $(document).ready(function() {
	  // Parametros para el combo
	   $("#cbcaja").change(function () {
	      $("#cbcaja option:selected").each(function () {
	        elegido=$(this).val();
               //alert(elegido);
	        $.post("reg_comprobantepedido.php", { elegido: elegido }, function(data){
	        $("#pedido").html(data);
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
	        $.post("det_comprobante.php", { elegido: elegido }, function(data){
	        $("#detalle").html(data);
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
	        $.post("det_comprobante1.php", { elegido: elegido }, function(data){
	        $("#detalle1").html(data);
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
	        $.post("det_comprobante2.php", { elegido: elegido }, function(data){
	        $("#detalle2").html(data);
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
	        $.post("det_comprobante3.php", { elegido: elegido }, function(data){
	        $("#detalle3").html(data);
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
	        $.post("reg_comprobantemonto.php", { elegido: elegido }, function(data){
	        $("#monto").html(data);
	      });     
	     });
	   });    
	});
</script>

<script type="text/javascript" charset="utf-8">
	  $(document).ready(function() {
	  // Parametros para el combo
	   $("#cbtipodocumento").change(function () {
	      $("#cbtipodocumento option:selected").each(function () {
                   elegido=$(this).val();
              
               if (elegido==2) {
                  // alert("richar");
                         var re=document.frm_comprobante.txtcomprobantemonto.value; 
                          document.frm_comprobante.txtcomprobanteigv.value=(re*0.18).toFixed(2);
                          document.frm_comprobante.txtcomprobantetotal.value=(parseFloat(re)+(re*0.18)).toFixed(2);
                          //document.frm_comprobante.txtcomprobantedeivery.value="0.00";
                }else{
                     var re=document.frm_comprobante.txtcomprobantemonto.value; 
                       document.frm_comprobante.txtcomprobantetotal.value=re;
                       document.frm_comprobante.txtcomprobanteigv.value="0.00";
                       document.frm_comprobante.txtcomprobantedeivery.value="0.00";   
                }
          // alert(re);
	     });
	   });    
	});
</script>
<script type=”text/javascript”>
    function validar(){
           var el = document.frm_comprobante.cbcaja.value; 
           var el1 = document.frm_comprobante.cbtipodocumento.value; 
          //alert(el.valueOf());
           if (el.valueOf()>0){ 
                if (el1.valueOf()>0){  
                if (document.frm_comprobante.txtcomprobantecliente.value.length!=0) {
                  regitro_comprobante();
                  }else{
                    alert("Ingrese cliente");  
                  }     
            }else{
                      alert("Seleccione tipo documento"); 
                 }
        }else{
           alert("Seleccione mesa");  
        }
       
    }

</script>
    </head>
    <body>                         
       
            <center>
                <form id="frm_comprobante" name="frm_comprobante" class="form-vertical"><!-- method="post" action="restaurarpass_ope.php">-->
                    <table>
                         <tr>
                            <td colspan="4">
                                <center>
                                    <h3><font color="#5858FA"><b>REGISTRO DE COMPROBANTE</b></font></h3>
                                </center>
                            </td>
                         </tr>
                        <tr>
                        <td>
                                <h4>N° de comprobate:</h4>
                            </td>
                            <td>
                                <input type="text" readonly required="required" name="txtcomprobantenumero" class="form-control"  value="<?php echo$row[0]+1;?>" >
                            </td>
                            <td align="right">
                                <h4>Fecha:</h4>
                            </td>
                            <td>
                                <input type="date"  name="txtcomprobantefecha" class="form-control"  value="<?php echo date("Y-m-d");?>">
                            </td>
                        </tr>
                        <tr>
                        <td>
                                <h4>Numero mesa</h4>
                            </td>
                            <td>
                                 <SELECT id="cbcaja" NAME="cbcaja" class="form-control"  > 
                                    <option value="0">Seleccione...</option>
                                     <?php  
                                    while($row = mysql_fetch_array($clavebuscadah)){?>

                                    <OPTION VALUE="<?php echo$row[1];?>" ><?php echo$row[1];?></OPTION>
                                     <?php  }?>
                                  </SELECT>
                            </td>
                            <td align="right">
                                <h4>Numero Pedido:</h4>
                            </td>
                            
                            <td>
                                <div class="control-group">
                                 <div class="controls">
                                     <di id="pedido">
                                         <input type="text" readonly required="required" name="txtcomprobantepedido" class="form-control"  placeholder="Numero de pedido" >
                                     </di>

                                 </div>
                               </div>
                            </td>                           
                        </tr>
                       
                         <tr>
                            <td>
                                <h4>N° de caja:</h4>
                            </td>
                            <td>
                                <input type="text" readonly required="required" name="txtcomprobantenumerocaja" class="form-control"  value="<?php echo $row2[0];?>" >
                            </td>
                            <td align="right">
                                <h4>Tipo documento:</h4>
                            </td>
                            <td >
                                 <SELECT id="cbtipodocumento" NAME="cbtipodocumento" class="form-control" onkeyup="comprobantetotal();" > 
                                    <option value="0">Seleccione...</option>
                                    <option value="1">Boleta</option>
                                    <option value="2">Factura</option>
                                  </SELECT>
                            </td>
                        </tr>
                          <tr hidden>
		     <td><input type='text' name='txtcomprobanteclienteID' id='txtcomprobanteclienteID' maxlength='10' placeholder='Ingrese personalID'/></td>
	             </tr>
                       <tr>
                            <td>
                                <h4>Cliente:</h4>
                            </td>
                            <td colspan="2">
                                <input type="text" readonly required="required" id="txtcomprobantecliente" name="txtcomprobantecliente" class="form-control"  placeholder="Cliente" >
                            </td>
                            <td>
                                <button type="button"  class="btn btn-success" data-toggle="modal" data-target="#selecliente"  >Buscar</button>
                            </td>
                       </tr>
                       
                       <tr>
                           <td>
                                
                            </td>
                            <td>
                                <h4>Recargo por delivery:</h4>
                            </td>
                            </td>
                            <td>
                                <input type="text"  name="txtcomprobantedeivery" class="form-control"  value="0.00"  onkeyup="comprobantetotal();">
                            </td>
                       </tr>
                    </table>
                 
              <br>
                    <table class="table">
                    
                            <tr>
                            <td class="active" colspan="6">
                                <center><font  size="3"><b>DETALLE DEL PEDIDO</b></font></center><br>
                            </td>
                            </tr>
                            
                            <tr class="success">
                                
                            <td width="300">
                                <font color="#2E2EFE" size="3"><b>NOMBRE</b></font>
                            </td>
                            <td width="150">
                                <center><font color="#2E2EFE" size="3"><b>CANTIDAD</b></font></center>
                            </td>
                            <td width="150">
                                <center><font color="#2E2EFE" size="3"><b>PRECIO</b></font></center>
                            </td>
                            <td width="150">
                                <center><font color="#2E2EFE" size="3"><b>TOTAL</b></font></center>
                            </td>
                            </tr>
                            <br>
                       <tr>
                       <td>
                                <div class="control-group">
                                 <div class="controls">
                                     <di id="detalle">
                                     </di>

                                 </div>
                               </div>
                          </td>
                          <td align="center">
                                <div class="control-group">
                                 <div class="controls">
                                     <di id="detalle1">
                                     </di>

                                 </div>
                               </div>
                          </td>
                           <td align="center">
                                <div class="control-group">
                                 <div class="controls">
                                     <di id="detalle2">
                                     </di>

                                 </div>
                               </div>
                          </td>
                            <td align="center">
                                <div class="control-group">
                                 <div class="controls">
                                     <di id="detalle3">
                                     </di>

                                 </div>
                               </div>
                          </td>
                       </tr>
                       </table>
              <table align="right">
                    <td>
                               
                </td>
                <td></td>
                       <td></td>
                <td>
                               
                </td>
                <td>
                <h4>Monto:</h4>
                </td>
                <td>
                <div class="control-group">
                    <div class="controls">
                          <di id="monto">
                           <input type="text" readonly required="required" name="txtcomprobantemonto" class="form-control"  placeholder="Monto " >
                                </di>
                                 </div>
                               </div>
                            </td> 
                            
        </tr>
         <tr>
             <td></td>
                       <td></td>
             <td>
                                
                            </td>
                           <td>
                                
                            </td>
                            <td>
                                <h4>Descuento:</h4>
                            </td>
                            <td>
                                <input type="text"  name="txtcomprobantedescuento" class="form-control"  onkeyup="comprobantetotal();" value="0.00" >
                            </td>
                       </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td></td>
                       <td></td>
                            <td>
                                <h4>IGV:</h4>
                            </td>
                            <td>
                                <input type="text" readonly required="required" name="txtcomprobanteigv" class="form-control" value="0.00" placeholder="igv" >
                            </td>
                       </tr>
                         <tr>
                             <td></td>
                       <td></td>
                             <td>
                                
                            </td>
                           <td>
                                
                            </td>
                            <td>
                                <h4>Total:</h4>
                            </td>
                            <td>
                                <input type="text" readonly required="required" name="txtcomprobantetotal" class="form-control"   placeholder="Monto Total" >
                            </td>
                       </tr>
                      
                       <tr align="right">
                        <td>
                            <button type="button" onclick="validar();" class="btn btn-success">REGISTRAR</button>
                       </td>
                       <td></td>

                       </tr>
                  </table>
              
                </form>
            </center>
    
     <div class="modal fade" id="selecliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>SELECCIONAR CLIENTE</h5></center>
			</div>
                    <div class="modal-body">
                        <form id="frm_cliente" name="frm_cliente" class="form-vertical">
                            <center>
                                <table>
                                    <tr>
                                    <td>
                                        <input type="text" name="txtBuscar" id='txtBuscar' maxlength="50"  class="form-control" placeholder="Cliente">
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>
                                        <div id="busemple">
                                            
                                        </div>
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
  <center>
        
                <div id="detalle"></div>
         
        </center>
      
      
    </body>
</html>
<script>
$(document).ready(function(e) {
	mostrarDatos();
	$('#txtBuscar').keyup(function(e) {
		mostrarDatos();
	});
});
function mostrarDatos() {
	$('#busemple').load('mdpersonaList1.php?n='+$('#txtBuscar').val());
}
</script>
        



 