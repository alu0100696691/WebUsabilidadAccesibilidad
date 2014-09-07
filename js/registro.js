
 
function registrar() {
	header("Location: ./registro.php");
}

//campo vacio?
function vacio(campo_texto) {
  valor = document.getElementsByName(campo_texto)[0].value;
  if (valor == null || valor.length == 0 || /^\s+$/.test(valor))
    return true;
  else
    return false;
}

//maximo de caracteres
function comprobar_maxcaracteres(nombre, maxchar) {
  elemento = document.getElementsByName(nombre)[0].value.length;
  if (elemento > maxchar)
    return false;
  else
    return true;
}

//comprobar desplegable
function comprobar_desplegable(campo) {
  valor = document.getElementsByName(campo)[0].value.length;
  if (valor == 1)
    return true;
  else
    return false;
}


//funciones para validacion de Formulario
function validacionFormulario() {
  if (comprobar_desplegable('tipo')) {
    document.getElementById("avisos").innerHTML = "<p>ERROR: Debe elegir el tipo del producto</p>";
    return false;
  }
  else if (comprobar_desplegable('nombre')) {
    document.getElementById("avisos").innerHTML = "<p>ERROR: Debe elegir un producto de la lista</p>";
    return false;
  }
  else if (vacio('variedad')) {
    document.getElementById("avisos").innerHTML = "<p>ERROR: Debe rellenar el campo variedad</p>";
    return false;
  }
  else if (vacio('mercado')) {
    document.getElementById("avisos").innerHTML = "<p>ERROR: Debe rellenar el campo mercado</p>";
    return false;
  }
  else if (!comprobar_maxcaracteres('mercado', 18)) {
    document.getElementById("avisos").innerHTML = "<p>ERROR: La longitud del campo mercado no puede exceder los 18 caracteres</p>";
    return false;
  }
  else if (vacio('ubicacion')) {
    document.getElementById("avisos").innerHTML = "<p>ERROR: Debe rellenar el campo ubicacion</p>";
    return false;
  }
  else if (!comprobar_maxcaracteres('ubicacion', 18)) {
    document.getElementById("avisos").innerHTML = "<p>ERROR: La longitud del campo ubicacion no puede exceder los 18 caracteres</p>";
    return false;
  }
  else if (vacio('link')){
    document.getElementById("avisos").innerHTML = "<p>ERROR: Debe rellenar el campo Link</p>";
    return false;
  } 
  else if  (vacio('telefono')) {
    document.getElementById("avisos").innerHTML = "<p>ERROR: Debe rellenar el campo telefono</p>";
	return false;
  }
	if (document.getElementById("avisos").innerHTML == "") {
		registrar();
	}	
	else {
		document.getElementById("avisos").innerHTML = "";
		return true;
	}
}
  
	  
  
