<<<<<<< HEAD
<?php 
    require_once "dashboard_header.php";
 ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">   
            <h1 class="mt-4"><?php echo $data["titulo"]; ?></h1>

            <form action="principal.php?c=controlador&a=guardarServicio" method="POST" id="frmAgregarServ" name="frmAgregarServ" accept-charset="utf-8">

                <fieldset>
                    <legend>Servicios</legend>
                    <input type="hidden" name="id_servicio" value="">

                    <label for="nombre_servicio">Nombre del Servicio</label>
                    <input type="text" name="nombre_servicio" placeholder="Nombre del Servicio" required>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>Agregar Servicio</title>
</head>
<body>
    

<main class="contenedor seccion contenido-centrado">
<h2 class="fw-300 centrar-texto">Agregar Servicio</h2>
<form action="principal.php?c=controlador&a=guardarServicio" method="POST" id="frmAgregarServ" name="frmAgregarServ" accept-charset="utf-8">

    <fieldset>
        <legend>Servicios</legend>
        <input id="agregar" type="hidden" name="id_servicio" value="">

        <label for="nombre_servicio">Nombre del Servicio</label>
        <input id="agregar" type="text" name="nombre_servicio" placeholder="Nombre del Servicio" required>
>>>>>>> a7fead99704e1bba1ab8c2a71687dbc4563d22ba

                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion"></textarea>

<<<<<<< HEAD
                    <label for="precio">Precio</label>
                    <input type="text" name="precio" placeholder="Precio" required>

                    <label for="descuento">Descuento</label>
                    <input type="text" name="descuento" placeholder="Descuento" required>    
=======
        <label for="precio">Precio</label>
        <input id="agregar" type="text" name="precio" placeholder="Precio" required>

        <label for="descuento">Descuento</label>
        <input id="agregar" type="text" name="descuento" placeholder="Descuento" required>    
>>>>>>> a7fead99704e1bba1ab8c2a71687dbc4563d22ba

                </fieldset>

<<<<<<< HEAD
                <input class="#" type="submit" value="Agregar" name="registrarServ">
                <a class="#" href="principal.php?c=controlador&a=muestraServicios">Regresar</a>
                
            </form>

        </div>
    </main>
</div>


<?php 
    require_once "dashboard_footer.php";
 ?>
=======
    <nav class="navegacion_agregar">
    <input class="boton" type="submit" value="Agregar" name="registrarServ">
    <a class="boton" href="principal.php?c=controlador&a=muestraServicios">Regresar</a>
</nav>
</form>

</main>

</body>
</html>
>>>>>>> a7fead99704e1bba1ab8c2a71687dbc4563d22ba
