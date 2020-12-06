
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos1.css">
	<title>Administrar Servicios</title>
</head>


<body>

<div class="contenedor-buscador">
	<div class="buscador">

	<form action="principal.php?c=controlador&a=buscaServicio" method="POST" accept-charset="utf-8">
		<label for="buscar"></label>
		<input type="text" id="buscar" name="buscarServicio" placeholder="Ingrese código o nombre">
		<input class="boton" type="submit" value="Buscar">
	</form>

	<nav class="navegacion">
	<a class="" href="principal.php?c=controlador&a=nuevoServicio">Agregar</a>
	<a class="" href="principal.php">Regresar</a>
	</nav>

</div>
</div>
	<table id="tabla">
			<thead>
				<tr>
					<th>Id Servicio</th>
					<th>Nombre del Servico</th>
					<th>Descrición</th>
					<th>Precio Unitario</th>
					<th>Descuento</th>
					<th>Actualizar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php

				foreach ($data['objeto'] as $dato){
					echo "<tr>";
					echo "<td>".$dato['id_servicio']."</td>";
					echo "<td>".$dato['nombre_servicio']."</td>";
					echo "<td>".$dato['descripcion']."</td>";
					echo "<td>".$dato['precio']."</td>";
					echo "<td>".$dato['descuento']."</td>";

					echo "<td><a href='principal.php?c=controlador&a=editarServicio&id=".$dato['id_servicio']."'>Editar</a></td>";

					echo "<td><a href='principal.php?c=controlador&a=borraServicio&id=".$dato['id_servicio']."'>Eliminar</a></td>";
					
					echo "</tr>";
				}

			?>



			</tbody>
		</table>


		<?php
			require_once ("vista/inicioPrueba.php");
		?>

</body>
</html>