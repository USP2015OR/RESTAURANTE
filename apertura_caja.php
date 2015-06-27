<?php
 require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("SELECT caja_id,caja_numero FROM `caja`",$cnn) or
                die("Problemas en el select:".mysql_error());
                //$row = mysql_fetch_array($clavebuscadah);

?>
<html>
    <head>
        
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
        <div class="panel-heading"><center><h5>APERTURA DE CAJA</h5></center></div>
        <div class="panel-body">
            <center>
                <form id="frm_aperturacaja" name="frm_aperturacaja" class="form-vertical"><!-- method="post" action="restaurarpass_ope.php">-->
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
                        <input type="text" readonly required="required" name="txtaperturamovimiento" class="form-control"  value="Apertura" >
                    </td>
                    </tr>
                     <tr>
                    <td>
                        <h4>Fecha:</h4>
                    </td>
                    <td>
                        <input type="date"  name="txtaperturafecha" class="form-control"  value="<?php echo date("Y-m-d");?>">
                    </td>
                    </tr>
                     <tr>
                    <td>
                        <h4>Monto Inicial:</h4>
                    </td>
                    <td>
                        <input type="text"  name="txtmontoinicial" class="form-control"  value="" placeholder=" 0.00">
                    </td>
                    </tr>
                                        
                    <tr>
                    <td colspan="2">
                        <center>
                            <br><button type="button" onclick="apertura_caja();" class="btn btn-success">REGISTRAR</button>
                            
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

