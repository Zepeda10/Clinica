
<body>

	<form action="principal.php?c=controlador&a=buscaProducto" method="POST" accept-charset="utf-8">
		<label for="buscar"></label>
		<input type="text" id="buscar" name="buscarProducto" placeholder="Ingrese código o nombre">
		<input class="#" type="submit" value="Buscar">
	</form>

	<a class="" href="principal.php?c=controlador&a=nuevoProducto">Agregar</a>
	<a class="" href="principal.php">Regresar</a>

	<table>
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

</body>