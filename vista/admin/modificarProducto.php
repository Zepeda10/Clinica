

	<form action="principal.php?c=controlador&a=actualizaProducto" method="POST" id="frmActProd" name="frmActProd" accept-charset="utf-8">
		<fieldset>	
			<legend>Modificar Producto</legend>
	
			<input type="hidden" name="id_producto" value="<?= $data['objeto']['id_producto']; ?>">

			<label for="cod_barras">Código de Barras</label>
			<input type="text" name="cod_barras" value="<?= $data['objeto']['cod_barras']; ?>">

			<label for="nombre_producto">Nombre del Producto</label>
			<input type="text" name="nombre_producto" value="<?= $data['objeto']['nombre_producto']; ?>">

			<label for="descripcion">Descripción</label>
	        <textarea name="descripcion" value="<?= $data['objeto']['descripcion']; ?>"></textarea>

	        <label for="cantidad">Cantidad</label>
	        <input type="number" name="cantidad" value="<?= $data['objeto']['cantidad']; ?>">

	        <label for="precio_unitario">Precio Unitario</label>
	        <input type="text" name="precio_unitario" value="<?= $data['objeto']['precio_unitario']; ?>">

	        <label for="descuento">Descuento</label>
	        <input type="text" name="descuento" value="<?= $data['objeto']['descuento']; ?>">

	        <label for="id_proveedor">Id Proveedor</label>
	        <input type="number" name="id_proveedor" value="<?= $data['objeto']['id_proveedor']; ?>">
			
		</fieldset>
		
		<input class="#" type="submit" id="btnActProd" name="btnActProd" value="Actualizar">
 		<a class="#" href="principal.php?c=controlador&a=muestraProductos">Regresar</a>
		
	</form>