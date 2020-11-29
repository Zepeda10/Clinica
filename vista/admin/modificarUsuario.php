

	<form action="#" method="POST" id="frmActUsu" name="frmActUsu" accept-charset="utf-8">
		<fieldset>	
			<legend>Usuarios</legend>
	        <input type="hidden" name="id_usuario" value="#">

	        <label for="tipo">Tipo</label>
	        <select name="tipo">
	        	<option value="Admin">Administrador</option>
	        	<option value="Vendedor">Vendedor</option>
	        </select>

	        <label for="nombre_usuario">Nombre del Usuario</label>
	        <input type="text" name="nombre_usuario" value="">

	        <label for="email">Email</label>
	        <input type="text" name="email" value="">

	        <label for="direccion">Dirección</label>
	        <input type="text" name="direccion" value=""> 

	        <label for="telefono">Teléfono</label>
	        <input type="text" name="telefono" value=""> 

	        <label for="pass">Contraseña</label>
	        <input type="text" name="pass" value="">    
			
		</fieldset>
		
		<input class="#" type="submit" id="btnActUsu" name="btnActUsu" value="Actualizar">
 		<a class="#" href="#">Regresar</a>
		
	</form>