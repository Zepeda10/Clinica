<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>Agregar Producto</title>
</head>
<body>
    
<main class="contenedor seccion contenido-centrado">
<h2 class="fw-300 centrar-texto">Agregar Producto</h2>
<form action="principal.php?c=controlador&a=guardarProducto" method="POST" id="frmAgregarProd" name="frmAgregarProd" accept-charset="utf-8">

    <fieldset>
        <legend>Productos</legend>
        <input id="agregar" type="hidden" name="id_producto" value="">
        <label for="cod_barras">Código de Barras</label>
        <input id="agregar" type="text" name="cod_barras" placeholder="Código de Barras" required>

        <label for="nombre_producto">Nombre del Producto</label>
        <input id="agregar" type="text" name="nombre_producto" placeholder="Nombre del Producto" required>

        <label for="descripcion">Descrición</label>
        <textarea name="descripcion"></textarea>

        <label for="cantidad">Cantidad</label>
        <input id="agregar" type="number" name="cantidad" placeholder="Cantidad" required>

        <label for="precio_unitario">Precio Unitario</label>
        <input id="agregar" type="text" name="precio_unitario" placeholder="Precio Unitario" required>

        <label for="descuento">Descuento</label>
        <input id="agregar" type="text" name="descuento" placeholder="Descuento" required>

        <label for="id_proveedor">Id Proveedor</label>
        <input id="agregar" type="number" name="id_proveedor" placeholder="Id Proveedor" required>      

    </fieldset>

    <nav class="navegacion_agregar">
    <input class="boton" type="submit" value="Agregar" name="registrarProd">
    <a class="boton" href="principal.php?c=controlador&a=muestraProductos">Regresar</a>
</nav>
    
</form>
</main>

</body>
</html>