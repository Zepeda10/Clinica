<<<<<<< HEAD
<?php 
    require_once "dashboard_header.php";
 ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">   
            <h1 class="mt-4"><?php echo $data["titulo"]; ?></h1>

			<form action="principal.php?c=controlador&a=actualizaServicio" method="POST" id="frmActServ" name="frmActServ" accept-charset="utf-8">
				<fieldset>	
					<legend>Servicios</legend>
			        <input type="hidden" name="id_servicio" value="<?= $data['objeto']['id_servicio']; ?>">

			        <label for="nombre_servicio">Nombre del Servicio</label>
			        <input type="text" name="nombre_servicio" value="<?= $data['objeto']['nombre_servicio']; ?>">
=======
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos1.css">
	<title>Modificar Servicio</title>
</head>
<body>
	

<main class="contenedor seccion contenido-centrado">
<h2 class="fw-300 centrar-texto">Modificar Servicio</h2>
	<form action="principal.php?c=controlador&a=actualizaServicio" method="POST" id="frmActServ" name="frmActServ" accept-charset="utf-8">
		<fieldset>	
			<legend>Servicios</legend>
	        <input id="modificar" type="hidden" name="id_servicio" value="<?= $data['objeto']['id_servicio']; ?>">

	        <label for="nombre_servicio">Nombre del Servicio</label>
	        <input id="modificar" type="text" name="nombre_servicio" value="<?= $data['objeto']['nombre_servicio']; ?>">
>>>>>>> a7fead99704e1bba1ab8c2a71687dbc4563d22ba

			        <label for="descripcion">Descripción</label>
			        <textarea name="descripcion" value="<?= $data['objeto']['descripcion']; ?>"></textarea>

<<<<<<< HEAD
			        <label for="precio">Precio</label>
			        <input type="text" name="precio" value="<?= $data['objeto']['precio']; ?>">

			        <label for="descuento">Descuento</label>
			        <input type="text" name="descuento" value="<?= $data['objeto']['descuento']; ?>"> 
					
				</fieldset>
				
				<input class="#" type="submit" id="btnActServ" name="btnActServ" value="Actualizar">
		 		<a class="#" href="principal.php?c=controlador&a=muestraServicios">Regresar</a>
				
			</form>

		</div>
	</main>
</div>

<?php 
    require_once "dashboard_footer.php";
 ?>
=======
	        <label for="precio">Precio</label>
	        <input id="modificar" type="text" name="precio" value="<?= $data['objeto']['precio']; ?>">

	        <label for="descuento">Descuento</label>
	        <input id="modificar" type="text" name="descuento" value="<?= $data['objeto']['descuento']; ?>"> 
			
		</fieldset>


		<nav class="navegacion_agregar">
		<input class="boton" type="submit" id="btnActServ" name="btnActServ" value="Actualizar">
 		<a class="boton" href="principal.php?c=controlador&a=muestraServicios">Regresar</a>
		</nav>
	</form>
	</body>
</html>
>>>>>>> a7fead99704e1bba1ab8c2a71687dbc4563d22ba
