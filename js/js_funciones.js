function up_detpp(a){
    //alert('a');
    var cant=document.frm_nca.txtncantidad;
    //alert('a');
    var id=document.frm_nca.txtncid;
    //alert(cant+' '+id);
    if(cant.value != 0 && cant.value !== ""){
    $.post('up_detpp.php', 
		{	id	: id.value,
                        cant    : cant.value,
                        pedido  : a
		},
		function (data){
			if(data=="correcto"){
                            alert('Modificado');
                                cargarformulario('detalle','det_pedidor.php?pedido='+a);
			}else{
				alert(data);
			}
		}
	);}
        else{
            alert('Ingrese cantidad válida');
        }
}
function elim_detpp(a,b){
    //alert(a);
    $.post('elim_detpp.php', 
		{	id	: a,
                        pedido  : b
		},
		function (data){
			if(data=="correcto"){
                                cargarformulario('detalle','det_pedidor.php?pedido='+b);
			}else{
				alert(data);
			}
		}
	);
}
function agregar_detallep(a){
	var id = document.frm_regpedido.txtcomandaid;
        var cant = document.frm_regpedido.txtcantidad;
        var pre = document.frm_regpedido.txtprecio;
        var tot = document.frm_regpedido.txttotal;
        var nom = document.frm_regpedido.txtcomanda;
        if(id.value !== ""){
        if(cant.value != 0 && cant.value !== ""){
	$.post('agre_detallep.php', 
		{	id	: id.value,		
			cant    : cant.value,
                        pre     : pre.value,
                        tot     : tot.value,
                        nom     : nom.value,
                        pedido  : a
		},
		function (data){
			if(data=="correcto"){
                                document.frm_regpedido.txtcomandaid.value="";
                                document.frm_regpedido.txtcantidad.value="1";
                                document.frm_regpedido.txtprecio.value="0";
                                document.frm_regpedido.txttotal.value="0";
                                document.frm_regpedido.txtcomanda.value="";
                                cargarformulario('detalle','det_pedidor.php?pedido='+a+'');
			}else{
				alert(data);
			}
		}
	);}
        else{
            alert ('Ingrese cantidad');
        }}
    else{
        alert('Seleccione un platillo');
    }
}
function elim_ped(a,b)
{
    $.post('elim_pedido.php', 
		{	id     : a
		},
		function (data){
			if(data=="correcto"){
                                cargarformulario('contenido','list_pedidos.php?usuario='+b);
			}else{
				alert(data);
			}
		}
	);
}
function limpiar_dt(a)
{
    $.post('limpiar_dt_ope.php', 
		{	usuario     : a
		},
		function (data){
			
		}
	);
}
function soloNumeros(e) 
{ 
    var key = window.Event ? e.which : e.keyCode 
    return ((key >= 48 && key <= 57) || (key==8))
}
function registrar_pedido(a)
{
    var mid=document.frm_regpedido.txtmesaid;
    if(mid.value !== ""){
    $.post('reg_pedido_ope.php', 
		{	mid	: mid.value,
                        emp     : a
		},
		function (data){
			if(data=="correcto"){
                            alert('Pedido Registrado');
                                cargarformulario('detalle','det_pedido.php?usuario='+a);
                                document.frm_regpedido.txtmesaid.value="";
                                document.frm_regpedido.txtmesa.value="";
			}else{
				alert(data);
			}
		}
	);}
        else{
            alert('Seleccione una mesa');
        }
}
function pascid(a)
{
    //alert(a);
    document.frm_nca.txtncid.value=a;
}
function up_detp(a){
    //alert('a');
    var cant=document.frm_nca.txtncantidad;
    //alert('a');
    var id=document.frm_nca.txtncid;
    //alert(cant+' '+id);
    if(cant.value != 0 && cant.value !== ""){
    $.post('up_detp.php', 
		{	id	: id.value,
                        cant    : cant.value,
                        usuario : a
		},
		function (data){
			if(data=="correcto"){
                            alert('Modificado');
                                cargarformulario('detalle','det_pedido.php?usuario='+a);
			}else{
				alert(data);
			}
		}
	);}
        else{
            alert('Ingrese cantidad válida');
        }
}
function elim_detp(a,b){
    //alert(a);
    $.post('elim_detp.php', 
		{	id	: a,
                        usuario : b
		},
		function (data){
			if(data=="correcto"){
                                cargarformulario('detalle','det_pedido.php?usuario='+b);
			}else{
				alert(data);
			}
		}
	);
}
function agregar_detalle(a){
	var id = document.frm_regpedido.txtcomandaid;
        var cant = document.frm_regpedido.txtcantidad;
        var pre = document.frm_regpedido.txtprecio;
        var tot = document.frm_regpedido.txttotal;
        var nom = document.frm_regpedido.txtcomanda;
	//alert('jjj');
        if(id.value !== ""){
        if(cant.value != 0 && cant.value !== ""){
	$.post('agre_detalle.php', 
		{	id	: id.value,		
			cant    : cant.value,
                        pre     : pre.value,
                        tot     : tot.value,
                        nom     : nom.value,
                        usuario : a
		},
		function (data){
			if(data=="correcto"){
				//alert("Empleado registrado correctamente");
                                document.frm_regpedido.txtcomandaid.value="";
                                document.frm_regpedido.txtcantidad.value="1";
                                document.frm_regpedido.txtprecio.value="0";
                                document.frm_regpedido.txttotal.value="0";
                                document.frm_regpedido.txtcomanda.value="";
                                cargarformulario('detalle','det_pedido.php?usuario='+a+'');
			}else{
				alert(data);
			}
		}
	);}
        else{
            alert ('Ingrese cantidad');
        }}
    else{
        alert('Seleccione un platillo');
    }
}
function caltotal()
{
    var pre=document.frm_regpedido.txtprecio.value;
    var cant=document.frm_regpedido.txtcantidad.value;
    document.frm_regpedido.txttotal.value=pre*cant;
}
function pascom(a,b,c)
{
    document.frm_regpedido.txtcomandaid.value=c;
    document.frm_regpedido.txtcomanda.value=a;
    document.frm_regpedido.txtprecio.value=b;
    var cant = document.frm_regpedido.txtcantidad.value;
    document.frm_regpedido.txttotal.value=b*cant;
}
function pasme(a,b)
{
    document.frm_regpedido.txtmesa.value=b;
    document.frm_regpedido.txtmesaid.value=a;
}
function busca_mesa(){
	var niv = document.frm_me.cbonivel;
        var zon = document.frm_me.cbozona;
        
	cargarformulario('buscamesa','bus_mesa.php?niv='+niv.value+'&zon='+zon.value);
}
function busca_comanda(){
	var nombre = document.frm_re.txtbusc;
        var cat = document.frm_re.cbocategoria;
        
	cargarformulario('buscomanda','bus_comanda.php?nombre='+nombre.value+'&cat='+cat.value);
}
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
                        document.frm_regpersona.txtdni.value="";
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
      if(passvieja.value !== "" && passnueva1.value !== "" && passnueva2.value !== ""){
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
        }}else{
        alert('Complete todos los campos');
        }
}
function upcontrasena(id)
{
	var passvieja = document.frm_campass.txtpassantigua;
	var passnueva1 = document.getElementById("txtpassnueva1");
        var passnueva2 = document.frm_campass.txtpassnueva2;
        //alert(passnueva1.value +" "+passnueva2.value+" "+id);
        if(passvieja.value !== "" && passnueva1.value !== "" && passnueva2.value !== ""){
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
        }}else{
        alert('Complete todos los campos');
        }
}
function login(){
	var usuario = document.frm_login.txtusuario;
	var clave = document.frm_login.txtclave;
	//alert(usuario.value+" "+clave.value);
        if(usuario.value !== "" && clave.value !== ""){
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
	);}else{
            alert('Complete los dos campos');
        }
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
			}
		}
	);
}
function apertura_caja(){
        var aperturacaja = document.frm_aperturacaja.cbcaja;
        var aperturamovimiento=document.frm_aperturacaja.txtaperturamovimiento;
        var aperturafecha=document.frm_aperturacaja.txtaperturafecha;
        var aperturamontoinicial=document.frm_aperturacaja.txtmontoinicial;
        var aperturadolar=document.frm_aperturacaja.txttipocambio;

       // alert(aperturamontoinicial.value);
	$.post('apertura_caja_ope.php', 
		{	aperturacaja		: aperturacaja.value,
                        aperturamovimiento      : aperturamovimiento.value,
                        aperturafecha           : aperturafecha.value,
                        aperturamontoinicial    : aperturamontoinicial.value,
                        aperturadolar           : aperturadolar.value
                    
		},
		function (data){
			if(data=="correcto"){
                            alert('Su apertura de caja fue realizado correctamente');
				$(location).attr('href','usuario.php');
			}else{
                            alert(data);
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
			}
		}
	);
}
function update_caja(){
        var cajaid = document.frm_mocaja.txtcaja;
        var cajanumero=document.frm_mocaja.txtcajanum;
      
     // alert(cajaid.value+' '+cajanumero.value);
	$.post('caja_actualizar_ope.php', 
		{	cajaid		: cajaid.value,
                        cajanumero      : cajanumero.value
		},
		function (data){
			if(data=="correcto"){
                            alert('Su actualizacion fue realizado correctamente');
				$(location).attr('href','usuario.php');
			}else{
                            alert(data);
			}
		}
	);
}
function asignacion_caja(){
        var cbcaja = document.frm_asignacion.cbcaja;
        var asignaciontrabajadorID=document.frm_asignacion.txtasignaciontrabajadorID;
      // var asignaciontrabajador=document.frm_asignacion.txtasignaciontrabajador;
        var fechainicio=document.frm_asignacion.txtfechainicio;
        var fechafin=document.frm_asignacion.txtfechafin;
        var cbcaja1=document.frm_asignacion.cbcaja1;  
      
    // alert(cbcaja.value+' '+asignaciontrabajadorID.value+' '+fechainicio.value+' '+fechafin.value+' '+cbcaja1.value);
	$.post('asignacion_caja_ope.php', 
		{	cbcaja                      : cbcaja.value,
                        asignaciontrabajadorID      : asignaciontrabajadorID.value,
                       // asignaciontrabajador        : asignaciontrabajador.value,
                        fechainicio                 : fechainicio.value,
                        fechafin                     : fechafin.value,
                        cbcaja1                     : cbcaja1.value

		},
		function (data){
			if(data=="correcto"){
                            alert('Su registro fue realizado correctamente');
				$(location).attr('href','usuario.php');
			}else{
                            alert(data);
			}
		}
	);
}


