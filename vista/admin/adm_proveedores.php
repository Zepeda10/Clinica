
<body>
	<form action="principal.php?c=controlador&a=buscaProv" method="POST" accept-charset="utf-8">
		<label for="buscar"></label>
		<input type="text" id="buscar" name="buscarProveedor" placeholder="Ingrese código o nombre">
		<input class="#" type="submit" value="Buscar">
	</form>

	<a class="" href="principal.php?c=controlador&a=nuevoProv">Agregar</a>
	<a class="" href="principal.php">Regresar</a>

	<table>
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