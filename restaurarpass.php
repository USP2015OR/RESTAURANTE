<?php
session_start();
if(isset($_SESSION['id'])){
$id=$_SESSION['id'];
?>
<html>
    <head>
        <title>RESTAURAR CONTRASEÑA</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.theme.min.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/js_funciones.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
    <br>
    <center>
    <table width="50%">
    <tr><td>
    <div class="panel panel-primary">
        <div class="panel-heading"><center><h5>REESTABLECER CONTRASEÑA</h5></center></div>
        <div class="panel-body">
            <center>
                <form id="frm_resta" name="frm_resta" class="form-vertical">
                <table>
                    <tr>
                    <td>
                        <h4>Contraseña antigua:</h4>
                    </td>
                    <td>
                        <input type="text"  id="txtpassantigua" class="form-control" onkeypress="" placeholder="Contraseña Antigua">
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <h4>Nueva contraseña:</h4>
                    </td>
                    <td>
                        <input type="text"  id="txtpassnueva1" class="form-control" onkeypress="" placeholder="Nueva Contraseña">
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <h4>Repetir contraseña:</h4>
                    </td>
                    <td>
                        <input type="text"  id="txtpassnueva2" class="form-control" onkeypress="" placeholder="Nueva Contraseña">
                    </td>
                    </tr>
                    <tr>
                    <td colspan="2">
                        <center>
                            <button type="button" onclick="upcontrasena(<?php echo $_SESSION['id']; ?>);" class="btn btn-success">Reestablecer</button>
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



<?php
}else
    { 
        echo "<script language=javascript>
            location.href='index.php';
	   </script>";
    }
