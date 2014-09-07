<?php
  //conectar con la base de datos sqlite
  function conectDB() {
    try {
      $db = new PDO("sqlite:../BBDD/MERCADOS.sqlite");
      return($db);
    }
    catch (PDOException $e) {
      print "<p>Error: Fallo al conectar con la base de datos</p>\n";
      exit();
    }
  }
  //cargamos variables del formulario para guardar
  $db = conectDB();
  $tipo = $_GET['tipo'];
  $nombre = $_GET['nombre'];
  $variedad = $_GET['variedad'];
  $precio = $_GET['precio'];
  $oferta = $_GET['oferta'];
  $mercado = $_GET['mercado'];
  $ubicacion = $_GET['ubicacion'];
  $link = $_GET['link'];
  $telefono = $_GET['telefono'];
  
//guardamos la informacion
  $query = "INSERT INTO PRODUCTOS VALUES('$nombre','$tipo','$precio','$oferta','$link','$variedad','$mercado','$telefono' ,'$ubicacion')";
  if ($db -> query($query)) {
    	print "Su producto se ha registrado exitosamente.   ";
?>
	<a href="../registro.html" alt="link volver">VOLVER</a> 
<?php
  }
  else {
    	print "Error. no se ha podido registrar el producto.   ";
?>
	<a href="../registro.html" alt="link volver">VOLVER</a> 
<?php
  }
  
  $db = null;

?>
