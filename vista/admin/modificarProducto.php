

	<form action="#" method="POST" id="frmActProd" name="frmActProd" accept-charset="utf-8">
		<fieldset>	
			<legend>Modificar Producto</legend>
	
			<input type="hidden" name="id_producto" value="">

			<label for="nombre_producto">Nombre del Producto</label>
			<input type="text" name="nombre_producto" value="">

			<label for="descripcion">Descrición</label>
	        <textarea name="descripcion" value=""></textarea>

	        <label for="cantidad">Cantidad</label>
	        <input type="number" name="cantidad" value="">

	        <label for="precio_unitario">Precio Unitario</label>
	        <input type="text" name="precio_unitario" value="">

	        <label for="descuento">Descuento</label>
	        <input type="text" name="descuento" value="">

	        <label for="id_proveedor">Id Proveedor</label>
	        <input type="number" name="id_proveedor" value="">
			
		</fieldset>
		
		<input class="#" type="submit" id="btnActProd" name="btnActProd" value="Actualizar">
 		<a class="#" href="#">Regresar</a>
		
	</form>