<?php

  $conexion = new PDO("sqlite:../BBDD/MERCADOS.sqlite");
  $consulta = "SELECT * FROM PRODUCTOS";
  $resultado = $conexion-> query($consulta);
	
  foreach ($resultado as $fila) {
    if(($fila['Ubicacion']) == $_GET['lugar'] || $_GET['lugar'] == '*'){
	  echo '<br>';
	  echo '<table>';
		echo "<tr>";
		  echo '<td rowspan="4">';
			echo "<img src=".$fila['Imagen']." width='200' height='200' />";
		  echo '</td>';
		  echo '<td width="10">';
		  echo '</td>';
		  echo '<td width ="250">';
			echo '<b>Producto:</b> '; echo $fila['NombProducto']; 
		  echo '</td>';
		  echo '<td>';
			echo '<b>Variedad:</b> '; echo $fila['VariedadProducto'];
		  echo '</td>';
		echo '</tr>';
		echo '<tr>';
		  echo '</td>';
		  echo '<td width="10">';
		  echo '<td>';
			echo '<b>Precio:</b> '; echo $fila['PrecioProducto']; echo ' €/Kg';
		  echo '</td>';
		  echo '<td>';
			echo '<b>Mercado:</b> '; echo $fila['Mercado'];
		  echo '</td>';
		echo '</tr>';
		echo '<tr>';
		  echo '</td>';
		  echo '<td width="10">';
		  echo '<td>';
			echo '<b>Ubicacion:</b> '; echo $fila['Ubicacion'];
		  echo '</td>';
		  echo '<td>';
			echo '<b>Teléfono:</b> '; echo $fila['Telefono'];
		  echo '</td>';
		echo '</tr>';
	  echo '</table>'; 	  	
	}	
  }
?>
