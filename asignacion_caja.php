<?php
 require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("SELECT caja.caja_id,caja.caja_numero FROM `caja` where caja_estado=1",$cnn) or
                die("Problemas en el select:".mysql_error());
                //$row = mysql_fetch_array($clavebuscadah);
                date_default_timezone_set('America/Lima'); 
                $fecha=date("Y-m-d");
                $hora=date("H:i:s");
                $fechor=$fecha."T".$hora;
?>
<html>
    <head>
          <script type="text/javascript">
       function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}
</script>
        
<script type=”text/javascript”>
    function validar(){
           var el = document.frm_asignacion.cbcaja.value; 
            var el1 = document.frm_asignacion.cbcaja1.value; 
         // alert(el.valueOf());
           if (el.valueOf()>0){
               if (document.frm_asignacion.txtasignaciontrabajador.value.length==0) {
                          alert("Selecione Empleado");
                    }else{
                  if (el1.valueOf()>0) {
                          asignacion_caja();
                    }else{   
                         alert("Selecione Turno");  
                    }
                 }
        }else{
           alert("Selecione caja");  
        }
        
       
    }

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
        <div class="panel-heading"><center><h5>ASIGNACION DE CAJA</h5></center></div>
        <div class="panel-body">
            <center>
                <form id="frm_asignacion" name="frm_asignacion" class="form-vertical"><!-- method="post" action="restaurarpass_ope.php">-->
                <table>
                     <tr>
                    <td>
                        <h4>Numero de caja:</h4>
                    </td>
                    <td colspan="2">
                    <SELECT id="cbcaja" NAME="cbcaja" class="form-control"  > 
                       <option value="0">Seleccione...</option>
                       <?php  
                       while($row = mysql_fetch_array($clavebuscadah)){?>    
                       <OPTION VALUE="<?php echo$row[0];?>" ><?php echo$row[1];?></OPTION>
                       <?php  }?>
                    </SELECT>
                    </td>
                    </tr>
                     
                     <tr hidden>
		     <td><input type='text' name='txtasignaciontrabajadorID' id='txtasignaciontrabajadorID' maxlength='10' placeholder='Ingrese personalID'/></td>
	             </tr>
                     <tr>
                    <td>
                        <h4>Empleado:</h4>
                    </td>
                    <td>
                        <input type="text" readonly required="required" id='txtasignaciontrabajador' name="txtasignaciontrabajador" class="form-control"  value=""  placeholder="Seleccione Empleado" >
                    </td> 
                    <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#selempleado">Buscar</button></td>
                    
                    </tr>
                    <tr>
                    <td>
                        <h4>Fecha Inicio:</h4>
                    </td>
                    <td colspan="2">
                        <input type="date"  name="txtfechainicio" class="form-control"  value="<?php echo date("Y-m-d");?>" >
                    </td>
                    </tr>
                     <tr>
                    <td>
                        <h4>Fecha Fin:</h4>
                    </td>
                    <td colspan="2">
                        <input type="date"  name="txtfechafin" class="form-control"  value="<?php echo date("Y-m-d") ;?>" >
                    </td>
                    </tr>
                     <tr>
                    <td>
                        <h4>Turno:</h4>
                    </td>
                    <td colspan="2">
                    <SELECT id="cbcaja1" NAME="cbcaja1" class="form-control"  > 
                       <option value="0">Seleccione...</option>
                       <option value="1">Mañana</option>
                       <option value="2">Tarde</option>
                       <option value="3">Noche</option>
                    </SELECT>
                    </td>
                    </tr>
                    <tr>
                    <td colspan="3">
                        <center>
                            <br><button type="button" onclick="validar();" class="btn btn-success">REGISTRAR</button>
                            
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
         <div class="modal fade" id="selempleado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>SELECCIONAR EMPLEADO</h5></center>
			</div>
                    <div class="modal-body">
                        <form id="frm_re" name="frm_re" class="form-vertical">
                            <center>
                                <table>
                                    <tr>
                                    <td>
                                        <input type="text" name="txtBuscar" id='txtBuscar' maxlength="50"  id="txtdireccion" class="form-control" placeholder="Comanda">
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
	$('#busemple').load('mdtrabajadorList.php?n='+$('#txtBuscar').val());
}
</script>
        

