<?php
 require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("SELECT max(caja_numero) FROM `caja`",$cnn) or
                die("Problemas en el select:".mysql_error());
                $row = mysql_fetch_array($clavebuscadah);

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
        <div class="panel-heading"><center><h5>REGISTRO DE CAJA</h5></center></div>
        <div class="panel-body">
            <center>
                <form id="frm_caja" name="frm_caja" class="form-vertical"><!-- method="post" action="restaurarpass_ope.php">-->
                <table>
                    <tr>
                    <td>
                        <h4>Numero de caja:</h4>
                    </td>
                    <td>
                        <input type="text" readonly required="required" name="txtcajanumero" class="form-control"  value="<?php echo$row[0]+1;?>" disable>
                    </td>
                    </tr>
                    <tr>
                    <td colspan="2">
                        <center>
                            <br><button type="button" onclick="reg_caja();" class="btn btn-success">REGISTRAR</button>
                            
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

