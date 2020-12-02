

<body>

	<form action="principal.php?c=controlador&a=buscaHistorialServ" method="POST" accept-charset="utf-8">
		<label for="buscar"></label>
		<input type="text" id="buscar" name="buscarHistServ" placeholder="Ingrese código o nombre">
		<input class="#" type="submit" value="Buscar">
	</form>

	<a class="" href="principal.php">Regresar</a>

	<table>
			<thead>
				<tr>
					<th>Id Venta</th>
					<th>Id Servicio</th>
					<th>Fecha</th>
					<th>Nombre del Servicio</th>
					<th>Total</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php

				foreach ($data['objeto'] as $dato){
					echo "<tr>";
					echo "<td>".$dato['id']."</td>";
					echo "<td>".$dato['id_servicio']."</td>";
					echo "<td>".$dato['fecha']."</td>";
					echo "<td>".$dato['nombre_servicio']."</td>";
					echo "<td>".$dato['total']."</td>";

					echo "<td><a href='principal.php?c=controlador&a=borraHistorialserv&id=".$dato['id']."'>Eliminar</a></td>";
					
					echo "</tr>";
				}

			?>


			</tbody>
		</table>

</body>