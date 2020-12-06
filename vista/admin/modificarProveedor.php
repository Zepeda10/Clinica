<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos1.css">
	<title>Modificar Proveedor</title>
</head>

<html>
<body>

<main class="contenedor seccion contenido-centrado">
<h2 class="fw-300 centrar-texto">Modificar Producto</h2>

	<form action="principal.php?c=controlador&a=actualizaProveedor" method="POST" id="frmActProve" name="frmActProve" accept-charset="utf-8">
		<fieldset>	
			<legend>Modificar Producto</legend>
	
	        <input id="modificar" type="hidden" name="id" value="<?= $data['objeto']['id']; ?>">

	        <label for="nombre_proveedor">Nombre del Proveedor</label>
	        <input id="modificar" type="text" name="nombre_proveedor" value="<?= $data['objeto']['nombre_proveedor']; ?>">

	        <label for="direccion">Dirección</label>
	        <input id="modificar" type="text" name="direccion" value="<?= $data['objeto']['direccion']; ?>">

	        <label for="telefono">Teléfono</label>
	        <input id="modificar" type="text" name="telefono" value="<?= $data['objeto']['telefono']; ?>">

	        <label for="email">Email</label>
	        <input id="modificar" type="text" name="email" value="<?= $data['objeto']['email']; ?>"> 
			
		</fieldset>
		
		<nav class="navegacion_agregar">
		<input class="boton" type="submit" id="btnActProve" name="btnActProve" value="Actualizar">
 		<a class="boton" href="principal.php?c=controlador&a=muestraProveedores">Regresar</a>
		</nav>
	</form>
</main>
</body>
</html>