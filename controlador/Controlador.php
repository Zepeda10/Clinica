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


	//mostrando vista de servicio (html) creada en carpeta "vista", haciendo interactuar modelo con vista
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

    //Pasando valores a método insertarServicio del modelo, para agregarlos en la vista de "agregarServicio"
	public function guardarServicio(){
		$nomServ = $_POST['nombre_servicio'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$descuento = $_POST['descuento'];

		$objeto = new modelo();
		$objeto->insertarServicio($nomServ, $descripcion, $precio, $descuento);
			
	}

	//Mostrando vista para modificar servicio
	public function editarServicio($id){
		$objeto = new modelo();
		$data["id_servicio"] = $id;
		$data["titulo"] = "Modificar Servicio";
		$data["objeto"] = $objeto->getServicio($id); //llamando método que muestra un producto en el formulario
		require_once "vista/admin/modificarServicio.php";

	}

	//Llamándo método para actualizar servicio
	public function actualizaServicio(){
		$id = $_POST['id_servicio'];
		$nomServ = $_POST['nombre_servicio'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$descuento = $_POST['descuento'];

		$objeto = new modelo();
		$objeto->modificarServicio($id,$nomServ, $descripcion, $precio, $descuento);
	}

	//llamando función eliminar un servicio
	public function borraServicio($id){
		$objeto = new modelo();
		$objeto->eliminarServicio($id);
		header("Location: principal.php?c=controlador&a=muestraServicios");
	}

	//Llamando método para buscar servicio
	public function buscaServicio(){
		$buscar = $_POST['buscarServicio'];
		$productos = new modelo();
		$data["objeto"] = $productos->buscarServicio($buscar);

		//mandando información del modelo a la vista
		require_once "vista/admin/adm_servicios.php";
	}


	/* --------------- MODELO Y VISTA DE USUARIOS ----------------- */


	//mostrando vista de usuario (html) creada en carpeta "vista", haciendo interactuar modelo con vista
	public function muestraUsuarios(){
		$objeto = new modelo();
		$data["titulo"] = "Servicios";
		$data["objeto"] = $objeto->getUsuarios();

		//mandando información del modelo a la vista
		require_once "vista/admin/adm_usuarios.php";
	}

     //mostrando vista de agregar usuario
	public function nuevoUsuario(){
		$data["titulo"] = "Agregar Usuario";
		require_once "vista/admin/agregarUsuario.php";
	}

    //Pasando valores a método insertarUsuario del modelo, para agregarlos en la vista de "agregarUsuario"
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

	//Mostrando vista para modificar usuario
	public function editarUsuario($id){
		$objeto = new modelo();
		$data["id_servicio"] = $id;
		$data["titulo"] = "Modificar Usuario";
		$data["objeto"] = $objeto->getUsuario($id); //llamando método que muestra un usuario en el formulario
		require_once "vista/admin/modificarUsuario.php";

	}

	//Llamándo método para actualizar usuario
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

	//llamando función eliminar un usuario
	public function borraUsuario($id){
		$objeto = new modelo();
		$objeto->eliminarUsuario($id);
		header("Location: principal.php?c=controlador&a=muestraUsuarios");
	}

	//Llamando método para buscar usuario
	public function buscaUsuario(){
		$buscar = $_POST['buscarUsuario'];
		$productos = new modelo();
		$data["objeto"] = $productos->buscarUsuario($buscar);

		//mandando información del modelo a la vista
		require_once "vista/admin/adm_usuarios.php";
	}

		/* --------------- MODELO Y VISTA DE PRODUCTOS ----------------- */


	//mostrando vista de productos (html) creada en carpeta "vista", haciendo interactuar modelo con vista
	public function muestraProductos(){
		$objeto = new modelo();
		$data["titulo"] = "Productos";
		$data["objeto"] = $objeto->getProductos();

		//mandando información del modelo a la vista
		require_once "vista/admin/adm_productos.php";
	}

     //mostrando vista de agregar producto
	public function nuevoProducto(){
		$data["titulo"] = "Agregar Producto";
		require_once "vista/admin/agregarProducto.php";
	}

    //Pasando valores a método insertarProducto del modelo, para agregarlos en la vista de "agregarProducto"
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

	//Mostrando vista para modificar producto
	public function editarProducto($id){
		$objeto = new modelo();
		$data["id_producto"] = $id;
		$data["titulo"] = "Modificar Producto";
		$data["objeto"] = $objeto->getProducto($id); //llamando método que muestra un producto en el formulario
		require_once "vista/admin/modificarProducto.php";

	}

	//Llamándo método para actualizar producto
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

	//llamando función eliminar un producto
	public function borraProducto($id){
		$objeto = new modelo();
		$objeto->eliminarProducto($id);
		header("Location: principal.php?c=controlador&a=muestraProductos");
	}

	//Llamando método para buscar producto
	public function buscaProducto(){
		$buscar = $_POST['buscarProducto'];
		$productos = new modelo();
		$data["objeto"] = $productos->buscarProducto($buscar);

		//mandando información del modelo a la vista
		require_once "vista/admin/adm_productos.php";
	}


		/* --------------- MODELO Y VISTA DE HISTORIAL PRODUCTOS ----------------- */


	//mostrando vista de proveedores (html) creada en carpeta "vista", haciendo interactuar modelo con vista
	public function muestraHistorialProd(){
		$objeto = new modelo();
		$data["titulo"] = "Historial Productos";
		$data["objeto"] = $objeto->getHistorialProd();

		//mandando información del modelo a la vista
		require_once "vista/admin/hist_ventasProductos.php";
	}

 	//Agregar valores a historial (PENDIENTE)


	//llamando función eliminar un historial producto
	public function borraHistorialProd($id){
		$objeto = new modelo();
		$objeto->eliminarHistorialProd($id);
		header("Location: principal.php?c=controlador&a=muestraHistorialProd");
	}

	//Llamando método para buscar historial producto
	public function buscaHistorialProd(){
		$buscar = $_POST['buscarHistPro'];
		$productos = new modelo();
		$data["objeto"] = $productos->buscarHistorialProd($buscar);

		//mandando información del modelo a la vista
		require_once "vista/admin/hist_ventasProductos.php";
	}

			/* --------------- MODELO Y VISTA DE HISTORIAL SERVICIOS ----------------- */


	//mostrando vista de proveedores (html) creada en carpeta "vista", haciendo interactuar modelo con vista
	public function muestraHistorialServ(){
		$objeto = new modelo();
		$data["titulo"] = "Historial Servicios";
		$data["objeto"] = $objeto->getHistorialServ();

		//mandando información del modelo a la vista
		require_once "vista/admin/hist_ventasServicios.php";
	}

 	//Agregar valores a historial (PENDIENTE)


	//llamando función eliminar un historial servicio
	public function borraHistorialServ($id){
		$objeto = new modelo();
		$objeto->eliminarHistorialServ($id);
		header("Location: principal.php?c=controlador&a=muestraHistorialServ");
	}

	//Llamando método para buscar historial producto
	public function buscaHistorialServ(){
		$buscar = $_POST['buscarHistServ'];
		$productos = new modelo();
		$data["objeto"] = $productos->buscarHistorialServ($buscar);

		//mandando información del modelo a la vista
		require_once "vista/admin/hist_ventasServicios.php";
	}


	/* --------------- MODELO Y VISTA DE HISTORIAL REALIZAR VENTA ----------------- */
		
	public function muestraIniciarVenta(){
		require_once "vista/ventas.php";
	}

	public function buscarPorCodigo($codigo){
		$objeto = new modelo();
		$objeto->buscaPorCodigo($codigo);
	}

	public function insertaProdTemp($idProducto,$idCompra,$cantidad){
		$objeto = new modelo();
		$error='';

		$producto = $objeto->selectIdProducto($idProducto);

		if($producto){
			$datosExiste = $objeto->porIdCompra($idProducto, $idCompra);

			if($datosExiste){
				$cantidad = $datosExiste->cantidad + $cantidad;
				$subtotal = $cantidad * $datosExiste->precio;

				$objeto->actualizaProductoVenta($idProducto,$idCompra,$cantidad,$subtotal);

			}else{
				$subtotal = $cantidad * $producto['precio_unitario'];

				$codBarras = $producto['cod_barras'];
				$nombre = $producto['nombre_producto'];
				$precio = $producto['precio_unitario'];

				$objeto->insertaEnTemp($idCompra,$idProducto,$codBarras,$nombre,$cantidad,$precio,$subtotal);
			}
		}else{
			$error = "No existe el producto";
		}
		$res['datos'] = $this->muestraTablaVentas($idCompra);
		$res['total'] = $this->sumaTotalVentas($idCompra);
		$res['error'] = $error;
		echo json_encode($res);
	}

	public function muestraTablaVentas($idCompra){
		$objeto = new modelo();
		$resultado = $objeto->porFolio($idCompra);

		$fila='';
		$numFila = 0;

		foreach ($resultado as $row) {
			$numFila++;
			$fila.= "<tr id = 'fila".$numFila."'>";

			$fila.= "<td>".$numFila."</td>";
			$fila.= "<td>".$row['cod_barras']."</td>";
			$fila.= "<td>".$row['nombre']."</td>";
			$fila.= "<td>".$row['cantidad']."</td>";
			$fila.= "<td>".$row['precio']."</td>";
			$fila.= "<td>".$row['subtotal']."</td>";
			$fila.= "<td> <a onclick=\"eliminarProducto(".$row['id_producto'].", '".$idCompra."' )\" class='borrar' >Eliminar</a> </td>";
 
			$fila.= "</tr>";
		}

		return $fila;
	}


	public function sumaTotalVentas($idCompra){
		$objeto = new modelo();
		$resultado = $objeto->porFolio($idCompra);

		$total = 0;

		foreach ($resultado as $row) {
			$total+=$row['subtotal'];
		}

		return $total;
	}


	public function eliminarProdVenta($idProducto,$idCompra){
		$objeto = new modelo();
		$datosExiste = $objeto->porIdCompra($idProducto, $idCompra);

			if($datosExiste){
				if($datosExiste->cantidad >1){
					$cantidad = $datosExiste->cantidad - 1;
					$subtotal = $cantidad * $datosExiste->precio;
					$objeto->actualizaProductoVenta($idProducto,$idCompra,$cantidad,$subtotal);
				}else{
					$objeto->eliminaProductoVenta($idProducto,$idCompra);
				}

			}

		$res['datos'] = $this->muestraTablaVentas($idCompra);
		$res['total'] = $this->sumaTotalVentas($idCompra);
		$res['error'] = '';
		echo json_encode($res);
	}



}

?>