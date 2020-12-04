<<<<<<< HEAD
<?php 
 	require_once "dashboard_header.php";
 ?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos1.css">
	<title>Historial Servicios</title>
</head>

>>>>>>> a7fead99704e1bba1ab8c2a71687dbc4563d22ba

 <div id="layoutSidenav_content">
    <main>
         <div class="container-fluid">

			<form action="principal.php?c=controlador&a=buscaHistorialServ" method="POST" accept-charset="utf-8">
				<label for="buscar"></label>
				<input type="text" id="buscar" name="buscarHistServ" placeholder="Ingrese código o nombre">
				<input class="#" type="submit" value="Buscar">
			</form>

<<<<<<< HEAD
			<a class="" href="principal.php">Regresar</a>
			<h1 class="mt-4"><?php echo $data["titulo"]; ?></h1>

	            <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                            <?php echo $data["titulo"]; ?>
                    </div>

                    <div class="card-body">
                    <div class="table-responsive">
=======

<div class="contenedor contenido-centrado seccion">
	<div class="buscador">
		<form action="principal.php?c=controlador&a=buscaHistorialServ" method="POST" accept-charset="utf-8">
			<label for="buscar"></label>
			<input type="text" id="buscar" name="buscarHistServ" placeholder="Ingrese código o nombre">
			<input class="boton" type="submit" value="Buscar">
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
					<th>Id Servicio</th>
					<th>Fecha</th>
					<th>Nombre del Servicio</th>
					<th>Total</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php
>>>>>>> a7fead99704e1bba1ab8c2a71687dbc4563d22ba

						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
					</div>
                </div>
            </div>
        </div>
    </main>

<<<<<<< HEAD
<?php 
 	require_once "dashboard_footer.php";
 ?>
=======

		<footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="principal.php">Regresar</a>
            </nav>
            <p class="copyright">Todos los derechos reservados 2020 &copy;</p>
        </div>
    </footer>

</body>

</html>
>>>>>>> a7fead99704e1bba1ab8c2a71687dbc4563d22ba
