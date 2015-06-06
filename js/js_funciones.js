function reg_per(){
	var pnombre = document.frm_regpersona.txtpnombre;
	var snombre = document.frm_regpersona.txtsnombre;
        var apaterno = document.frm_regpersona.txtapaterno;
        var amaterno = document.frm_regpersona.txtamaterno;
        var dni = document.frm_regpersona.txtdni;
	alert(pnombre.value+" "+snombre.value+" "+apaterno.value+" "+amaterno.value+" "+dni.value);
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
	$( "#contenido" ).hide();
	if ( $( "#contenido" ).is( ":hidden" ) ) {
    $( "#contenido" ).slideDown( "slow" );
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
        var empleado= document.frm_creausuario.productoss;
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

