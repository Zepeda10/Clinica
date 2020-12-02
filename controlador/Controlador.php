<?php 

class Controlador{

	public function __construct(){
		require_once "modelo/Modelo.php";
	} 

	/* --------------- MODELO Y VISTA DE PROVEEDORES ----------------- */

	public function principal(){
		$objeto = new modelo();
		$data["titulo"] = "Proveedores";
		$data["objeto"] = $objeto->getProveedores();

		//mandando información del modelo a la vista
		require_once "vista/inicioPrueba.php";
	}

	//mostrando vista de proveedores (html) creada en carpeta "vista", haciendo interactuar modelo con vista
	public function muestraProveedores(){
		$objeto = new modelo();
		$data["titulo"] = "Proveedores";
		$data["objeto"] = $objeto->getProveedores();

		//mandando información del modelo a la vista
		require_once "vista/admin/adm_proveedores.php";
	}

     //mostrando vista de agregar proveedor
	public function nuevoProv(){
		$data["titulo"] = "Agregar Proveedor";
		require_once "vista/admin/agregarProveedor.php";
	}

    //Pasando valores a método insertarProveedor del modelo, para agregarlos en la vista de "agregarProveedor"
	public function guardarProveedor(){
		$nomProv = $_POST['nombre_proveedor'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$email = $_POST['email'];

		$objeto = new modelo();
		$objeto->insertarProveedor($nomProv,$direccion,$telefono,$email);

		$data["titulo"] = "Agregar Proveedores";
			
	}

	//Mostrando vista para modificar proveedor
	public function editarProveedor($id){
		$objeto = new modelo();
		$data["id"] = $id;
		$data["titulo"] = "Modificar Proveedor";
		$data["objeto"] = $objeto->getProveedor($id); //llamando método que muestra un producto en el formulario
		require_once "vista/admin/modificarProveedor.php";

	}

	//Llamándo método para actualizar proveedor
	public function actualizaProveedor(){
		$id = $_POST['id'];
		$nombre = $_POST['nombre_proveedor'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$email = $_POST['email'];

		$objeto = new modelo();
		$objeto->modificarProveedor($id,$nombre,$direccion,$telefono,$email);
	}

	//llamando función eliminar un proveedor
	public function borraProveedor($id){
		$objeto = new modelo();
		$objeto->eliminarProveedor($id);
		header("Location: principal.php?c=controlador&a=muestraProveedores");
	}

	//Llamando método para buscar proveedor
	public function buscaProv(){
		$buscar = $_POST['buscarProveedor'];
		$productos = new modelo();
		$data["objeto"] = $productos->buscarProveedor($buscar);

		//mandando información del modelo a la vista
		require_once "vista/admin/adm_proveedores.php";
	}


	/* --------------- MODELO Y VISTA DE SERVICIOS ----------------- */


	//mostrando vista de proveedores (html) creada en carpeta "vista", haciendo interactuar modelo con vista
	public function muestraServicios(){
		$objeto = new modelo();
		$data["titulo"] = "Servicios";
		$data["objeto"] = $objeto->getServicios();

		//mandando información del modelo a la vista
		require_once "vista/admin/adm_servicios.php";
	}

     //mostrando vista de agregar proveedor
	public function nuevoServicio(){
		$data["titulo"] = "Agregar Servicio";
		require_once "vista/admin/agregarServicio.php";
	}

    //Pasando valores a método insertarProveedor del modelo, para agregarlos en la vista de "agregarProveedor"
	public function guardarServicio(){
		$nomServ = $_POST['nombre_servicio'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$descuento = $_POST['descuento'];

		$objeto = new modelo();
		$objeto->insertarServicio($nomServ, $descripcion, $precio, $descuento);
			
	}

	//Mostrando vista para modificar proveedor
	public function editarServicio($id){
		$objeto = new modelo();
		$data["id_servicio"] = $id;
		$data["titulo"] = "Modificar Servicio";
		$data["objeto"] = $objeto->getServicio($id); //llamando método que muestra un producto en el formulario
		require_once "vista/admin/modificarServicio.php";

	}

	//Llamándo método para actualizar proveedor
	public function actualizaServicio(){
		$id = $_POST['id_servicio'];
		$nomServ = $_POST['nombre_servicio'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$descuento = $_POST['descuento'];

		$objeto = new modelo();
		$objeto->modificarServicio($id,$nomServ, $descripcion, $precio, $descuento);
	}

	//llamando función eliminar un proveedor
	public function borraServicio($id){
		$objeto = new modelo();
		$objeto->eliminarServicio($id);
		header("Location: principal.php?c=controlador&a=muestraServicios");
	}

	//Llamando método para buscar proveedor
	public function buscaServicio(){
		$buscar = $_POST['buscarServicio'];
		$productos = new modelo();
		$data["objeto"] = $productos->buscarServicio($buscar);

		//mandando información del modelo a la vista
		require_once "vista/admin/adm_servicios.php";
	}


	/* --------------- MODELO Y VISTA DE USUARIOS ----------------- */


	//mostrando vista de proveedores (html) creada en carpeta "vista", haciendo interactuar modelo con vista
	public function muestraUsuarios(){
		$objeto = new modelo();
		$data["titulo"] = "Servicios";
		$data["objeto"] = $objeto->getUsuarios();

		//mandando información del modelo a la vista
		require_once "vista/admin/adm_usuarios.php";
	}

     //mostrando vista de agregar proveedor
	public function nuevoUsuario(){
		$data["titulo"] = "Agregar Usuario";
		require_once "vista/admin/agregarUsuario.php";
	}

    //Pasando valores a método insertarProveedor del modelo, para agregarlos en la vista de "agregarProveedor"
	public function guardarUsuario(){
		$tipo = $_POST['tipo'];
		$nombre= $_POST['nombre_usuario'];
		$email = $_POST['email'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$pass = $_POST['pass'];

		$objeto = new modelo();
		$objeto->insertarUsuario($tipo, $nombre, $email, $direccion, $telefono, $pass);
			
	}

	//Mostrando vista para modificar proveedor
	public function editarUsuario($id){
		$objeto = new modelo();
		$data["id_servicio"] = $id;
		$data["titulo"] = "Modificar Usuario";
		$data["objeto"] = $objeto->getUsuario($id); //llamando método que muestra un producto en el formulario
		require_once "vista/admin/modificarUsuario.php";

	}

	//Llamándo método para actualizar proveedor
	public function actualizaUsuario(){
		$idUsu = $_POST['id_usuario'];
		$tipo= $_POST['tipo'];
		$nombre= $_POST['nombre_usuario'];
		$email = $_POST['email'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$pass = $_POST['pass'];

		$objeto = new modelo();
		$objeto->modificarUsuario($idUsu, $tipo, $nombre, $email, $direccion, $telefono, $pass);
	}

	//llamando función eliminar un proveedor
	public function borraUsuario($id){
		$objeto = new modelo();
		$objeto->eliminarUsuario($id);
		header("Location: principal.php?c=controlador&a=muestraUsuarios");
	}

	//Llamando método para buscar proveedor
	public function buscaUsuario(){
		$buscar = $_POST['buscarUsuario'];
		$productos = new modelo();
		$data["objeto"] = $productos->buscarUsuario($buscar);

		//mandando información del modelo a la vista
		require_once "vista/admin/adm_usuarios.php";
	}

		/* --------------- MODELO Y VISTA DE PRODUCTOS ----------------- */


	//mostrando vista de proveedores (html) creada en carpeta "vista", haciendo interactuar modelo con vista
	public function muestraProductos(){
		$objeto = new modelo();
		$data["titulo"] = "Productos";
		$data["objeto"] = $objeto->getProductos();

		//mandando información del modelo a la vista
		require_once "vista/admin/adm_productos.php";
	}

     //mostrando vista de agregar proveedor
	public function nuevoProducto(){
		$data["titulo"] = "Agregar Producto";
		require_once "vista/admin/agregarProducto.php";
	}

    //Pasando valores a método insertarProveedor del modelo, para agregarlos en la vista de "agregarProveedor"
	public function guardarProducto(){
		$codigo = $_POST['cod_barras'];
		$nombre= $_POST['nombre_producto'];
		$descripcion = $_POST['descripcion'];
		$cantidad = $_POST['cantidad'];
		$precio = $_POST['precio_unitario'];
		$descuento = $_POST['descuento'];
		$idProv = $_POST['id_proveedor'];

		$objeto = new modelo();
		$objeto->insertarProducto($codigo, $nombre, $descripcion, $cantidad, $precio, $descuento, $idProv);
			
	}

	//Mostrando vista para modificar proveedor
	public function editarProducto($id){
		$objeto = new modelo();
		$data["id_producto"] = $id;
		$data["titulo"] = "Modificar Producto";
		$data["objeto"] = $objeto->getProducto($id); //llamando método que muestra un producto en el formulario
		require_once "vista/admin/modificarProducto.php";

	}

	//Llamándo método para actualizar proveedor
	public function actualizaProducto(){
		$idProducto = $_POST['id_producto'];
		$codigo = $_POST['cod_barras'];
		$nombre= $_POST['nombre_producto'];
		$descripcion = $_POST['descripcion'];
		$cantidad = $_POST['cantidad'];
		$precio = $_POST['precio_unitario'];
		$descuento = $_POST['descuento'];
		$idProv = $_POST['id_proveedor'];

		$objeto = new modelo();
		$objeto->modificarProducto($idProducto, $codigo, $nombre, $descripcion, $cantidad, $precio, $descuento, $idProv);
	}

	//llamando función eliminar un proveedor
	public function borraProducto($id){
		$objeto = new modelo();
		$objeto->eliminarProducto($id);
		header("Location: principal.php?c=controlador&a=muestraProductos");
	}

	//Llamando método para buscar proveedor
	public function buscaProducto(){
		$buscar = $_POST['buscarProducto'];
		$productos = new modelo();
		$data["objeto"] = $productos->buscarProducto($buscar);

		//mandando información del modelo a la vista
		require_once "vista/admin/adm_productos.php";
	}
		
		



}

?>