


function muestraOfertas(){
  var xmlhttp; 
  
  if (window.XMLHttpRequest){
    xmlhttp=new XMLHttpRequest();
  } else {
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("oferta").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","./php/ofertas.php",true);
  xmlhttp.send();
}
