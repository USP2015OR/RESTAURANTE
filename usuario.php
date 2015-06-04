<!DOCTYPE HTML>
<?php
require_once("conexion.php");
        header('Content-Type: text/html; charset=UTF-8'); 
	session_start();
	if(isset($_SESSION['usuario'])){
	$cnn = conectar();
	$usuario=$_SESSION['usuario'];
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>RESTAURANTE</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/my_styles.css" rel="stylesheet">

<link rel="stylesheet" href="jquery/css/smoothness/jquery-ui-1.8.2.custom.css" />	
<link href="css/bootstrap.theme.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/js_funciones.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>    
<table class="table" id="cuerpo1">
<tr>
<td width="10%" ></td>
<td id="cuerpo">
<div >
<!--CABECERA -->
</div>

<div class="panel panel-default">
  <div class="navbar navbar-inverse" role="navigation">
<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
		</button>
		<a class="navbar-brand" href="usuario.php">Inicio</a>
	</div>
	
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav">			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Nosotros <b class="caret"></b></a>
				<ul class="dropdown-menu">
                                        <li><a data-toggle="modal"  onclick="" style="cursor:pointer">Reseña Histórica</a></li>
                                        <li><a data-toggle="modal"  onclick="" style="cursor:pointer">Organización</a></li>
					<li><a data-toggle="modal"  onclick="" style="cursor:pointer">Vision</a></li>              
					<li><a data-toggle="modal"  onclick="" style="cursor:pointer">Mision</a></li> 	
					
						
				</ul>
			</li>			
			
			 <?php if($_SESSION['tipousuario'] == '3') {?>
			<li class="dropdown"> 
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Registros <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a data-toggle="modal"  onclick="" style="cursor:pointer">Registro de Comprobante</a></li>              
					<li><a data-toggle="modal"  onclick="" style="cursor:pointer">Registro de Personas</a></li> 
                                        <li><a data-toggle="modal"  onclick="" style="cursor:pointer">Registro de Clientes</a></li>
				</ul>
			</li>
	            <?php } ?>
                        
                        
                        <?php if($_SESSION['tipousuario'] == '6') {?>
			<li class="dropdown"> 
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Registros <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a data-toggle="modal"  onclick="" style="cursor:pointer">Registro de Trabajadores</a></li>              
				</ul>
			</li>
                        <li class="dropdown"> 
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Reportes <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a data-toggle="modal"  onclick="" style="cursor:pointer">Reporte de Platos mas vendidos</a></li>    
                                        <li><a data-toggle="modal"  onclick="" style="cursor:pointer">Reporte de Ganancias</a></li>    
				</ul>
                        </li>
                        <?php } ?>
                        
                        <?php if($_SESSION['tipousuario'] == '6') {?>
			<li class="dropdown"> 
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Registros de Menus</a><b class="caret"></b>
			</li>
                        <?php } ?>
                        
                        <?php if($_SESSION['tipousuario'] == '1') {?>
                                    <li class="dropdown"> 
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Toma de Pedidos</a>	
                                    </li>
                       <?php } ?>

			<!--<?php if($_SESSION['tipousuario'] == '3') {?>
                            <li class="dropdown"> 
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Registros <b class="caret"></b></a>
                                    <ul class="dropdown-menu">					
                                            <li><a data-toggle="modal"  onclick="" style="cursor:pointer">Registro de Comprobante</a></li>              
                                            <li><a data-toggle="modal"  onclick="" style="cursor:pointer">Registro de Personas</a></li> 
                                            <li><a data-toggle="modal"  onclick="" style="cursor:pointer">Registro de Clientes</a></li>
                                    </ul>
                            </li>
                          <?php } ?> -->
                            
                            
                            <?php if($_SESSION['tipousuario'] == '5') {?>
                            <li class="dropdown"> 
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administracion de usuarios <b class="caret"></b></a>
                                    <ul class="dropdown-menu">					
                                            <li><a href="#" onclick="" data-toggle="modal" data-target="#creausuario">Registro de usuario</a></li>	             
                                            <li><a href="#" onclick="" data-toggle="modal" data-target="#activarusuario">Activar cuenta de usuario</a></li> 
                                            <li><a href="#" onclick="" data-toggle="modal" data-target="#eliminarusuario">Dar de baja un usuario</a></li>
                                            <li><a data-toggle="modal"  onclick="" style="cursor:pointer">Visualizar los usuario</a></li>
                                    </ul>
                            </li>
                          <?php } ?>
			
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['nombre']; ?> <span class="glyphicon glyphicon-user"></span></a>
                            <ul class="dropdown-menu">					
                                <li><a href="#" onclick="cargarformulario('contenido','perfilusu.php');" style="cursor:pointer">Perfil</a></li>	             
                                <li><a href="salir.php" style="cursor:pointer">Cerra Sesión</a></li>
                            </ul>
                        </li>
		</ul>
	</div>
</div>
</div>
  <div class="panel-body">
<div id="contenido">
            
</div>
  </div>
</div>
</td><td width="10%"></td></tr>
</table >
   <!-- --------------registrpo de usuario --> 
    
     <div class="modal fade" id="creausuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5>SISTEMA DE PEDIDOS DE COMANDAS</h5>
			</div>
			<div class="modal-body">
                            
                            <form id="frm_creausuario" name="frm_creausuario" class="form-vertical">
      <table >
	<tr>
		<td colspan="4">
			<center><p class="form-title">Crear Usuario</p><br/></center>
		</td>
	</tr>
        
	<tr>
            <td width="7%"></td>
           <td><h4><span>Usuario:</span></h4></td>
                <td><input type="text"  id="txtusuario" class="form-control" placeholder="Username"></td>
        <td width="7%"></td>
        </tr>
        
	<tr>
             <td width="7%"></td>
	    <td><h4><span>Clave:</span></h4></td>
	    <td><input type="password" id="txtclave" class="form-control input-sm" placeholder="Ingrese su Clave"></td>
             <td width="7%"></td>
	</tr>	
        
        <tr>
             <td width="7%"></td>    
            <td><h4><span>Pregunta secreta:</span></h4></td>
            <td><input type="text" id="txtpregunta" class="form-control input-sm" placeholder="Ingrese su Pregunta Secreta"></td>
                     <td width="7%"></td>
	</tr>
        
        <tr>  
                <td width="9%"></td>
		<td><h4><span>Respuesta:</span></h4></td>
                <td width="55%"><input type="text" id="txtrespuesta" class="form-control input-sm" placeholder="Ingrese su Respuesta"></td>	
                 <td width="7%"></td>
	</tr>
        
        <tr>
             <td width="7%"></td>	
            <td><h4><span>Empleado:</span></h4></td>
            <td width="55%"><SELECT NAME="productoss" style="width: 100%" style="height: 300%">
                <option>Seleccione una Opción...</option>
            <?php 
              require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("select CODIGO,EMPLEADO from v_empleado where estado=1",$cnn) or
                die("Problemas en el select:".mysql_error());
                while($row = mysql_fetch_array($clavebuscadah))
                {
                echo'<OPTION VALUE="'.$row['CODIGO'].'">'.$row['EMPLEADO'].'</OPTION>';
                }

                ?>
                </SELECT>
            
            </td>	
            <td width="7%"></td>
	</tr>
	<tr>
	 <td width="7%"></td>	
         <td></td>
		<!--<button type="button" class="btn btn-default">Limpiar</button>-->
                <td><button type="button" onclick="registro();" class="btn btn-primary">Registrar</button></td>
         <td width="7%"></td>
		
	</tr>
</table>
                            </form>
                            
                            
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<!---------------activar usuario--------------->

<div class="modal fade" id="activarusuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5>SISTEMA DE PEDIDOS DE COMANDAS</h5>
			</div>
			<div class="modal-body">
                            
                            
                            <form id="frm_activarusuario" name="frm_activarusuario" class="form-vertical" action="usuario_activar.php" method="post">
                    <table >
                        <tr>
                            <td colspan="5">
                            <center><p class="form-title">Activar Usuarios</p><br/></center>
                            </td>
                        </tr>
                        <tr>
                            <td width="5%">Codigo</td>
                            <td><center>Cuenta</center></td>
                            <td><center>Empleado</center></td>
                            <td>Estado</td>
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
                            <td width="7%"><?php echo$row[1];?></td>
                            <td><?php echo$row[2];?></td>
                            <td><?php echo$row[3];?></td>
                            <!--<td><input type="text" id="usuario" class="form-control input-sm" placeholder="Ingrese su Respuesta"></td>-->
                            <td><Input type="checkbox" class="form-control input-sm"  NAME="usuario[]" value="<?php echo$row[0];?>"/></td>
                                       
                        </tr>
                   <?php  }?>
                       <tr>
                              <td></td>	
                              <td></td>
                                     <!--<button type="button" class="btn btn-default">Limpiar</button>-->
                                     <td><center><button type="submit" onclick="" class="btn btn-primary">Activar Usuario</button</center></td>
                              <td></td>
                              <td></td>
                      </tr>
                    </table>
            </form> 
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
    
