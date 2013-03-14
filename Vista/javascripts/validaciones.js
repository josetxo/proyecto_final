function validar_login(dni,pass)
{
	alert("ENTRA")
	if(dni != "")
	{
		var resp = validarDNI(dni);

		if(resp)
		{
			if(pass != "")
			{
				fLogin.submit();
			}
			else
			{
				alert("ERROR. Contraseña vacia");
			}
		}
	}
	else
	{
		alert("ERROR. DNI vacio");
	}
}


function validarDni(dni)
{
	try
	{
		var numero;
		var let;
		var letra;

		//11111111A

		var expresion_regular_dni = /^\d{8}[a-zA-Z]$/;


		if(expresion_regular_dni.test (dni) == true)
		{
			numero = dni.substr(0,dni.length-1);
			let = dni.substr(dni.length-1,1);
			numero = numero % 23;
			letra='TRWAGMYFPDXBNJZSQVHLCKET ';
			letra=letra.substring(numero,numero+1);

			if (letra!=let) 
			{
				throw('Dni erroneo, la letra del NIF no se corresponde');
				return false;
			}
			else
				{
					return true;
				}
		}
		else
			{
				throw('Dni erroneo, formato no valido');
				return false;
			}
	}
	catch(e)
	{
		alert(e.message);
	}


}

function validar_borrar_modificar(dni)
{
	if()

	if (validarDni(dni))
	{
		
		if(isset($_SESSION))
		fModificarBorrar.submit;
	}
}

function validar_borrar_modificar_ausencia(id_ausencia)
{
	try 
	{
		if(id_ausencia == "" && isNaN(id_ausencia))
		{
			throw("Error. Ausencia vacia o id numerica mal introducida");
		}
		else
			{
				fBorrarModificarAusencia.submit;
			}
	}
	catch(e)
	{
		alert(e.message);
	}
}
















function validarModificarAlumno(nombre,apellido1,curso)
{
	if(nombre != "")
	{
		if(apellido1 != "")
		{
			if(curso != "")
			{
				fMAlumno.submit();
			}
			else
			{
				alert("ERROR. Curso vacio");
			}
		}
		else
		{
			alert("ERROR. Apellido vacia");
		}
	}
	else
	{
		alert("ERROR. Nombre vacio");
	}
}




function validarEliminarAlumno()
{
	var dni = fEAlumno.DNI.value;
	alert(dni);
	var sw = 0;
	dni = dni.toUpperCase();
	dniDev = dni.toUpperCase();
	dni = dni.replace('X','0');
	numero = dni.substr(0,dni.length-1);
	let = dni.substr(dni.length-1,1);
	letra=’TRWAGMYFPDXBNJZSQVHLCKET’;
	for(i=0;i<letra.length;i++)
	{
		if(letra.charAt(i)==let)
		{
			document.getElementById(1).value = dniDev;
			alert("DNI correcto");
			sw = 1;
			submit();
		}
	}
	
	if(sw==0)
	{
		alert("ERROR. DNI no valido");
	}
}


function validarVacio(dato)
{
	try
	{
		if(dato == "" || dato == null)
		{

		}
	}
	catch()
	{

	}



}