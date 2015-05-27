function login(){
	var usuario = document.frm_login.txtusuario;
	var clave = document.frm_login.txtclave;
	//alert(usuario.value);
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
	$.post('restaurar.php', 
		{	usuario	: usuario.value		
		},
		function (data){
			if(data){
				cargarformulario('recup','restaurar.php?usuario='+usuario.value);
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

