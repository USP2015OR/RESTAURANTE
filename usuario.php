<!DOCTYPE HTML>
<?php
require_once("conexion.php");
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
		<a class="navbar-brand" href="index.php">Inicio</a>
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
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Registros de Menus <b class="caret"></b></a>
			</li>
                        <?php } ?>
                        
                        <?php if($_SESSION['tipousuario'] == '1') {?>
                                    <li class="dropdown"> 
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Toma de Pedidos <b class="caret"></b></a>	
                                    </li>
                       <?php } ?>

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
                        
			
		</ul>
				<ul class="nav navbar-nav navbar-right">
			<li><a href="salir.php">Cerrar Sesión <span class="glyphicon glyphicon-user"></span></a></li>
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
</table>
</body>
</html>
<?php
	}else{
		echo "<script language=javascript>
            location.href='index.php';
	   </script>";
	}
?>