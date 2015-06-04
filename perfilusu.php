<?php
session_start();
header('Content-Type: text/html; charset=UTF-8'); 
require_once("conexion.php");
$cnn=conectar();
$id=$_SESSION['id'];
$sql="SELECT concat(p.persona_prinom,' ',p.persona_segnom) as 'nombres'
    ,concat(p.persona_apepat,' ',p.persona_apemat) as 'apellidos'
    ,e.empleado_direccion as 'direccion'
    ,e.empleado_telefono as 'telefono'
    ,u.usuario_pregunta as 'pregunta'
    FROM `usuario` u
    inner join `empleado` e on u.empleado_id=e.empleado_id
    inner join `persona` p on e.persona_id=p.persona_id
    where u.usuario_id=".$id.";";
$rs=mysql_query($sql,$cnn) or die("error");
$row=mysql_fetch_array($rs);
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <title>PERFIL</title>
    </head>
    <body>
        <table class="table">
            <tr>
            <td colspan="2">
                <center>
                    <img src="imagenes/usuario.png" width="200px"/>
                </center>
            </td>
            </tr>
            <tr>
            <td>
                NOMBRES:
            </td>
            <td>
                <?php echo $row[0]; ?>
            </td>
            </tr>
            <tr>
            <td>
                APELIDOS:
            </td>
            <td>
                <?php echo $row[1]; ?>
            </td>
            </tr>
            <tr>
            <td>
                DIRECCIÓN:
            </td>
            <td>
                <?php echo $row[2]; ?>
            </td>
            </tr>
            <tr>
            <td>
                TELÉNOFO:
            </td>
            <td>
                <?php echo $row[3]; ?>
            </td>
            </tr>
            <tr>
            <td>
                PREGUNTA SECRETA:
            </td>
            <td>
                <a href="#"><?php echo $row[4]; ?></a>
            </td>
            </tr>
            <tr>
            <td>
                CONTRASEÑA:
            </td>
            <td>
                <a href="#" onclick="" data-toggle="modal" data-target="#cam_pass">***********</a>
            </td>
            </tr>
        </table>
        <div class="modal fade" id="cam_pass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <center><h5>CAMBIAR CONTRASEÑA</h5></center>
                            </div>
                            <div class="modal-body">
                                <form id="frm_campass" name="frm_campass">
                                    <center>
                                    <table>
                                        <tr>
                                        <td>
                                            CONTRASEÑA ACTUAL:
                                        </td>
                                        <td>
                                            <input type="password" id="txtpassantigua"  name="txtpassantigua" class="form-control" onkeypress="" placeholder="Contraseña Antigua">
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            CONTRASEÑA NUEVA:
                                        </td>
                                        <td>
                                            <input type="password"  id="txtpassnueva1" name="txtpassnueva1" class="form-control" onkeypress="" placeholder="Contraseña Nueva">
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            CONTRASEÑA NUEVA:
                                        </td>
                                        <td>
                                            <input type="password"  id="txtpassnueva2" name="txtpassnueva2" class="form-control" onkeypress="" placeholder="Contraseña Nueva">
                                        </td>
                                        </tr>
                                        <tr>
                                        <td colspan="2"><center><br>
                                                <button type="button" onclick="upcontrasena(<?php echo $id; ?>);" class="btn btn-success">Cambiar</button><br></center>
                                        </td>
                                        </tr>
                                    </table>
                                    </center>
                                </form>
                            </div>
                            <div class="modal-footer">
                                    <center> <h7>SISTEMA DE PEDIDOS DE COMANDAS</h7></center>
                            </div>
                    </div>
            </div>
    </div>
    </body>
</html>
