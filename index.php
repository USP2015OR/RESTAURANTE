<!DOCTYPE HTML>
<?php
header('Content-Type: text/html; charset=UTF-8');  
if (isset($_SESSION['usuario'])){echo "<script language=javascript>
            location.href='usuario.php';
	   </script>";}else{
session_start();
session_destroy();
session_start();
$_SESSION['intentos']=0;
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>RESTAURANTE</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.theme.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/js_funciones.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/my_styles.css" rel="stylesheet">
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
                                        <li><a href="#" onclick="cargarformulario('contenido','reseniahistorica.php')" style="cursor:pointer">Reseña Histórica</a></li>
                                        <li><a data-toggle="modal"  onclick="" style="cursor:pointer">Organización</a></li>
					<li><a href="#" onclick="cargarformulario('contenido','vision.php')" style="cursor:pointer">Vision</a></li>              
					<li><a href="#" onclick="cargarformulario('contenido','mision.php')" style="cursor:pointer">Mision</a></li> 	
					
						
				</ul>
			</li>			
				
			<li><a href="">Instalaciones</a></li>              
			<li><a href="">Platos</a></li> 
			
		</ul>
				<ul class="nav navbar-nav navbar-right">
			<li><a href="#" onclick="" data-toggle="modal" data-target="#login">Iniciar Sesión <span class="glyphicon glyphicon-user"></span></a></li>
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
</table>
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>INICIO DE SESIÓN</h5></center>
			</div>
			<div class="modal-body">
                            <form id="frm_login" name="frm_login" class="form-vertical">
                            <table>
                            <tr id="espaciolog"><td width="30%"></td><td width="50%"></td><td width="20%"></td></tr>
                            
                            <tr><td rowspan="3"><center><img src="imagenes/usuario.png" width="70%"></img></center></td>
                            <td>
                            <form id="frm_login" name="frm_login" class="form-vertical">
                            <table>
                            <tr>
                            <td><h4>Usuario:</h4></td>
                            <td><input type="text"  id="txtusuario" class="form-control" placeholder="Username"></td>
                            </tr>
                            <td><h4>Contraseña:</h4></td>
                            <td><input type="password" id="txtclave" class="form-control" placeholder="Contraseña"></td>
                            <tr>
                            </tr>
                            </table>
                            </td><td></td></tr>
                            <tr><td width="50%">
                            <br>
                            <center>
                                <button type="button" onclick="login();" class="btn btn-success">Ingresar</button><br>
                                <a href="#" data-toggle="modal" data-target="#recuperar" data-dismiss="modal">Recuperar cuenta</a>
                            </center>
                             </td><td width="20%">
                             </tr>
                            <tr id="espaciolog"><td width="50%"></td><td width="20%"></tr>
                            </table>
                            </form>
			</div>
			<div class="modal-footer">
				<center><h7>SISTEMA DE PEDIDOS DE COMANDAS</h7></center>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="recuperar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>RECUPERAR CUENTA</h5></center>
			</div>
                    <div class="modal-body">
                        <form id="frm_re" name="frm_re" class="form-vertical">
                            <center>
                        <table>
                            <tr><td width="20%"></td>
                            <td width="60%"><center><h4>Usuario</h4><input type="text"  id="txtusuario" class="form-control" onkeyup="prg_sec();" placeholder="Username"></center></td>
                            <td width="20%"></td>
                            </tr>
                             <tr id="espaciolog">
                             <td width="20%"></td>
                             <td width="60%">
                             <center>
                                 <div id="recup" name="recup">
                                     
                                 </div>
                             </center>
                             </td>
                             <td width="20%"></td>
                             </tr>
                        </table></center>
                        </form>
                    </div>
			<div class="modal-footer">
				<center> <h7> SISTEMA DE PEDIDOS DE COMANDAS</h7></center>
			</div>
		
	</div>
</div>
</div>
</body>
           </html><?php } ?>