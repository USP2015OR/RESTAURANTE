<?php
?>
<html>
    <head>
       <script type="text/javascript">
        function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode;
	return (key >= 48 && key <= 57);
}
        </script>  
        
         <script>
          function validar(){
             //alert("Ingrese direccion") ;
            if(document.frm_regpersona.txtdni.value.length==0){
              alert("Ingrese dni") ;
              document.frm_regpersona.txtdni.focus();
              return 0;
        }
         reg_per();    
    } 
        </script>
    </head>

    <body>
        <form id="frm_login" name="frm_regpersona" class="form-vertical"><center>
            <table>
                <tr>
                <td colspan="3">
                    <center>
                        <h3><font color="#5858FA"><b>REGISTRO DE PERSONAS</b></font></h3>
                    </center>
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtpnombre"><b>Primer nombre: </b></label></h5>
                </td>
                <td colspan="2">
                    <input readonly type="text" required="required" name="txtpnombre" maxlength="50" id="txtpnombre" class="form-control" placeholder="Primer nombre">
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtsnombre"><b>Segundo nombre: </b></label></h5>
                </td>
                <td colspan="2">
                    <input readonly type="text" required="required" name="txtsnombre" maxlength="50"  id="txtsnombre" class="form-control" placeholder="Segundo nombre">
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtapaterno"><b>Apellido paterno: </b></label></h5>
                </td>
                <td colspan="2">
                    <input readonly type="text" required="required" name="txtapaterno" maxlength="50" id="txtapaterno" class="form-control" placeholder="Apellido paterno">
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtamaterno"><b>Apellido materno: </b></label></h5>
                </td>
                <td colspan="2">
                    <input readonly  type="text" required="required" name="txtamaterno" maxlength="50" id="txtamaterno" class="form-control" placeholder="Apellido materno">
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtdni"><b>DNI: </b></label></h5>
                </td>
                <td>
                    <input type="text" required="required" name="txtdni" maxlength="8" id="txtdni" class="form-control" placeholder="DNI" onKeyPress="return soloNumeros(event)">
                    
                </td>
                <TD>
                    <button type="button" onclick="llenar();" class="btn btn-success">SELECCIONAR</button>
                </TD>
                </tr>
                <tr>
                <td colspan="3">
                    <center>
                        <br><button type="button" onclick="validar();" class="btn btn-success">Registrar</button>
                    </center>
                </td>
                </tr>
            </table></center>
        </form>
    </body>
</html>

