<?php 
    require_once "dashboard_header.php";
 ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">   
            <h1 class="mt-4"><?php echo $data["titulo"]; ?></h1>

			<form action="principal.php?c=controlador&a=actualizaProveedor" method="POST" id="frmActProve" name="frmActProve" accept-charset="utf-8">
				<fieldset>			
			        <legend>Proveedores</legend>
			        <input type="hidden" name="id" value="<?= $data['objeto']['id']; ?>">

			        <label for="nombre_proveedor">Nombre del Proveedor</label>
			        <input type="text" name="nombre_proveedor" value="<?= $data['objeto']['nombre_proveedor']; ?>">

			        <label for="direccion">Dirección</label>
			        <input type="text" name="direccion" value="<?= $data['objeto']['direccion']; ?>">

			        <label for="telefono">Teléfono</label>
			        <input type="text" name="telefono" value="<?= $data['objeto']['telefono']; ?>">

			        <label for="email">Email</label>
			        <input type="text" name="email" value="<?= $data['objeto']['email']; ?>"> 
					
				</fieldset>
				
				<input class="#" type="submit" id="btnActProve" name="btnActProve" value="Actualizar">
		 		<a class="#" href="principal.php?c=controlador&a=muestraProveedores">Regresar</a>
				
			</form>

        </div>
    </main>
</div>


<?php 
    require_once "dashboard_footer.php";
 ?>