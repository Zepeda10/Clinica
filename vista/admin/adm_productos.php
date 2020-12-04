<?php 
 	require_once "dashboard_header.php";
 ?>

 <div id="layoutSidenav_content">
    <main>
         <div class="container-fluid">

			<form action="principal.php?c=controlador&a=buscaProducto" method="POST" accept-charset="utf-8">
				<label for="buscar"></label>
				<input type="text" id="buscar" name="buscarProducto" placeholder="Ingrese código o nombre">
				<input class="#" type="submit" value="Buscar">
			</form>

			<a class="" href="principal.php?c=controlador&a=nuevoProducto">Agregar</a>
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
									echo "<td>".$dato['cantidad']."</td>";
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
					</div>
                </div>
            </div>
        </div>
    </main>

<?php 
 	require_once "dashboard_footer.php";
 ?>