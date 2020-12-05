<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos1.css">
	<title>Modificar Usuario</title>
</head>
<body>
	

<main class="contenedor seccion contenido-centrado">
<h2 class="fw-300 centrar-texto">Modificar Usuario</h2>
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
	        <input id="modificar" type="text" name="nombre_usuario" value="<?= $data['objeto']['nombre_usuario']; ?>">

	        <label for="email">Email</label>
	        <input id="modificar" type="text" name="email" value="<?= $data['objeto']['email']; ?>">

	        <label for="direccion">Dirección</label>
	        <input id="modificar" type="text" name="direccion" value="<?= $data['objeto']['direccion']; ?>"> 

	        <label for="telefono">Teléfono</label>
	        <input id="modificar" type="text" name="telefono" value="<?= $data['objeto']['telefono']; ?>"> 

	        <label for="pass">Contraseña</label>
	        <input id="modificar" type="text" name="pass" value="<?= $data['objeto']['pass']; ?>">    
			
		</fieldset>
		
		
		<nav class="navegacion_agregar">
		<input class="boton" type="submit" id="btnActUsu" name="btnActUsu" value="Actualizar">
		<a class="boton" href="principal.php?c=controlador&a=muestraUsuarios">Regresar</a>
		</nav>
		
	</form>

	</body>
</html>