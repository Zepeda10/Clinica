<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>Agregar Proveedor</title>
</head>
<body>
    
<main class="contenedor seccion contenido-centrado">
<h2 class="fw-300 centrar-texto">Agregar Proveedor</h2>
<form class="contacto" action="principal.php?c=controlador&a=guardarProveedor" method="POST" id="frmAgregarProve" name="frmAgregarProve" accept-charset="utf-8">

    <fieldset>
        <legend>Proveedores</legend>
        <input id="agregar" type="hidden" name="id_proveedor" value="#">

        <label for="nombre_proveedor">Nombre del Proveedor</label>
        <input id="agregar" type="text" name="nombre_proveedor" placeholder="Nombre del Proveedor" required>

        <label for="direccion">Dirección</label>
        <input id="agregar" type="text" name="direccion" placeholder="Dirección" required>

        <label for="telefono">Teléfono</label>
        <input id="agregar" type="text" name="telefono" placeholder="Telefono" required>

        <label for="email">Email</label>
        <input id="agregar" type="text" name="email" placeholder="Email" required>    

    </fieldset>


    <nav class="navegacion_agregar">
    <input class="boton" type="submit" value="Agregar" name="registrarProve">
    <a class="boton" href="principal.php?c=controlador&a=muestraProveedores">Regresar</a>
    </nav>
</form>

</main>

</body>
</html>