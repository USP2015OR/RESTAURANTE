<?php
 require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("SELECT distinct (case zona_nivel when 1 then 'Primero' when 2 then 'Segundo' when 3 then 'Tercero' end) FROM `zona`",$cnn) or
                die("Problemas en el select:".mysql_error());
               // $row = mysql_fetch_array($clavebuscadah);
                $cnn=conectar();
                $clavebus=mysql_query("SELECT max(mesa_numero) FROM `mesa`",$cnn) or
                die("Problemas en el select:".mysql_error());
                $row1 = mysql_fetch_array($clavebus);
?>
<html>
    <head>
    </head>
 <script type="text/javascript" charset="utf-8">
	  $(document).ready(function() {
	  // Parametros para el combo
	   $("#cbpiso").change(function () {
	      $("#cbpiso option:selected").each(function () {
	        elegido=$(this).val();
               //alert(elegido);
	        $.post("combo.php", { elegido: elegido }, function(data){
	        $("#cbzona").html(data);
	      });     
	     });
	   });    
	});
</script>	
    <body>
        <br>
    <center>
    <table width="50%">
    <tr><td>
    <div class="panel panel-primary">
        <div class="panel-heading"><center><h5>REGISTRO DE MESA</h5></center></div>
        <div class="panel-body">
            <center>
                <form id="frm_mesa" name="frm_mesa" class="form-vertical">
                <table>
                    <tr>
                    <td>
                        <h4>Piso:</h4>
                    </td>
                    <td>
                    <SELECT id="cbpiso" NAME="cbpiso" class="form-control"  > 
                         <option value="0">Seleccione...</option>
                        <?php  
                         while($row = mysql_fetch_array($clavebuscadah)){?>
                        
                        <OPTION VALUE="<?php echo$row[0];?>" ><?php echo$row[0];?></OPTION>
                         <?php  }?>
                    </SELECT>
                       
                    </td>
                    </tr>
                    <tr>
                        <td>
                        <h4>Zona:</h4>
                    </td>
                    <td>
                     <div class="control-group">
                        <div class="controls">
                            <select id="cbzona" NAME="cbzona" class="form-control" >
                            </select>
                       </div>
                      </div> 
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <h4>N° Mesa:</h4>
                    </td>
                    <td>
                        <input type="text" readonly required="required" name="txtmesanumero" class="form-control" value="<?php echo$row1[0]+1;?>" disable>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <h4>Capacidad:</h4>
                    </td>
                    <td>
                        <input type="text"  name="txtmesacapacidad" class="form-control"  value=""  placeholder="Ingrese Capacidad">
                    </td>
                    </tr>
                    <tr>
                    <td colspan="2">
                        <center>
                            <br><button type="button" onclick="reg_mesa();" class="btn btn-success">REGISTRAR</button>
                            
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


