<?php

  function conectDB() {
    try {
      $db = new PDO("sqlite:../BBDD/MERCADOS.sqlite");
      return($db);
    }
    catch (PDOException $e) {
      print "<p>Error: Fallo al conectar con la base de datos.</p>\n";
      exit();
    }
  }

  $db = conectDB(); 
  
  $Nombre = $_GET['Nombre'];
  $Email = $_GET['Email'];
  $Consulta = $_GET['Consulta'];
  
  $query = "INSERT INTO CONTACTO VALUES ('$Nombre', '$Email', '$Consulta')";
  if ($db -> query($query)) {
    print "Su consulta se ha enviado correctamente, en breve le responderemos.";
  }
  else {
    print "Error. El registro en la base de datos no se ha podido realizar. Por favor, contacta con nosotros.";
  }

  $db = null;
?>
