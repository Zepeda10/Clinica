<body>

	<form action="principal.php?c=controlador&a=buscaServicio" method="POST" accept-charset="utf-8">
		<label for="buscar"></label>
		<input type="text" id="buscar" name="buscarServicio" placeholder="Ingrese código o nombre">
		<input class="#" type="submit" value="Buscar">
	</form>

	<a class="" href="principal.php?c=controlador&a=nuevoServicio">Agregar</a>
	<a class="" href="principal.php">Regresar</a>

	<table>
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

</body>