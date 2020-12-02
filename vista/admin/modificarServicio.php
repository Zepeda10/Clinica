

	<form action="principal.php?c=controlador&a=actualizaServicio" method="POST" id="frmActServ" name="frmActServ" accept-charset="utf-8">
		<fieldset>	
			<legend>Servicios</legend>
	        <input type="hidden" name="id_servicio" value="<?= $data['objeto']['id_servicio']; ?>">

	        <label for="nombre_servicio">Nombre del Servicio</label>
	        <input type="text" name="nombre_servicio" value="<?= $data['objeto']['nombre_servicio']; ?>">

	        <label for="descripcion">Descripción</label>
	        <textarea name="descripcion" value="<?= $data['objeto']['descripcion']; ?>"></textarea>

	        <label for="precio">Precio</label>
	        <input type="text" name="precio" value="<?= $data['objeto']['precio']; ?>">

	        <label for="descuento">Descuento</label>
	        <input type="text" name="descuento" value="<?= $data['objeto']['descuento']; ?>"> 
			
		</fieldset>
		
		<input class="#" type="submit" id="btnActServ" name="btnActServ" value="Actualizar">
 		<a class="#" href="principal.php?c=controlador&a=muestraServicios">Regresar</a>
		
	</form>