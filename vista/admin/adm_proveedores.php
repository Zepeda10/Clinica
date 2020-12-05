<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos1.css">
	<title>Proveedores</title>
</head>

<body>
<div class="contenedor contenido-centrado seccion">
	<div class="buscador">
	
		<form action="principal.php?c=controlador&a=buscaProv" method="POST" accept-charset="utf-8">
		<label for="buscar"></label>
			<input type="text" id="buscar" name="buscarProveedor" placeholder="Ingrese código o nombre">
			<input class="boton" type="submit" value="Buscar">
		</form>
	


		<nav class="navegacion">
			<a class="" href="principal.php?c=controlador&a=nuevoProv">Agregar</a>
			<a class="" href="principal.php">Regresar</a>
		</nav>
	</div>
</div>
	

	<table id="tabla">
			<thead>
				<tr>
					<th>Id Proveedor</th>
					<th>Nombre Proveedor</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Email</th>
					<th>Actualizar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>

				<?php

				foreach ($data['objeto'] as $dato){
					echo "<tr>";
					echo "<td>".$dato['id']."</td>";
					echo "<td>".$dato['nombre_proveedor']."</td>";
					echo "<td>".$dato['direccion']."</td>";
					echo "<td>".$dato['telefono']."</td>";
					echo "<td>".$dato['email']."</td>";

					echo "<td><a href='principal.php?c=controlador&a=editarProveedor&id=".$dato['id']."'>Editar</a></td>";

					echo "<td><a href='principal.php?c=controlador&a=borraProveedor&id=".$dato['id']."'>Eliminar</a></td>";
					
					echo "</tr>";
				}

			?>


			</tbody>
		</table>

	


</body>
</html>