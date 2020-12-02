

	<form action="principal.php?c=controlador&a=actualizaUsuario" method="POST" id="frmActUsu" name="frmActUsu" accept-charset="utf-8">
		<fieldset>	
			<legend>Usuarios</legend>
	        <input type="hidden" name="id_usuario" value="<?= $data['objeto']['id_usuario']; ?>">

	        <label for="tipo">Tipo</label>
	        <select name="tipo">
	        	<option value="Admin">Administrador</option>
	        	<option value="Vendedor">Vendedor</option>
	        </select>

	        <label for="nombre_usuario">Nombre del Usuario</label>
	        <input type="text" name="nombre_usuario" value="<?= $data['objeto']['nombre_usuario']; ?>">

	        <label for="email">Email</label>
	        <input type="text" name="email" value="<?= $data['objeto']['email']; ?>">

	        <label for="direccion">Dirección</label>
	        <input type="text" name="direccion" value="<?= $data['objeto']['direccion']; ?>"> 

	        <label for="telefono">Teléfono</label>
	        <input type="text" name="telefono" value="<?= $data['objeto']['telefono']; ?>"> 

	        <label for="pass">Contraseña</label>
	        <input type="text" name="pass" value="<?= $data['objeto']['pass']; ?>">    
			
		</fieldset>
		
		<input class="#" type="submit" id="btnActUsu" name="btnActUsu" value="Actualizar">
 		<a class="#" href="principal.php?c=controlador&a=muestraUsuarios">Regresar</a>
		
	</form>