<!DOCTYPE HTML>
<?php
header('Content-Type: text/html; charset=UTF-8');  
require_once("conexion.php");
        header('Content-Type: text/html; charset=UTF-8'); 
	session_start();
	if(isset($_SESSION['usuario'])){
	$cnn = conectar();
	$usuario=$_SESSION['usuario'];
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
            <a class="navbar-brand" href="#" onclick="cargarformulario('contenido','inicio.php')">Inicio</a>
	</div>
	
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav">			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Nosotros <b class="caret"></b></a>
				<ul class="dropdown-menu">
                                        <li><a href="#"  onclick="cargarformulario('contenido','reseniahistorica.php');" style="cursor:pointer">Reseña Histórica</a></li>
                                       
					<li><a href="#" onclick="cargarformulario('contenido','vision.php')" style="cursor:pointer">Vision</a></li>              
					<li><a href="#" onclick="cargarformulario('contenido','mision.php')" style="cursor:pointer">Mision</a></li> 	
					
						
				</ul>
			</li>			
			
			 <?php if($_SESSION['tipousuario'] == '3') {?>
			<li class="dropdown"> 
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Registros <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="#"  onclick="cargarformulario('contenido','reg_comprobante.php?id=<?php echo $_SESSION['id']; ?>')"style="cursor:pointer">Registro de Comprobante</a></li>              
					<li><a data-toggle="modal"  onclick="cargarformulario('contenido','reg_persona.php')" style="cursor:pointer">Registro de Personas</a></li> 
                                        <li><a data-toggle="modal"  onclick="cargarformulario('contenido','reg_cliente.php')" style="cursor:pointer">Registro de Clientes</a></li>
				</ul>
			</li>
	            <?php } ?>
                        
                        
                        <?php if($_SESSION['tipousuario'] == '6') {?>
			<li class="dropdown"> 
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Registros <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="#"  onclick="cargarformulario('contenido','reg_persona.php')" style="cursor:pointer">Registro de Persona</a></li> 
                                        <li><a href="#"  onclick="cargarformulario('contenido','reg_empleado.php');" style="cursor:pointer">Registro de Trabajadores</a></li>
                                        <li><a href="#"  onclick="cargarformulario('contenido','reg_caja.php');" style="cursor:pointer">Registro de Caja</a></li>
                                         <li><a href="#"  onclick="cargarformulario('contenido','reg_mesa.php');" style="cursor:pointer">Registro de Mesa</a></li>
                                         <li><a href="#"  onclick="cargarformulario('contenido','reg_menudia.php');" style="cursor:pointer">Registro de Menu del Dia</a></li>
                                         <li><a href="#"  onclick="cargarformulario('contenido','apertura_caja.php');" style="cursor:pointer">Apertura de Caja</a></li>
                                         <li><a href="#"  onclick="cargarformulario('contenido','cierre_caja.php');" style="cursor:pointer">Cierre de Caja</a></li>
                                          <li><a href="#"  onclick="cargarformulario('contenido','caja_mantenimiento.php');" style="cursor:pointer">Eliminar de Caja</a></li>
                                          <li><a href="#"  onclick="cargarformulario('contenido','caja_actualizar.php');" style="cursor:pointer">Modificar Caja</a></li>
				          <li><a href="#"  onclick="cargarformulario('contenido','asignacion_caja.php');" style="cursor:pointer">Asignacion Caja</a></li>

                                </ul>
			</li>
                        <li class="dropdown"> 
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Reportes <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a data-toggle="modal"  onclick="cargarformulario('contenido','reporte_pmv.php');" style="cursor:pointer">Reporte de Platos mas vendidos</a></li>    
                                        <li><a data-toggle="modal"  onclick="cargarformulario('contenido','reporte_ganancia.php');" style="cursor:pointer">Reporte de Ganancias</a></li>   
                                        <li><a href="#"  onclick="cargarformulario('contenido','reporte_comandas.php');" style="cursor:pointer">Reporte de Comandas</a></li>

                                        
				</ul>
                        </li>
                        <?php } ?>
                        
                        <?php if($_SESSION['tipousuario'] == '6') {?>
			<li class="dropdown"> 
				<a href="#" onclick="cargarformulario('contenido','menu_registrar.php');" style="cursor:pointer"> Registros de Menus</a><b class="caret"></b>
			</li>
                        <?php } ?>
                        
                        <?php if($_SESSION['tipousuario'] == '1') {?>
                                    <li class="dropdown"> 
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pedidos<b class="caret"></b></a>
                                            <ul class="dropdown-menu">					
                                             <li><a href="#" onclick="cargarformulario('contenido','reg_pedido.php?usuario=<?php echo $_SESSION['id']; ?>');limpiar_dt(<?php echo $_SESSION['id']; ?>);" style="cursor:pointer">Registro</a></li>	             
                                            <li><a href="#" onclick="cargarformulario('contenido','list_pedidos.php?usuario=<?php echo $_SESSION['id']; ?>');" style="cursor:pointer">Listar</a></li>
                                    </ul>
                                    </li>
                                    <li class="dropdown"> 
				<a href="#" onclick="cargarformulario('contenido','lista_mesas.php');" style="cursor:pointer"> Lista de mesas</a><b class="caret"></b>
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
                                             <li><a href="#" onclick="cargarformulario('contenido','usuario_registrar.php');" style="cursor:pointer">Registro de usuario</a></li>	             
                                            <li><a href="#" onclick="cargarformulario('contenido','usuario_activar.php');" style="cursor:pointer">Activar cuenta de usuario</a></li> 
                                            <li><a href="#" onclick="cargarformulario('contenido','usuario_eliminar.php');" style="cursor:pointer">Dar de baja un usuario</a></li>
                                       
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
            <div id="inicio1" class="panel" style="width: 60%;margin-left: auto; margin-right: auto;">

		 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active" style="margin-left: auto; margin-right: auto;">
          <img src="imagenes/img1.jpg" alt="First slide">
           <div class="container">
            <div class="carousel-caption">
             <!-- <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
            </div>
          </div>
        </div>
        <div class="item" style="margin-left: auto; margin-right: auto;">
          <img src="imagenes/img2.jpg" alt="Second slide">
         <div class="container">
            <div class="carousel-caption">
               <!-- <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
            </div>
          </div>
        </div>
        <div class="item" style="margin-left: auto; margin-right: auto;">
          <img src="imagenes/img3.jpg"  alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
               <!--<h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
            </div>
          </div> 
        </div>
          <div class="item" style="margin-left: auto; margin-right: auto;">
          <img src="imagenes/img4.jpg"  alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
               <!--<h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
            </div>
          </div> 
        </div>
          <div class="item" style="margin-left: auto; margin-right: auto;">
          <img src="imagenes/img5.jpg"  alt="Fifth slide">
          <div class="container">
            <div class="carousel-caption">
               <!--<h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
            </div>
          </div> 
        </div>
          <div class="item" style="margin-left: auto; margin-right: auto;">
          <img src="imagenes/img6.jpg"  alt="Sixth slide">
          <div class="container">
            <div class="carousel-caption">
               <!--<h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
            </div>
          </div> 
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
</div>
  </div>
</div>
</td></tr>
</table >    
</body>
</html>
<?php
	}else{
		echo "<script language=javascript>
            location.href='index.php';
	   </script>";
	}
?>
