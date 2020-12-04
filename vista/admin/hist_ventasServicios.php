<?php 
 	require_once "dashboard_header.php";
 ?>

 <div id="layoutSidenav_content">
    <main>
         <div class="container-fluid">

			<form action="principal.php?c=controlador&a=buscaHistorialServ" method="POST" accept-charset="utf-8">
				<label for="buscar"></label>
				<input type="text" id="buscar" name="buscarHistServ" placeholder="Ingrese código o nombre">
				<input class="#" type="submit" value="Buscar">
			</form>

			<a class="" href="principal.php">Regresar</a>
			<h1 class="mt-4"><?php echo $data["titulo"]; ?></h1>

	            <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                            <?php echo $data["titulo"]; ?>
                    </div>

                    <div class="card-body">
                    <div class="table-responsive">

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

<?php 
 	require_once "dashboard_footer.php";
 ?>