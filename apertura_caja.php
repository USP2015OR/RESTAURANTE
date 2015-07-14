<?php
 require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("SELECT caja_id,caja_numero FROM `caja` where caja_estado=1",$cnn) or
                die("Problemas en el select:".mysql_error());
                //$row = mysql_fetch_array($clavebuscadah);
 date_default_timezone_set('America/Lima'); 
?>
<html>
    <head>
             
<script type="text/javascript">
// Solo permite ingresar numeros.
function soloNumeros(){
	
	 if ((event.keyCode < 48) || (event.keyCode > 57))
		if((event.keyCode < 46) || (event.keyCode > 46))
		{
			event.returnValue = false;
		}
	
}
</script>
          <script>
          function validar(){
             //alert("Ingrese direccion") ;
             if(document.frm_aperturacaja.cbcaja.value.length==0){
              alert("Seleccione una caja") ;
             // document.frm_mesa.cbzona.focus();
              //document.frm_aperturacaja.txtmenudiacantidad.focus();
              return 0;}
            if(document.frm_aperturacaja.txtmontoinicial.value.length==0){
              alert("Ingrese cantinidad inicial") ;
              document.frm_aperturacaja.txtmontoinicial.focus();
              return 0;
        }   
         apertura_caja();    
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
                        <input type="text"  name="txtmontoinicial" class="form-control"  value="" placeholder=" 0.00" onKeyPress="return soloNumeros()">
                    </td>
                    </tr>
                        <tr>
                    <td>
                        <h4>Tipo cambio Dolar:</h4>
                    </td>
                    <td>
                        <input type="text"  name="txttipocambio" class="form-control"  value="" placeholder=" 0.00" onKeyPress="return soloNumeros()">
                    </td>
                    </tr>               
                    <tr>
                    <td colspan="2">
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
    </body>
</html>

