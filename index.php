<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>RESTAURANTE</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.theme.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
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
		<a class="navbar-brand" href="index.html">Inicio</a>
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
			
			<li class="dropdown"> 
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Productos <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a data-toggle="modal"  onclick="" style="cursor:pointer">Instalaciones</a></li>              
					<li><a data-toggle="modal"  onclick="" style="cursor:pointer">Platos</a></li> 
				</ul>
			</li>
			
		</ul>
				<ul class="nav navbar-nav navbar-right">
			<li><a href="#" onclick="" data-toggle="modal" data-target="#login">Iniciar Sesión <span class="glyphicon glyphicon-user"></span></a></li>
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
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>INICIO DE SESIÓN</h5></center>
			</div>
			<div class="modal-body">
                            <table>
                            <tr id="espaciolog"><td width="30%"></td><td width="50%"></td><td width="20%"></td></tr>
                            
                            <tr><td rowspan="3"><center><img src="imagenes/usuario.png" width="70%"></img></center></td>
                            <td>
                            <form id="frm_login" name="frm_login" class="form-vertical">
                            <table>
                            <tr>
                            <td><center><h4><span class="label label-info">Usuario:</span></h4></center></td>
                            <td><input type="text"  id="txtusuario" onkeypress="Validar();"class="form-control" placeholder="Username" width="70%"></td>
                            </tr>
                            <td><center><h4><span class="label label-info">Contraseña:</span></center></h4></td>
                            <td><input type="password" id="txtclave" onkeypress="Validar2();" class="form-control" placeholder="Contraseña" width="70%"></td>
                            <tr>
                            </tr>
                            </table></form>
                            </td><td></td></tr>
                            <tr><td width="50%">
                            <br>
                            <center>
                                <button type="button" onclick=""class="btn btn-success">
                                Ingresar <span class="glyphicon glyphicon-ok"></span>
                                </button></center>
                             </td><td width="20%"></tr>
                            <tr id="espaciolog"><td width="50%"></td><td width="20%"></tr>
                            </table>
			</div>
			<div class="modal-footer">
				<center><h7>SISTEMA DE PEDIDOS DE COMANDAS</h7></center>
			</div>
		</div>
	</div>
</div>
</body>
</html>