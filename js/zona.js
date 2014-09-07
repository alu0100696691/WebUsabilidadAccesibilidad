//BUSCAMOS LA ZONA SELECCIONADA EN LA BASE DE DATOS UTILIZANDO EL FICHERO ZONA.PHP
function buscarZona(prod){

  var xmlhttp; 

	if (prod=='') {
    		document.getElementById("txtHint").innerHTML="";	
    		return;	
  	}
  	
  if (window.XMLHttpRequest){
    xmlhttp=new XMLHttpRequest();
  } else {
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {      
      $('#resultado').html(xmlhttp.responseText);	     	
    }
  } 
  xmlhttp.open("GET","./php/zona.php?lugar="+prod,true);
  xmlhttp.send(); 
}
