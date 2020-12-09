<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos1.css">
	<title>Historial de Ventas</title>
</head>


<body>

<div class="contenedor-buscador">
	<div class="buscador">

	<form action="principal.php?c=controlador&a=#" method="POST" accept-charset="utf-8">
		<label for="buscar"></label>
		<input type="text" id="buscar" name="buscarHistPro" placeholder="Ingrese Fecha">
		<input class="#" type="submit" value="Buscar">
	</form>

	<nav class="navegacion">
	<a class="" href="principal.php">Regresar</a>
	</nav>

	</div>
</div>

	<table id="tabla">
			<thead>
				<tr>
					<th>Id Venta</th>
					<th>Folio</th>
					<th>Fecha</th>
					<th>Id Usuario</th>
					<th>Total</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php

				foreach ($data['objeto'] as $dato){
					echo "<tr>";
					echo "<td>".$dato['id']."</td>";
					echo "<td>".$dato['folio']."</td>";
					echo "<td>".$dato['fecha']."</td>";
					echo "<td>".$dato['id_usuario']."</td>";
					echo "<td>".$dato['total']."</td>";

					echo "<td><a href='principal.php?c=controlador&a=borraHistorialProd&id=".$dato['id']."'>Eliminar</a></td>";
					
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