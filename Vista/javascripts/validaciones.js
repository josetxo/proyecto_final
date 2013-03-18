function validar_login(dni,pass)
{
	if(validarVacio(dni))
	{
		if(validarVacio(pass))
		{
			if(validarDni(dni))
			{
				if(validarCaracteres("mayor", "5", pass))
				{
					fLogin.submit();
				}
			}	
		}	
	}
}


function validar_borrar_modificar(dni,dato)
{
	if(validarVacio(dni))
	{
		if (validarDni(dni))
		{
			if(dato == "borrar")
			{
				fBorrar.submit;
			}
			else
				{
					if(dato == "modificar")
					{
						fModificar.submit;
					}
				}		
		}
	}
}


function validar_borrar_modificar_ausencia(id_ausencia)
{
	if(validarVacio(id_ausencia))
	{
		if (validarNumerico(id_ausencia))
		{
			if(dato == "borrar")
			{
				fBorrarAusencia.submit;
			}
			else
				{
					if(dato == "modificar")
					{
						fModificarAusencia.submit;
					}
				}		
		}
	}
}

//Falta validar Fecha de Calendario escogida
function validar_insertar_modificar2_ausencia(tipo_ausencia, dato)
{
	if(validarComboBox(tipo_ausencia))
	{
		if(dato== "insertar")
		{
			fInsertAusencia.submit;
		}
		else
			{
				fModificar2Ausencia.submit;
			}
	}
}



function validar_insertar_modificar2(nombre, apellido1, apellido2, telefono, id_perfil, id_centro, dni, pass, dato)
{
	if(validarVacio(nombre))
	{
		if(validarVacio(apellido1))
		{
			if(validarVacio(apellido2))
			{
				if(validarVacio(telefono))
				{
					if(validarVacio(dni))
					{
						if(validarVacio(pass))
						{
							if(validarComboBox(id_perfil))
							{
								if(validarComboBox(id_centro))
								{
									if(validarNumerico(telefono))
									{
										if(validarCaracteres("igual","9", telefono))
										{
											if(validarDni(dni))
											{
												if(validarCaracteres("mayor", "5", pass))
												{
													if(dato == "insertar")
													{
														fInsert.submit;
													}
													else
														{
															fModificar2.submit;
														}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
}



function validarComboBox(combo)
{
	try
	{
		if(combo == "no")
		{
			throw "Tienes que seleccionar una opcion de las listas desplegables o Combo-Box";
		}
		return true;
	}
	catch(e)
	{
		alert(e.toString());
		return false;
	}
}


function validarNumerico(dato)
{
	try
	{
		if(isNaN(dato))
		{
			throw "Has insertado caracteres no-numericos en un campo de texto numerico";
		}
		return true;
	}
	catch(e)
	{
		alert(e.toString());
		return false;
	}
}


function validarCaracteres(accion,caracteres,palabra)
{
	try
	{
		if(accion=="mayor")
		{
			if(palabra.length < caracteres)
			{
				throw "No has respetado el numero de caracteres obligatorio en algun campo de texto: \n\n -Contraseña: Obligatorio 5 caracteres minimo.\n -Telefono: Obligatorio 9 caracteres.";
			}
			return true;
		}
		else
			{		
				if(palabra.length != caracteres)
				{
					throw "No has respetado el numero de caracteres obligatorio en algun campo de texto: \n\n -Contraseña: Obligatorio 5 caracteres minimo.\n -Telefono: Obligatorio 9 caracteres.";
				}
				return true;
			}
	}
	catch(e)
	{
		alert(e.toString());
		return false;
	}		
}


function validarVacio(dato)
{
	try
	{
		if(dato == "" || dato == null)
		{
			throw "Has dejado vacio algun campo de texto obligatorio";
		}
		return true;
	}
	catch(e)
	{
		alert(e.toString());
		return false;
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
				throw "Dni erroneo, la letra del NIF no se corresponde";
			}
			else
				{
					return true;
				}
		}
		else
			{
				throw "Dni erroneo, formato no valido";
			}
	}
	catch(e)
	{
		alert(e.toString());
		return false;
	}

}



  function validar()
        {
        	alert("hola");

            var mensaje= document.getElementById("texto").innerHTML;

            var array = mensaje.split(" ");



            var mes1;

            switch(array[1])
            {

                case 'January,':

                     mes1="01";

                break;

                case 'February,':

                     mes1="02";

                break;

                case 'March,':

                     mes1="03";

                break;

                case 'April,':

                     mes1="04";

                break;

                case 'May,':

                     mes1="05";

                break;

                case 'June,':

                     mes1="06";

                break;

                case 'July,':

                     mes1="07";

                break;

                case 'August,':

                     mes1="08";

                break;

                case 'September,':

                     mes1="09";

                break;

                case 'October,':

                     mes1="10";

                break;

                case 'November,':

                     mes1="11";

                break;

                case 'December,':

                     mes1="12";

                break;
            }


            var mes2;

            switch(array[5])
            {

                case 'January,':

                     mes2="01";

                break;

                case 'February,':

                     mes2="02";

                break;

                case 'March,':

                     mes2="03";

                break;

                case 'April,':

                     mes2="04";

                break;

                case 'May,':

                     mes2="05";

                break;

                case 'June,':

                     mes2="06";

                break;

                case 'July,':

                     mes2="07";

                break;

                case 'August,':

                     mes2="08";

                break;

                case 'September,':

                     mes2="09";

                break;

                case 'October,':

                     mes2="10";

                break;

                case 'November,':

                     mes2="11";

                break;

                case 'December,':

                     mes2="12";

                break;
            }

            var fecha_inicio = (array[2]+"-"+mes1+"-"+array[0]);
            var fecha_final = (array[6]+"-"+mes2+"-"+array[4]);



            document.getElementById("fecha_ini").value = fecha_inicio;
            document.getElementById("fecha_fin").value = fecha_final;
       
        }
    }