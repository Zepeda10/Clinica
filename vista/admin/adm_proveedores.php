<?php 
 	require_once "dashboard_header.php";
 ?>

 <div id="layoutSidenav_content">
    <main>
         <div class="container-fluid">
         	<form action="principal.php?c=controlador&a=buscaProv" method="POST" accept-charset="utf-8">
				<label for="buscar"></label>
				<input type="text" id="buscar" name="buscarProveedor" placeholder="Ingrese código o nombre">
				<input class="#" type="submit" value="Buscar">
			</form>

			<a class="" href="principal.php?c=controlador&a=nuevoProv">Agregar</a>
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
					</div>
                </div>
            </div>
        </div>
    </main>

<?php 
 	require_once "dashboard_footer.php";
 ?>