<!---------Dar de baja a un usuario -->    
<div class="modal fade" id="eliminarusuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5>SISTEMA DE PEDIDOS DE COMANDAS</h5>
			</div>
			<div class="modal-body">
                            
                            
                            <form id="frm_eliminarusuario" name="frm_eliminarusuario" class="form-vertical" action="usuario_eliminar.php" method="post">
                    <table >
                        <tr>
                            <td colspan="5">
                            <center><p class="form-title">Dar de baja a Usuarios</p><br/></center>
                            </td>
                        </tr>
                        <tr>
                            <td width="5%">Codigo</td>
                            <td><center>Cuenta</center></td>
                            <td><center>Empleado</center></td>
                            <td>Estado</td>
                            <td>Eliminar</td>
                        </tr>
                             <?php 
                             
                             
              require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("select * from V_USUARIO",$cnn) or
                die("Problemas en el select:".mysql_error());
                while($row = mysql_fetch_array($clavebuscadah))
                {?>
                         <tr>
                            <td><?php echo$row[0];?></td>
                            <td width="7%"><?php echo$row[1];?></td>
                            <td><?php echo$row[2];?></td>
                            <td><?php echo$row[3];?></td>
                            <!--<td><input type="text" id="usuario" class="form-control input-sm" placeholder="Ingrese su Respuesta"></td>-->
                            <td><Input type="checkbox" class="form-control input-sm"  NAME="usuario[]" value="<?php echo$row[0];?>"/></td>
                                       
                        </tr>
                   <?php  }?>
                       <tr>
                              <td></td>	
                              <td></td>
                                     <!--<button type="button" class="btn btn-default">Limpiar</button>-->
                                     <td><center><button type="submit" onclick="" class="btn btn-primary">Eliminar Usuario</button></center></td>
                              <td></td>
                              <td></td>
                      </tr>
                    </table>
            </form> 
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

    
</body>
</html>
<?php
	}else{
		echo "<script language=javascript>
            location.href='index.php';
	   </script>";
	}
?>