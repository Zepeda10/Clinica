<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script src="js/main.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos1.css">
</head>
<body>



<header>

	<div class="contenido-header clearfix">

		<p class="parrafo-admin">Vista Administrador</p>

			<div class="menu-movil">

				<i class="far fa-user-circle"></i>

			</div>
	
	</div>


</header>


<section class="contenedor-menu">

	<div class="menu">

		<p>Gestiones</p>
		<div class="opciones">
		<a href="principal.php?c=controlador&a=muestraProveedores"><i class="fas fa-box"></i>Proveedores</a>
		<a href="principal.php?c=controlador&a=muestraProductos"><i class="fas fa-box"></i>Productos</a>
		<a href="principal.php?c=controlador&a=muestraServicios"><i class="fas fa-box"></i>Servicios</a>
		</div>

		
		<p>Usuarios</p>
		<div class="opciones">
		<a href="principal.php?c=controlador&a=muestraUsuarios"><i class="fas fa-box"></i>Usuarios</a>
		</div>


		<p>Historiales</p>
		<div class="opciones">
		<a href="principal.php?c=controlador&a=muestraHistorialProd"><i class="fas fa-box"></i>Historial Productos</a>
		<a href="principal.php?c=controlador&a=muestraHistorialServ"><i class="fas fa-box"></i>Historial Servicios</a>
		</div>

	</div>
</section>
</body> 
</html>