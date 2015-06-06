<?php
?>
<html>
    <head>
        
    </head>
    <body>
        <form id="frm_login" name="frm_regpersona" class="form-vertical"><center>
            <table>
                <tr>
                <td colspan="2">
                    <center>
                        <h3><font color="#5858FA"><b>REGISTRO DE PERSONAS</b></font></h3>
                    </center>
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtpnombre"><b>Primer nombre: </b></label></h5>
                </td>
                <td>
                    <input type="text" required="required" name="txtpnombre" maxlength="50" id="txtpnombre" class="form-control" placeholder="Primer nombre">
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtsnombre"><b>Segundo nombre: </b></label></h5>
                </td>
                <td>
                    <input type="text" required="required" name="txtsnombre" maxlength="50"  id="txtsnombre" class="form-control" placeholder="Segundo nombre">
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtapaterno"><b>Apellido paterno: </b></label></h5>
                </td>
                <td>
                    <input type="text" required="required" name="txtapaterno" maxlength="50" id="txtapaterno" class="form-control" placeholder="Apellido paterno">
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtamaterno"><b>Apellido materno: </b></label></h5>
                </td>
                <td>
                    <input type="text" required="required" name="txtamaterno" maxlength="50" id="txtamaterno" class="form-control" placeholder="Apellido materno">
                </td>
                </tr>
                <tr>
                <td>
                    <h5><label for="txtdni"><b>DNI: </b></label></h5>
                </td>
                <td>
                    <input type="text" required="required" name="txtdni" maxlength="8" id="txtdni" class="form-control" placeholder="DNI">
                </td>
                </tr>
                <tr>
                <td colspan="2">
                    <center>
                        <br><button type="button" onclick="reg_per();" class="btn btn-success">Registrar</button>
                    </center>
                </td>
                </tr>
            </table></center>
        </form>
    </body>
</html>

