
function llenar()
{
    var dni=document.frm_regpersona.txtdni;
    //alert (dni.value);
    $.post('ws_persona.php', 
		{	dni		: dni.value,
                        pos             : 0
		},
		function (data){
                    if(data=="error")
                    {
                        alert("DNI inválido, porfavor verifique el número ingresado");
                        document.frm_regpersona.txtpnombre.value="";
                    }else
                    {
                        document.frm_regpersona.txtpnombre.value=data;
                    }
		}
	);
$.post('ws_persona.php', 
		{	dni		: dni.value,
                        pos             : 1
		},
		function (data){
                    if(data=="error")
                    {
                        document.frm_regpersona.txtsnombre.value="";
                    }else
                    {
                        document.frm_regpersona.txtsnombre.value=data;
                    }
		}
	);
$.post('ws_persona.php', 
		{	dni		: dni.value,
                        pos             : 2
		},
		function (data){
                    if(data=="error")
                    {
                        document.frm_regpersona.txtapaterno.value="";
                    }else
                    {
                        document.frm_regpersona.txtapaterno.value=data;
                    }
		}
	);
$.post('ws_persona.php', 
		{	dni		: dni.value,
                        pos             : 3
		},
		function (data){
                    if(data=="error")
                    {
                        document.frm_regpersona.txtamaterno.value="";
                    }else
                    {
                        document.frm_regpersona.txtamaterno.value=data;
                    }
		}
	);
}
function reg_empleado(){
	var pid = document.frm_regempleado.txtpersonaid;
        var direccion = document.frm_regempleado.txtdireccion;
        var fecha = document.frm_regempleado.txtfecha;
        var telefono = document.frm_regempleado.txttelefono;
        var cargo = document.frm_regempleado.cbocargo;
	//alert(pid.value+" "+direccion.value+" "+fecha.value+" "+telefono.value+" "+cargo.value);
	$.post('reg_empleado_ope.php', 
		{	pid		: pid.value,		
			direccion 	: direccion.value,
                        fecha           : fecha.value,
                        telefono        : telefono.value,
                        cargo           : cargo.value
		},
		function (data){
			if(data=="correcto"){
				alert("Empleado registrado correctamente");
                                document.frm_regempleado.txtpersonaid.value="";
                                document.frm_regempleado.txtpersona.value="";
                                document.frm_regempleado.txtdireccion.value="";
                                document.frm_regempleado.txtfecha.value="";
                                document.frm_regempleado.txttelefono.value="";
                                document.frm_regempleado.cbocargo.value="";
			}else{
				alert(data);
			}
		}
	);
}
function pasdemp(a,b)
{
    document.frm_regempleado.txtpersona.value=a;
    document.frm_regempleado.txtpersonaid.value=b;
}
function bus_empleado(){
	var usuario = document.frm_re.txtbusc;
	//alert(usuario.value);
	cargarformulario('busemple','bus_empleado.php?nombre='+usuario.value);
}
function reg_per(){
	var pnombre = document.frm_regpersona.txtpnombre;
	var snombre = document.frm_regpersona.txtsnombre;
        var apaterno = document.frm_regpersona.txtapaterno;
        var amaterno = document.frm_regpersona.txtamaterno;
        var dni = document.frm_regpersona.txtdni;
	//alert(pnombre.value+" "+snombre.value+" "+apaterno.value+" "+amaterno.value+" "+dni.value);
	$.post('reg_persona_ope.php', 
		{	pnombre		: pnombre.value,		
			snombre 	: snombre.value,
                        apaterno        : apaterno.value,
                        amaterno        : amaterno.value,
                        dni             : dni.value
		},
		function (data){
			if(data=="correcto"){
				alert("Persona registrada correctamente");
                                document.frm_regpersona.txtpnombre.value="";
                                document.frm_regpersona.txtsnombre.value="";
                                document.frm_regpersona.txtapaterno.value="";
                                document.frm_regpersona.txtamaterno.value="";
                                document.frm_regpersona.txtdni.value="";
			}else{
				alert(data);
			}
		}
	);
}
function registrousuario(){
        var codigo = document.frm_empleado.codigo;
	var clave = document.frm_empleado.empleado;
        alert(clave.value);
	//alert(pregunta.value+" "+respuesta.value+" "+empleado.value);
	$.post('usuario_registrar.php', 
		{	codigo		: codigo.value,		
			empleaado	: empleado.value,
                       // pregunta        : pregunta.value,
                       // respuesta       : respuesta.value,
                       // empleado        : empleado.value
		},
		function (data){
			if(data=="SU REGISTRO FUE REALIZADO CORRECTAMENTE"){
				$(location).attr('href','usuario.php');
			}else{
				alert(data);
			}
		}
	);
}
function uprespuesta(id)
{
    //alert("sasasas");
	var passvieja = document.frm_campreg.txtrespuestaa;
        var passnueva1 = document.frm_campreg.txtrespuestan1;
        var passnueva2 = document.frm_campreg.txtrespuestan2;
      //  alert(passnueva1.value +" "+passnueva2.value+" "+id);
        if(passnueva1.value==passnueva2.value)
        {
            $.post('camres_ope.php', 
                    {	
                        resvieja	: passvieja.value,		
                        resnueva	: passnueva1.value,
                        id              : id
                    },
                    function (data){
                            if(data=="correcto"){
                                    alert("Respuesta cambiada correctamente");
                                    document.frm_campreg.txtrespuestaa.value="";
                                    document.frm_campreg.txtrespuestan1.value="";
                                    document.frm_campreg.txtrespuestan2.value="";
                            }else{
                                    //alert("Contraseña cambiada correctamente");
                                    alert(data);
                            }
                    }
            );
        }else
        {
            alert("Constraseñas nuevas no coinciden");
        }
}
function upcontrasena(id)
{
	var passvieja = document.frm_campass.txtpassantigua;
	var passnueva1 = document.getElementById("txtpassnueva1");
        var passnueva2 = document.frm_campass.txtpassnueva2;
        //alert(passnueva1.value +" "+passnueva2.value+" "+id);
        if(passnueva1.value==passnueva2.value)
        {
            $.post('campass_ope.php', 
                    {	
                        passvieja	: passvieja.value,		
                        passnueva	: passnueva1.value,
                        id              : id
                    },
                    function (data){
                            if(data=="correcto"){
                                    alert("Contraseña cambiada correctamente");
                                    document.frm_campass.txtpassantigua.value="";
                                    document.frm_campass.txtpassnueva2.value="";
                                    document.frm_campass.txtpassnueva1.value="";
                            }else{
                                    //alert("Contraseña cambiada correctamente");
                                    alert(data);
                            }
                    }
            );
        }else
        {
            alert("Constraseñas nuevas no coinciden");
        }
}
function login(){
	var usuario = document.frm_login.txtusuario;
	var clave = document.frm_login.txtclave;
	//alert(usuario.value+" "+clave.value);
	$.post('login_ope.php', 
		{	usuario		: usuario.value,		
			clave 		: clave.value			
		},
		function (data){
			if(data=="Bienvenido"){
				$(location).attr('href','usuario.php');
			}else{
				alert(data);
			}
		}
	);
}
function prg_sec(){
	var usuario = document.frm_re.txtusuario;
	//alert(usuario.value);
	$.post('preguntasec.php', 
		{	usuario	: usuario.value		
		},
		function (data){
			if(data){
				cargarformulario('recup','preguntasec.php?usuario='+usuario.value);
			}
		}
	);
}
function cargarformulario(div,formulario)
{
	$("#"+div).load(formulario);
	$( "#"+div ).hide();
	if ( $( "#"+div ).is( ":hidden" ) ) {
    $( "#"+div ).slideDown( "slow" );
  } //else {
    //$( "#contenido" ).hide();
  //}
}
function validpreg(){
	var respuesta = document.frm_re.txtrespuesta;
        var usuario = document.frm_re.txtusuario;
	//alert(usuario.value);
	$.post('validpreg_ope.php', 
		{   respuesta	: respuesta.value,
                    usuario     : usuario.value
		},
		function (data){
			if(data=="correcto"){
                            alert("Respuesta correcta, reestablesca su contraseña");
                            $(location).attr('href','restaurarpass.php');
			}else{
				alert("Respuesta incorrecta");
			}
		}
	);
}

