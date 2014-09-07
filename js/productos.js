
//BUSCAMOS EL PRODUCTO SELECCIONADO EN LA BASE DE DATOS UTILIZANDO EL FICHERO PRODUCTO.PHP
function buscarProducto(prod){

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
      document.getElementById("resultado").innerHTML=xmlhttp.responseText; //mostramos el resultado de la busqueda      	
    }
  } 
  xmlhttp.open("GET","./php/producto.php?nombre="+prod,true);
  xmlhttp.send(); 
}





