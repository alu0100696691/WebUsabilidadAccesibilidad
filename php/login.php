<html>

<?PHP

// Iniciar sesión
   session_start();

// Si se ha enviado el formulario
   $usuario = $_REQUEST['usuario'];
   $clave = $_REQUEST['clave'];
	

   if (isset($usuario) && isset($clave))
   {

   // Comprobar que el usuario está autorizado a entrar

	
	try
	{
	$db = new PDO("sqlite:../BBDD/MERCADOS.sqlite");	
	} catch (PDOException $e) {
	echo $e->getMessage();
	exit();
	}
	
	$consulta = $db->query("select usuario, clave from usuarios where usuario = '$usuario' and clave = '$clave'");
	$row = $consulta->fetch(PDO::FETCH_ASSOC);	
	//$filas = count ($row);
	
	if (empty($row) == false)
	        {
		$usuario_valido = $usuario;
		// Con register_globals On
		// session_register ("usuario_valido");
		// Con register_globals Off
		$_SESSION["usuario_valido"] = $usuario_valido;	
		
	}
	header("Location: ./guardarProducto.php");	 //donde se introduce el producto a guardar
 }

?>

</html>
