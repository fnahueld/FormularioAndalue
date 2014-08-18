function castLogin()
{
	if($("#txtUser").val() == "")
	{
		if($("#txtPass").val() == "")
		{
			$("#txtErrorUser").text("Debe ingresar su nombre de usuario");
			$("#txtErrorUser").css("display", "block");
			$("#txtErrorUser").focus();
			
			$("#txtErrorPass").text("Debe ingresar una contraseña");
			$("#txtErrorPass").css("display", "block");
			$("#txtErrorPass").focus();
		}
		else
		{
			$("#txtErrorUser").text("Debe ingresar su nombre de usuario");
			$("#txtErrorUser").css("display", "block");
			$("#txtErrorUser").focus();
		}
	}
	else if($("#txtPass").val() == "")
	{
		$("#txtErrorPass").text("Debe ingresar una contraseña");
		$("#txtErrorPass").css("display", "block");
		$("#txtErrorPass").focus();
	}
	else if($("#txtUser").val() != "")
	{
		if (/^[0-9a-z_\-\.]+@[0-9a-z\-\.]+\.[a-z]{2,4}$/i.test($("#txtUser").val()))
		{
			autenticar();			   
		} 
		else
		{
			$("#txtErrorUser").css("display", "block");
			$("#txtErrorUser").text("El formato del mail debe ser (micorreo@midominio.xx)");
		}
	}
}

function castLoginBorraError()
{
	$("#txtErrorUser").val("");
	$("#txtErrorUser").css("display", "none");
	
	$("#txtErrorPass").val("");
	$("#txtErrorPass").css("display", "none");

}

function autenticar()
{
	
	$.ajax(
	{
  		url			: './Bin/BLL/AutenticacionBLL.php',
  		async		: false,
  		type		: 'post',
  		dataType 	: "json",
  		data		: {metodo : '0', usuario : $("#txtUser").val(), contrasena : $("#txtPass").val()},
  		success: function(IniciarSession)
  		{
  			if(IniciarSession != "")
  			{
  				if(IniciarSession[0] == "Usuario Autenticado")
  				{
  					$("#mensajeModalPopup").empty();
  					Mensaje = '<p>'+IniciarSession[0]+' '+IniciarSession[1]+' '+IniciarSession[2]+' '+IniciarSession[3]+'</p>';
  					$("#mensajeModalPopup").append(Mensaje);
  					$("#mensajeModalPopup").dialog({ title: "Andalué", modal: true, show: "slow", width: 300, buttons: {"Aceptar": function() {}}});
  				}
  				else
  				{
  					$("#mensajeModalPopup").empty();
	  				Mensaje = '<p>'+IniciarSession[0]+' '+IniciarSession[1]+' '+IniciarSession[2]+' '+IniciarSession[3]+'</p>';
	  				$("#mensajeModalPopup").append(Mensaje);
	  				$("#mensajeModalPopup").dialog({ title: "Andalué", modal: true, show: "slow", width: 300, buttons: {"Cerrar": function() {$( this ).dialog( "close" );}}}); 
				}
			}
			else
			{
				$("#mensajeModalPopup").empty();
	  			Mensaje = '<p>Hay problemas con la conexion. Intentelo mas tarde.</p>';
	  			$("#mensajeModalPopup").append(Mensaje);
	  			$("#mensajeModalPopup").dialog({ title: "Andalué", modal: true, show: "slow", width: 300, buttons: {"Cerrar": function() {$( this ).dialog( "close" );}}}); 
			}
  		}
	});
	
}