<?php
//echo "sasasa";
require_once("conexion.php");
$cnn=conectar();
$usuario=$_GET['usuario'];
$query="SELECT `usuario_pregunta` FROM `usuario` WHERE `usuario_nombre`='".$usuario."'";
$rs=mysql_query($query,$cnn);
$n=is_resource($rs)?mysql_num_rows($rs):0;
if($n>0)
    {
	$row=mysql_fetch_array($rs); ?>
        <form id="frm_login" name="frm_preg" class="form-vertical">
            <center>
                <h4><?php echo "".$row[0]; ?></h4>
                <input type="text"  id="txusuario" class="form-control" placeholder="Respuesta" width="70%">
            </center>
        </form>
        
<?php    }
?>