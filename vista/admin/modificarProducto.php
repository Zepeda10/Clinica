<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos1.css">
	<title>Modificar Producto</title>
</head>
<body>
	

<main class="contenedor seccion contenido-centrado">
<h2 class="fw-300 centrar-texto">Modificar Producto</h2>
	<form action="principal.php?c=controlador&a=actualizaProducto" method="POST" id="frmActProd" name="frmActProd" accept-charset="utf-8">
		<fieldset>	
			<legend>Modificar Producto</legend>
	
			<input id="modificar" type="hidden" name="id_producto" value="<?= $data['objeto']['id_producto']; ?>">

			<label for="cod_barras">Código de Barras</label>
			<input id="modificar" type="text" name="cod_barras" value="<?= $data['objeto']['cod_barras']; ?>">

			<label for="nombre_producto">Nombre del Producto</label>
			<input id="modificar" type="text" name="nombre_producto" value="<?= $data['objeto']['nombre_producto']; ?>">

			<label for="descripcion">Descripción</label>
	        <textarea name="descripcion" value="<?= $data['objeto']['descripcion']; ?>"></textarea>

	        <label for="cantidad">Cantidad</label>
	        <input id="modificar" type="number" name="cantidad" value="<?= $data['objeto']['cantidad']; ?>">

	        <label for="precio_unitario">Precio Unitario</label>
	        <input id="modificar" type="text" name="precio_unitario" value="<?= $data['objeto']['precio_unitario']; ?>">

	        <label for="descuento">Descuento</label>
	        <input id="modificar" type="text" name="descuento" value="<?= $data['objeto']['descuento']; ?>">

	        <label for="id_proveedor">Id Proveedor</label>
	        <input id="modificar" type="number" name="id_proveedor" value="<?= $data['objeto']['id_proveedor']; ?>">
			
		</fieldset>
		<nav class="navegacion_agregar">
		<input class="boton" type="submit" id="btnActProd" name="btnActProd" value="Actualizar">
 		<a class="boton" href="principal.php?c=controlador&a=muestraProductos">Regresar</a>
		</nav>
	</form>

	</body>
</html>