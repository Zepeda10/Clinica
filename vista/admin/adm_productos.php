<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos1.css">
	<title>Administrar Producto</title>
</head>



<body>


<div class="contenedor-buscador">
	<div class="buscador">
		<form action="principal.php?c=controlador&a=buscaProducto" method="POST" accept-charset="utf-8">
			<label for="buscar"></label>
			<input type="text" id="buscar" name="buscarProducto" placeholder="Ingrese código o nombre">
			<input class="boton" type="submit" value="Buscar">
		</form>

		<nav class="navegacion">
			<a class="" href="principal.php?c=controlador&a=nuevoProducto">Agregar</a>
			<a class="" href="principal.php">Regresar</a>
		</nav>
	</div>
</div>



	<table id="tabla">
			<thead>
				<tr>
					<th>Id Producto</th>
					<th>Código de barras</th>
					<th>Nombre del producto</th>
					<th>Descrición</th>
					<th>Cantidad</th>
					<th>Precio Unitario</th>
					<th>Descuento</th>
					<th>Id Proveedor</th>
					<th>Actualizar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php

				foreach ($data['objeto'] as $dato){
					echo "<tr>";
					echo "<td>".$dato['id_producto']."</td>";
					echo "<td>".$dato['cod_barras']."</td>";
					echo "<td>".$dato['nombre_producto']."</td>";
					echo "<td>".$dato['descripcion']."</td>";
					echo "<td>".$dato['precio_unitario']."</td>";
					echo "<td>".$dato['descuento']."</td>";
					echo "<td>".$dato['id_proveedor']."</td>";

					echo "<td><a href='principal.php?c=controlador&a=editarProducto&id=".$dato['id_producto']."'>Editar</a></td>";

					echo "<td><a href='principal.php?c=controlador&a=borraProducto&id=".$dato['id_producto']."'>Eliminar</a></td>";
					
					echo "</tr>";
				}

			?>


			</tbody>
		</table>

	<?php
		require_once ("vista/inicioPrueba.php");
	?>

		</html>
		
</body>
