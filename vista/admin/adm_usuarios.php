

<body>

	<form action="principal.php?c=controlador&a=buscaUsuario" method="POST" accept-charset="utf-8">
		<label for="buscar"></label>
		<input type="text" id="buscar" name="buscarUsuario" placeholder="Ingrese código o nombre">
		<input class="#" type="submit" value="Buscar">
	</form>

	<a class="" href="principal.php?c=controlador&a=nuevoUsuario">Agregar</a>
	<a class="" href="principal.php">Regresar</a>

	<table>
			<thead>
				<tr>
					<th>Id Usuario</th>
					<th>Tipo</th>
					<th>Nombre del Usuario</th>
					<th>Email</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Contraseña</th>
					<th>Actualizar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php

				foreach ($data['objeto'] as $dato){
					echo "<tr>";
					echo "<td>".$dato['id_usuario']."</td>";
					echo "<td>".$dato['tipo']."</td>";
					echo "<td>".$dato['nombre_usuario']."</td>";
					echo "<td>".$dato['email']."</td>";
					echo "<td>".$dato['direccion']."</td>";
					echo "<td>".$dato['telefono']."</td>";
					echo "<td>".$dato['pass']."</td>";

					echo "<td><a href='principal.php?c=controlador&a=editarUsuario&id=".$dato['id_usuario']."'>Editar</a></td>";

					echo "<td><a href='principal.php?c=controlador&a=borraUsuario&id=".$dato['id_usuario']."'>Eliminar</a></td>";
					
					echo "</tr>";
				}

			?>


			</tbody>
		</table>

</body>