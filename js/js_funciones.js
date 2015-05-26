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

