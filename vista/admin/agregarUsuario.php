<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>Agregar Usuario</title>
</head>
<body>
    

<main class="contenedor seccion contenido-centrado">
<h2 class="fw-300 centrar-texto">Agregar Usuario</h2>
<form action="principal.php?c=controlador&a=guardarUsuario" method="POST" id="frmAgregarUsu" name="frmAgregarUsu" accept-charset="utf-8">

    <fieldset>
        <legend>Usuarios</legend>
        <input type="hidden" name="id_usuario" value="#">

        <label for="tipo">Tipo</label>
        <select name="tipo">
        	<option value="Admin">Administrador</option>
        	<option value="Vendedor">Vendedor</option>
        </select>

        <label for="nombre_usuario">Nombre del Usuario</label>
        <input id="agregar" type="text" name="nombre_usuario" placeholder="nombre_usuario" required>

        <label for="email">Email</label>
        <input id="agregar" type="text" name="email" placeholder="Email" required>

        <label for="direccion">Dirección</label>
        <input id="agregar" type="text" name="direccion" placeholder="Dirección" required> 

        <label for="telefono">Teléfono</label>
        <input id="agregar" type="text" name="telefono" placeholder="Teléfono" required> 

        <label for="pass">Contraseña</label>
        <input id="agregar" type="text" name="pass" placeholder="Contraseña" required>    

    </fieldset>

    <nav class="navegacion_agregar">
    <input class="boton" type="submit" value="Agregar" name="registrarUsu">
    <a class="boton" href="principal.php?c=controlador&a=muestraUsuarios">Regresar</a>
    </nav>
</form>
</main>

</body>
</html>