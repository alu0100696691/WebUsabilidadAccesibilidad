var READY_STATE_COMPLETE = 4;
var peticion_http;

function inicializa_xhr() {
  if (window.XMLHttpRequest) {
    return new XMLHttpRequest();
  }
  else if (window.ActiveXObject) {
    return new ActiveXObject("Microsoft.XMLHTTP");
  }
}

//ENVIAR LOS DATOS AL FICHERO CONTACTO.PHP PARA PROCESAR EL GUARDADO
function cargaContenido(url, metodo, funcion) {
  peticion_http = inicializa_xhr();  
  var Nombre = document.getElementById("Nombre").value;  
  var Email = document.getElementById("Email").value;
  var Consulta = document.getElementById("Consulta").value;
  var query_string = "?Nombre=" + encodeURIComponent(Nombre) + "&Email=" + encodeURIComponent(Email) + "&Consulta=" + encodeURIComponent(Consulta) + "&nocache=" + Math.random();
  if (peticion_http) {
    peticion_http.onreadystatechange = funcion;
    peticion_http.open(metodo, url + query_string, true);
    peticion_http.send(null);
  } 
} 



//MOSTRAR RESULTADO DE LA OPERACION DE GUARDADO EN LA BASE DE DATOS LA CONSULTA
function muestraContenido() {
  if (peticion_http.readyState == READY_STATE_COMPLETE) {
    if (peticion_http.status == 200) {
      if (/.*Error.*No.*conectarse/.test(peticion_http.responseText) || /.*Error.*No.*insertar/.test(peticion_http.responseText)) {
        document.getElementById("resp_servidor").innerHTML = peticion_http.responseText;
      }
      else {
        alert(peticion_http.responseText);
        document.forms["form_contacto"].submit();
      }
    }
  }
}

//SE GUARDARA LA CONSULTA EN LA BASE DE DATOS DEL SITIO
function guardarConsulta() {
  cargaContenido('http://banot.etsii.ull.es/alu4457/usabilidad/proyecto/php/contacto.php', 'GET', muestraContenido);
}

//ESTA VACIO EL CAMPO DEL FORMULARIO?
function vacio(campo_texto) {
  valor = document.getElementsByName(campo_texto)[0].value;
  if (valor == null || valor.length == 0 || /^\s+$/.test(valor))
    return true;
  else
    return false;
}

//dirección de correo electrónico válida
function comprobar_email(valor) {
  elemento = document.getElementsByName(valor)[0].value;
  var email_regexp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (!email_regexp.test(elemento))
    return false;
  else
    return true;
}


//EVITAR QUE EL USUARIO INTRODUSCA MAS DE 20 CARACTERES EN EL NOMBRE
function comprobar_maxcaracteres(nombre, maxchar) {
  elemento = document.getElementsByName(nombre)[0].value.length;
  if (elemento > maxchar)
    return false;
  else
    return true;
}


//COMPROBAR QUE LOS DATOS DEL FORMULARIO ESTAN CORRECTAMENTE 
function validarFormulario() {  
  if (vacio('Nombre')) {
    document.getElementById("avisos").innerHTML = "<p> Error: Debe introducir su nombre de usuario</p>";
    return false;
  }
  else if (!comprobar_maxcaracteres('Nombre', 20)) {
    document.getElementById("avisos").innerHTML = "<p>Error: Debe introducir un nombre de 20 caracteres como máximo</p>";
    return false;
  }
  else if (vacio('Email')) {
    document.getElementById("avisos").innerHTML = "<p>Error: Debe introducir su email</p>";
    return false;
  }
  else if (!comprobar_email('Email')) {
    document.getElementById("avisos").innerHTML = "<p>Error: Introduzca una dirección de correo electrónico válida</p>";
    return false;
  }
  else if (vacio('Consulta')) {
    document.getElementById("avisos").innerHTML = "<p>Error: Introduzca su consulta por favor</p>";
    return false;
  }
  document.getElementById("avisos").innerHTML = "";
  return true;
}


//SE EJECUTA CUANDO EL USUARIO ENVIA UN FORMULARIO EN PAGINA DE CONTACTO.HTML
function validarContacto() {
  if (validarFormulario()) {
    guardarConsulta();
  }
}
