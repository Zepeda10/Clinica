

<body>

	<form action="principal.php?c=controlador&a=buscaHistorialProd" method="POST" accept-charset="utf-8">
		<label for="buscar"></label>
		<input type="text" id="buscar" name="buscarHistPro" placeholder="Ingrese Fecha">
		<input class="#" type="submit" value="Buscar">
	</form>

	<a class="" href="principal.php">Regresar</a>

	<table>
			<thead>
				<tr>
					<th>Id Venta</th>
					<th>Id Producto</th>
					<th>Código de barras</th>
					<th>Fecha</th>
					<th>Id Usuario</th>
					<th>Nombre del Producto</th>
					<th>Cantidad</th>
					<th>Total</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php

				foreach ($data['objeto'] as $dato){
					echo "<tr>";
					echo "<td>".$dato['id']."</td>";
					echo "<td>".$dato['id_producto']."</td>";
					echo "<td>".$dato['cod_barras']."</td>";
					echo "<td>".$dato['fecha']."</td>";
					echo "<td>".$dato['id_usuario']."</td>";
					echo "<td>".$dato['nombre_producto']."</td>";
					echo "<td>".$dato['cantidad']."</td>";
					echo "<td>".$dato['total']."</td>";

					echo "<td><a href='principal.php?c=controlador&a=borraHistorialProd&id=".$dato['id']."'>Eliminar</a></td>";
					
					echo "</tr>";
				}

			?>


			</tbody>
		</table>

</body>