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
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a class="navbar-brand" href="#" onclick="" style="cursor:pointer">Inicio</a></li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nosotros <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#" onclick="" style="cursor:pointer">Reseña Histórica</a></li>
			<li><a href="#" onclick="" style="cursor:pointer">Organización</a></li>
            <li><a href="#" onclick="" style="cursor:pointer">Misión</a></li>
			<li><a href="#" onclick="" style="cursor:pointer">Visión</a></li>
            <!--<li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
        <li><a href="#" onclick="" style="cursor:pointer">Instalaciones</a></li>
		<li><a href="#" onclick="" style="cursor:pointer">Platos</a></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
        <li><a href="#" onclick="" data-toggle="modal" data-target="#login">Iniciar Sesión <span class="glyphicon glyphicon-user"></span></a></li>
      </ul>
	  </div>
<!--</nav>-->
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
				<center><h4>INICIO DE SESIÓN</h4></center>
			</div>
			<div class="modal-body">
                            <table>
                            <tr id="espaciolog"><td width="30%"></td><td width="50%"></td><td width="20%"></td></tr>
                            
                            <tr><td rowspan="4"><center><img src="imagenes/usuario.png" width="70%"></img></center></td>
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
			<div calss="modal-footer">
				
			</div>
		</div>
	</div>
</div>
</body>
</html>