function registro(){
        var usuario = document.frm_creausuario.txtusuario;
	var clave = document.frm_creausuario.txtclave;
        var pregunta = document.frm_creausuario.txtpregunta;
        var respuesta = document.frm_creausuario.txtrespuesta;
        var empleado= document.frm_creausuario.txtPersonaID;
	//alert(pregunta.value+" "+respuesta.value+" "+empleado.value);
	$.post('usuario_registrar_ope.php', 
		{	usuario		: usuario.value,		
			clave 		: clave.value,
                        pregunta        : pregunta.value,
                        respuesta       : respuesta.value,
                        empleado        : empleado.value
		},
		function (data){
			if(data=="SU REGISTRO FUE REALIZADO CORRECTAMENTE"){
				$(location).attr('href','usuario.php');
			}else{
				alert(data);
			}
		}
	);
}

function registromenu(){
        var nombre = document.frm_registromenu.txtnombre;
	var descripcion = document.frm_registromenu.txtdescripcion;
        var precio = document.frm_registromenu.txtpre;
        var categoria = document.frm_registromenu.txtCategoriaID;
        alert(nombre.value);
	//alert(pregunta.value+" "+respuesta.value+" "+empleado.value);
	$.post('menu_registrar_ope.php', 
		{	nombre		: nombre.value,		
			descripcion 	: descripcion.value,
                        precio          : precio.value,
                        categoria       : categoria.value      
		},
		function (data){
			if(data=="SU REGISTRO FUE REALIZADO CORRECTAMENTE"){
				$(location).attr('href','usuario.php');
			}else{
				alert(data);
			}
		}
	);
}

