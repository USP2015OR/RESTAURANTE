<!---------------activar usuario--------------->
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <title> ACTIVAR USUARIO</title>
    </head>
    <body>			
	<h5>SISTEMA DE PEDIDOS DE COMANDAS</h5>
         <form id="frm_activarusuario" name="frm_activarusuario" class="form-vertical" action="usuario_activar_ope.php" method="post">
        <table class="table-striped">
            <tr>
                <td colspan="5">
                    <center><p class="form-title">Activar Usuarios</p><br/></center>
                </td>
            </tr>
            <tr>
                <td width="10%">Codigo</td>
                <td width="30%"><center>Cuenta</center></td>
                <td width="50%"><center>Empleado</center></td>
                <td width="10%">Estado</td>
                <td>Activar</td>
               </tr>
                             <?php 
                             
                             
              require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("select * from V_USUARIO_DESAPTIVADO",$cnn) or
                die("Problemas en el select:".mysql_error());
                while($row = mysql_fetch_array($clavebuscadah))
                {?>
                         <tr>
                            <td><?php echo$row[0];?></td>
                            <td><?php echo$row[1];?></td>
                            <td><?php echo$row[2];?></td>
                            <td><?php echo$row[3];?></td>
                            <!--<td><input type="text" id="usuario" class="form-control input-sm" placeholder="Ingrese su Respuesta"></td>-->
                            <td><Input type="checkbox" class="form-control input-sm"  NAME="usuario[]" value="<?php echo$row[0];?>"/></td>
                                       
                        </tr>
                   <?php  }?>
                       <tr>
                       <td colspan="5"><center><button type="submit" onclick="" class="btn btn-success">Activar Usuario</button</center></td>
                             
                      </tr>
                    </table>
         </form>
			
</html>