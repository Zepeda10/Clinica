<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos1.css">
	<title>Administrar Usuarios</title>
</head>
<body>


<body>
<div class="contenedor contenido-centrado seccion">
	<div class="buscador">

	<form action="principal.php?c=controlador&a=buscaUsuario" method="POST" accept-charset="utf-8">
		<label for="buscar"></label>
		<input type="text" id="buscar" name="buscarUsuario" placeholder="Ingrese código o nombre">
		<input class="boton" type="submit" value="Buscar">
	</form>
	<nav class="navegacion">
	<a class="" href="principal.php?c=controlador&a=nuevoUsuario">Agregar</a>
	<a class="" href="principal.php">Regresar</a>
	</nav>

	</div>
</div>

	<table id="tabla">
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

	<footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a target="_blank" href="principal.php?c=controlador&a=nuevoProv">Agregar</a>
                <a href="principal.php">Regresar</a>
            </nav>
            <p class="copyright">Todos los derechos reservados 2020 &copy;</p>
        </div>
    </footer>

</body>
</html>