function eliminarusuario(usuario){
        //var usuario = document.frm_eliminarusuario.usuario;
        alert(usuario);
	//alert(pregunta.value+" "+respuesta.value+" "+empleado.value);
	$.post('usuario_eliminar_ope.php', 
		{	usuario		: usuario	     
		},
		function (data){
			if(data=="correcto"){
                            alert('Su registro se elimino correctamente');
				$(location).attr('href','usuario.php');
			}else{
				alert(data);
                                
			}
		}
	);
}

function reg_caja(){
        var caja = document.frm_caja.txtcajanumero;
	//alert(caja.value);
	$.post('reg_caja_ope.php', 
		{	caja		: caja.value	     
		},
		function (data){
			if(data=="correcto"){
                            alert('Su registro fue realizado correctamente');
				$(location).attr('href','usuario.php');
			}else{
                            alert('Error la Caja ya se encuentra registrada');
                             document.frm_caja.txtcajanumero.value="";
			}
		}
	);
}
function reg_mesa(){
        var zona = document.frm_mesa.cbzona;
        var mesanumero=document.frm_mesa.txtmesanumero;
        var mesacapacidad=document.frm_mesa.txtmesacapacidad;
     //alert(zona.value);
       // alert(mesanumero.value);
	//alert(caja.value);
	$.post('reg_mesa_ope.php', 
		{	zona		: zona.value,
                    mesanumero          : mesanumero.value,
                    mesacapacidad       : mesacapacidad.value
                    
		},
		function (data){
			if(data=="correcto"){
                            alert('Su registro fue realizado correctamente');
				$(location).attr('href','usuario.php');
			}else{
                            alert(data);
                             //document.frm_caja.txtcajanumero.value="";
			}
		}
	);
}
function reg_menudia(){
        var menudiafecha = document.frm_menudia.txtmenudiafecha;
        var menudiacantidad=document.frm_menudia.txtmenudiacantidad;
        var menudiacomandaid=document.frm_menudia.txtmenudiacomandaID;
   
	$.post('reg_menudia_ope.php', 
		{	menudiafecha		: menudiafecha.value,
                        menudiacantidad         : menudiacantidad.value,
                        menudiacomandaid        : menudiacomandaid.value
                    
		},
		function (data){
			if(data=="correcto"){
                            alert('Su registro fue realizado correctamente');
				$(location).attr('href','usuario.php');
			}else{
                            alert(data);
                             //document.frm_caja.txtcajanumero.value="";
			}
		}
	);
}
function apertura_caja(){
        var aperturacaja = document.frm_aperturacaja.cbcaja;
        var aperturamovimiento=document.frm_aperturacaja.txtaperturamovimiento;
        var aperturafecha=document.frm_aperturacaja.txtaperturafecha;
        var aperturamontoinicial=document.frm_aperturacaja.txtmontoinicial;
       // alert(aperturamontoinicial.value);
	$.post('apertura_caja_ope.php', 
		{	aperturacaja		: aperturacaja.value,
                        aperturamovimiento      : aperturamovimiento.value,
                        aperturafecha           : aperturafecha.value,
                        aperturamontoinicial    : aperturamontoinicial.value
                    
		},
		function (data){
			if(data=="correcto"){
                            alert('Su apertura de caja fue realizado correctamente');
				$(location).attr('href','usuario.php');
			}else{
                            alert(data);
                            //document.frm_aperturacaja.txtmontoinicial.value=data;
                             //document.frm_caja.txtcajanumero.value="";
			}
		}
	);
}
function cierre_caja(){
        var cierrecaja = document.frm_cierrecaja.cbcaja;
        var cierremovimiento=document.frm_cierrecaja.txtcierremovimiento;
        var cierrefecha=document.frm_cierrecaja.txtcierrefecha;
        var cierremontoinicial=document.frm_cierrecaja.txtcierremontoinicial;
        var cierremontorecaudado=document.frm_cierrecaja.txtcierremontorecaudado;
        var cierremontoganancia=document.frm_cierrecaja.txtcierremontoganancia;
       // alert(aperturamontoinicial.value);
	$.post('cierre_caja_ope.php', 
		{	cierrecaja		: cierrecaja.value,
                        cierremovimiento        : cierremovimiento.value,
                        cierrefecha             : cierrefecha.value,
                        cierremontoinicial      : cierremontoinicial.value,
                        cierremontorecaudado    : cierremontorecaudado.value,
                        cierremontoganancia    : cierremontoganancia.value 
		},
		function (data){
			if(data=="correcto"){
                            alert('Su cierre de caja fue realizado correctamente');
				$(location).attr('href','usuario.php');
			}else{
                            alert(data);
                            //document.frm_aperturacaja.txtmontoinicial.value=data;
                             //document.frm_caja.txtcajanumero.value="";
			}
		}
	);
}