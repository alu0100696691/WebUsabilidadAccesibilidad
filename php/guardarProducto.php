<?php 
	session_start(); 
	if (isset($_SESSION["usuario_valido"]))
	   {
	

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Nuevo Producto</title>
    <!-- Se incluyen las hojas de estilo de bootstrap -->
 
  	<!-- Bootstrap -->
    	<link href="../css/bootstrap.css" rel="stylesheet">
 	<link href="../css/estilo.css" rel="stylesheet"> <!--estilos propios-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
 
  <body>
	<div id="cabecera">
		<div class="container">
				<div class="row" role="banner">			
		      			<div class="header col-xs-12 col-sm-12 col-md-12 ">   <!--header similar en distintos dispositivos  -->
		    				<img src="../images/portada.png" alt="Imagen de portada" role="img"/>
					</div>  <!--imagen-->
				</div>
		
	
				<div id="menu" role="navegation" aria-expanded="false">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">  <!--menu similar en distintos dispositivos  -->
							<div class="span12 centered-pills">										
									<ul class="nav nav-pills center-pills">
								    		<li>
								    			<a href="../index.html" tabindex="1">Inicio</a>
								    		</li>
								    		<li><a href="../productos.html" tabindex="2">Producto</a></li>
								    		<li><a href="../ofertas.html" tabindex="3">Ofertas</a></li>
										<li class="active"><a href="../registro.html" tabindex="4">Nuevo</a></li>
										<li><a href="../contacto.html" tabindex="5">Contacto</a></li>
										<li><a href="./ayuda.html" tabindex="6" role="button">Ayuda</a></li>
									</ul>
							</div>
						</div>								
					</div>  <!--row-->
			    	
				</div>  <!--menu-->
		</div>  <!--container-->
	</div>  <!--cabecera-->
	
	<div id="cuerpo" role="main">
		<div class="container">				
				<div class="row">			
		      			<div class="col-xs-12 col-sm-12 col-md-12">						
							<form action="./registro.php" method="get" id="registro_usuario" onsubmit="validacionFormulario(); return false;" role="form">   <!-- validarRegistro() -->
								<div class="form-group">							
									<label for="tipo" >Tipo</label>
									<select name="tipo" id="tipo" role="listbox" tabindex="7" >
										<option value="1">Seleccione el tipo</option>
										<option value="fruta" role="option">Fruta</option>
										<option value="verdura" role="option">Verdura</option>
										<option value="hortaliza" role="option">Hortaliza</option>
									</select>
								</div>
					
								<div class="form-group">
								<label for="nombre" >Nombre del producto</label>
									<select name="nombre" id="nombre" role="listbox" tabindex="8">
										<option value="1">Selecciona producto</option>
										<option value="fresa" role="option">Fresa</option>
										<option value="tomate" role="option">Tomate</option>
										<option value="coco" role="option">Coco</option>
										<option value="manzana" role="option">Manzana</option>
										<option value="lechuga" role="option">Lechuga</option>
										<option value="papa" role="option">Patata</option>
										<option value="berro" role="option">Berros</option>
										<option value="calabaza" role="option">Calabazas</option>
										<option value="sandia" role="option">Sandia</option>
										<option value="zanahoria" role="option">Zanahoria</option>
										<option value="pera" role="option">Pera</option>	
									</select>
								</div>
							
								<div class="form-group">		
									<label for="variedad" >Variedad</label>
									<input type="text" id="variedad" name="variedad" value="" aria-required="true" tabindex="9"/>
								</div>

								<div class="form-group">	
									<label for="precio" >Precio</label>
									<input type="text" id="precio" name="precio" value="" aria-required="true" tabindex="10"/> €/Kg 
								</div>

								<div class="form-group">
									<label for="oferta" role="radiogroup" >Producto en oferta</label>
									<input type="radio" name="oferta" value="1" checked="checked" role="radio" aria-checked="true" tabindex="11" /><label>Sí</label>
									<input type="radio" name="oferta" value="0" role="radio" aria-checked="false" tabindex="11"/><label>No</label ><br/><br/>
								</div>

								<div class="form-group">
									<label for="mercado" >Nombre del Mercado</label>
									<input type="text" id="mercado" name="mercado" value="" aria-required="true" tabindex="13"/>
								</div>					
							
								<div class="form-group">
									<label for="ubicacion" >Ubicacion del Mercado</label>
									<input type="text" size="18" id="ubicacion" name="ubicacion" value="" aria-required="true" tabindex="14" />
								</div>					
							
								<div class="form-group">
									<label for="link" >Link a la imagen</label>
									<input type="text" id="link" name="link" value="" aria-required="true" tabindex="15"/>
								</div>

								<div class="form-group">
									<label for="telefono" >Teléfono</label>
									<input type="text" id="telefono" name="telefono" value="" aria-required="true" tabindex="16" />
								</div>							

								<div class="form-group">
									<input type="submit" value="Enviar" class="btn btn-primary btn-lg" tabindex="17"/>
								</div>		
							</form>
					</div>
				</div>
				<div class="row">			
		      			<div class="col-xs-12 col-sm-12 col-md-12 ">
						<div id="avisos" class="center"><noscript>Error: Es necesario tener activo javascript para realizar busquedas.</noscript></div><br/>
					</div>
				</div>
			</div>
		</div> <!--container-->
	</div>  <!--cuerpo-->
	

	<div id="pie" role="contentinfo">
		<div class="container">   
				<div class="row"> 
					<div class="col-xs-12 col-sm-12 col-md-12">  <!--footer similar en distintos dispositivos  -->
						<p>Copyright &copy; 2014 Mercazona.	
						<a  title="facebook" href="https://www.facebook.com/MercaZonaUyA" role="link"><img src="../images/facebook.png"/></a> 
						<a  title="twitter" href="https://twitter.com/MercaZona" role="link"><img src="../images/twitter.png"/></a>
						<a  title="google" href="https://plus.google.com/u/0/114564052768108318707/posts?hl=es" role="link"><img src="../images/google.png"/></a>
						<a  title="rss" href="https://www.rss.com/" role="link"><img src="../images/rss.png"/></a>
						<a href="http://validator.w3.org/check?uri=referer" role="link"> <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional"/></a>
						<a href="http://jigsaw.w3.org/css-validator/check/referer" role="link"> <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="CSS Valido!"/></a> </p>
					</div>
				</div>
		</div>

	</div>  <!--pie-->


	

	<!-- JavaScript se situa al final del documento para que la página cargue mas rápido -->
    	<!-- Incluir la librería de jQuery -->
    	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
 
    	<!--  Incorporar los plug-ins de JavaScript de Bootstrap -->
    	<script src="../js/bootstrap.js"></script>
	<script src="../js/registro.js" type="text/javascript"></script>

<?PHP
 session_destroy ();
   }

// Intento de entrada fallido
   else 
   { ?>
	<html>
  		<head>
    			<title>Nuevo Producto</title>
    			<link href="../css/bootstrap.css" rel="stylesheet">
 			<link href="../css/estilo.css" rel="stylesheet"> <!--estilos propios-->
  		</head> 
  	<body>
	<div class="container">			
		<div class="row">			
			<div class="col-xs-12 col-sm-12 col-md-12 ">
				<p class="bg-primary" id="errorLogin">Acceso no autorizado. Por favor, compruebe que el nombre de usuario y la clave son correctos.</p>
				<a class="btn btn-default" href="../registro.html">VOLVER</a>     
			</div>
		</div>
	</div>
	</body>
	</html>
<?php   } 


?>

  </body>
</html>
