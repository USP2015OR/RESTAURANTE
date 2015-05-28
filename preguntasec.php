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
            <center>
                <h4><?php echo "".$row[0]; ?></h4>
                <input type="text"  id="txtrespuesta" class="form-control" placeholder="Respuesta" width="70%"><br>
                <button type="button" onclick="validpreg();" class="btn btn-success">Ingresar</button>
            </center>
        
<?php    }
?>