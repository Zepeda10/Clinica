<?php 

class modelo{

	private $db;
	private $objeto;

	public function __construct(){
		$this->db = Conectar::conexion();//almacenas la conexion 
		$this->objeto = array();
	}


	/* --------------- OPERACIONES CON PROVEEDORES ----------------- */

	//muestra todos los proveedores
	public function getProveedores(){
		$sql = " SELECT * FROM t_proveedores ";
		$resultado = $this->db->query($sql);

		while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->objeto[] = $row;//llenando array con valores de la consulta
		}
		return $this->objeto;
	}

	//Inserta un proveedor
	public function insertarProveedor($nomProv, $direccion, $telefono, $email){
		$sql = " INSERT INTO t_proveedores (nombre_proveedor, direccion, telefono, email) VALUES ('$nomProv' , '$direccion' , '$telefono' , '$email' ) ";

		$resultado = $this->db->query($sql);		
			
		header("Location: principal.php?c=controlador&a=muestraProveedores");
			
	}

	//Modificar un proveedor
	public function modificarProveedor($idProv,$nomProv, $direccion, $telefono, $email){
		$sql = " UPDATE t_proveedores SET nombre_proveedor = '$nomProv' , direccion = '$direccion' , telefono = '$telefono' , email = '$email' WHERE id = '$idProv' ";

		$resultado = $this->db->query($sql);		
			
		header("Location: principal.php?c=controlador&a=muestraProveedores");
	}

	//mostrando un proveedor en la vista "modificarProveedor", para actualizar los datos
	public function getProveedor($id){
		$sql = " SELECT * FROM t_proveedores WHERE id = '$id' LIMIT 1 ";
		$resultado = $this->db->query($sql);//ejecutando la consulta con la conexión establecida

		$row = $resultado->fetch(PDO::FETCH_ASSOC);
				
		return $row;

	}

	//Eliminar un proveedor
	public function eliminarProveedor($id){
		$resultado = $this->db->query(" DELETE FROM t_proveedores WHERE id = '$id' ");
	}

	//Busca un proveedor
	public function buscarProveedor($buscar){
		$sql = " SELECT * FROM t_proveedores WHERE id LIKE '%".$buscar."%' OR nombre_proveedor LIKE UPPER('%".$buscar."%') ";
		$resultado = $this->db->query($sql);

		while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->objeto[] = $row;//llenando array con valores de la consulta
		}

		return $this->objeto;
	}


		/* --------------- OPERACIONES CON SERVICIOS ----------------- */

	//muestra todos los proveedores
	public function getServicios(){
		$sql = " SELECT * FROM t_servicios ";
		$resultado = $this->db->query($sql);

		while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->objeto[] = $row;//llenando array con valores de la consulta
		}
		return $this->objeto;
	}

	//Inserta un servicio
	public function insertarServicio($nomServ, $descripcion, $precio, $descuento){
		$sql = " INSERT INTO t_servicios (nombre_servicio, descripcion, precio, descuento) VALUES ('$nomServ' , '$descripcion' , '$precio' , '$descuento' ) ";

		$resultado = $this->db->query($sql);		
			
		header("Location: principal.php?c=controlador&a=muestraServicios");
			
	}

	//Modificar un servicio
	public function modificarServicio($idServ,$nomServ, $descripcion, $precio, $descuento){
		$sql = " UPDATE t_servicios SET nombre_servicio = '$nomServ' , descripcion = '$descripcion' , precio = '$precio' , descuento = '$descuento' WHERE id_servicio = '$idServ' ";

		$resultado = $this->db->query($sql);		
			
		header("Location: principal.php?c=controlador&a=muestraServicios");
	}

	//mostrando un servicio en la vista "modificarServicio", para actualizar los datos
	public function getServicio($id){
		$sql = " SELECT * FROM t_servicios WHERE id_servicio = '$id' LIMIT 1 ";
		$resultado = $this->db->query($sql);//ejecutando la consulta con la conexión establecida

		$row = $resultado->fetch(PDO::FETCH_ASSOC);
				
		return $row;

	}

	//Eliminar un servicio
	public function eliminarServicio($id){
		$resultado = $this->db->query(" DELETE FROM t_servicios WHERE id_servicio = '$id' ");
	}

	//Busca un servicio
	public function buscarServicio($buscar){
		$sql = " SELECT * FROM t_servicios WHERE id_servicio LIKE '%".$buscar."%' OR nombre_servicio LIKE UPPER('%".$buscar."%') ";
		$resultado = $this->db->query($sql);

		while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->objeto[] = $row;//llenando array con valores de la consulta
		}

		return $this->objeto;
	}

		/* --------------- OPERACIONES CON USUARIOS ----------------- */

	//muestra todos los usuarios
	public function getUsuarios(){
		$sql = " SELECT * FROM t_usuario ";
		$resultado = $this->db->query($sql);

		while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->objeto[] = $row;//llenando array con valores de la consulta
		}
		return $this->objeto;
	}

	//Inserta un usuario
	public function insertarUsuario($tipo, $nombre, $email, $direccion, $telefono, $pass){
		$sql = " INSERT INTO t_usuario (tipo, nombre_usuario, email, direccion, telefono, pass) VALUES ('$tipo' , '$nombre' , '$email' , '$direccion' , '$telefono' , '$pass' ) ";

		$resultado = $this->db->query($sql);		
			
		header("Location: principal.php?c=controlador&a=muestraUsuarios");
			
	}

	//Modificar un usuario
	public function modificarUsuario($idUsu, $tipo, $nombre, $email, $direccion, $telefono, $pass){
		$sql = " UPDATE t_usuario SET tipo = '$tipo' , nombre_usuario = '$nombre' , email = '$email' , direccion = '$direccion' , telefono = '$telefono' , pass = '$pass' WHERE id_usuario = '$idUsu' ";

		$resultado = $this->db->query($sql);		
			
		header("Location: principal.php?c=controlador&a=muestraUsuarios");
	}

	//mostrando un usuario en la vista "modificarUsuario", para actualizar los datos
	public function getUsuario($id){
		$sql = " SELECT * FROM t_usuario WHERE id_usuario = '$id' LIMIT 1 ";
		$resultado = $this->db->query($sql);//ejecutando la consulta con la conexión establecida

		$row = $resultado->fetch(PDO::FETCH_ASSOC);
				
		return $row;

	}

	//Eliminar un usuario
	public function eliminarUsuario($id){
		$resultado = $this->db->query(" DELETE FROM t_usuario WHERE id_usuario = '$id' ");
	}

	//Busca un usuario
	public function buscarUsuario($buscar){
		$sql = " SELECT * FROM t_usuario WHERE id_usuario LIKE '%".$buscar."%' OR nombre_usuario LIKE UPPER('%".$buscar."%') ";
		$resultado = $this->db->query($sql);

		while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->objeto[] = $row;//llenando array con valores de la consulta
		}

		return $this->objeto;
	}


			/* --------------- OPERACIONES CON PRODUCTOS ----------------- */

	//muestra todos los productos
	public function getProductos(){
		$sql = " SELECT * FROM t_productos ";
		$resultado = $this->db->query($sql);

		while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->objeto[] = $row;//llenando array con valores de la consulta
		}
		return $this->objeto;
	}

	//Inserta un producto
	public function insertarProducto($codigo, $nombre, $descripcion, $cantidad, $precio, $descuento, $idProv){
		$sql = " INSERT INTO t_productos (cod_barras, nombre_producto, descripcion, cantidad, precio_unitario, descuento, id_proveedor) VALUES ('$codigo' , '$nombre' , '$descripcion' , '$cantidad' , '$precio' , '$descuento' , '$idProv' ) ";

		$resultado = $this->db->query($sql);		
			
		header("Location: principal.php?c=controlador&a=muestraProductos");
			
	}

	//Modificar un producto
	public function modificarProducto($idProducto, $codigo, $nombre, $descripcion, $cantidad, $precio, $descuento, $idProv){
		$sql = " UPDATE t_productos SET cod_barras = '$codigo' , nombre_producto = '$nombre' , descripcion = '$descripcion' , cantidad = '$cantidad' , precio_unitario = '$precio' , descuento = '$descuento' , id_proveedor = '$idProv' WHERE id_producto = '$idProducto' ";

		$resultado = $this->db->query($sql);		
			
		header("Location: principal.php?c=controlador&a=muestraProductos");
	}

	//mostrando un producto en la vista "modificarProducto", para actualizar los datos
	public function getProducto($id){
		$sql = " SELECT * FROM t_productos WHERE id_producto = '$id' LIMIT 1 ";
		$resultado = $this->db->query($sql);//ejecutando la consulta con la conexión establecida

		$row = $resultado->fetch(PDO::FETCH_ASSOC);
				
		return $row;

	}

	//Eliminar un producto
	public function eliminarProducto($id){
		$resultado = $this->db->query(" DELETE FROM t_productos WHERE id_producto = '$id' ");
	}

	//Busca un producto
	public function buscarProducto($buscar){
		$sql = " SELECT * FROM t_productos WHERE cod_barras LIKE '%".$buscar."%' OR nombre_producto LIKE UPPER('%".$buscar."%') ";
		$resultado = $this->db->query($sql);

		while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->objeto[] = $row;//llenando array con valores de la consulta
		}

		return $this->objeto;
	}



		/* --------------- OPERACIONES CON HISTORIAL PRODUCUTOS ----------------- */

	//muestra el hisorial de productos
	public function getHistorialProd(){
		$sql = " SELECT * FROM t_historial_producto ";
		$resultado = $this->db->query($sql);

		while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->objeto[] = $row;//llenando array con valores de la consulta
		}
		return $this->objeto;
	}

	//Insertar historial (PENDIENTE)
	


	//Eliminar historial producto 
	public function eliminarHistorialProd($id){
		$resultado = $this->db->query(" DELETE FROM t_historial_producto WHERE id = '$id' ");
	}

	//Busca  hisorial de producto
	public function buscarHistorialProd($buscar){
		$sql = " SELECT * FROM t_historial_producto WHERE cod_barras LIKE '%".$buscar."%' OR nombre_producto LIKE UPPER('%".$buscar."%') ";
		$resultado = $this->db->query($sql);

		while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->objeto[] = $row;//llenando array con valores de la consulta
		}

		return $this->objeto;
	}

			/* --------------- OPERACIONES CON HISTORIAL SERVICIOS ----------------- */

	//muestra el hisorial de servicios
	public function getHistorialServ(){
		$sql = " SELECT * FROM t_historial_servicio ";
		$resultado = $this->db->query($sql);

		while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->objeto[] = $row;//llenando array con valores de la consulta
		}
		return $this->objeto;
	}

	//Insertar historial (PENDIENTE)
	


	//Eliminar historial servicios 
	public function eliminarHistorialServ($id){
		$resultado = $this->db->query(" DELETE FROM t_historial_servicio WHERE id = '$id' ");
	}

	//Busca  hisorial de servicios
	public function buscarHistorialServ($buscar){
		$sql = " SELECT * FROM t_historial_servicio WHERE id_servicio LIKE '%".$buscar."%' OR nombre_servicio LIKE UPPER('%".$buscar."%') ";
		$resultado = $this->db->query($sql);

		while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->objeto[] = $row;//llenando array con valores de la consulta
		}

		return $this->objeto;
	}


		/* --------------- OPERACIONES CON INIVIAR VENTA ----------------- */

	
	public function buscaPorCodigo($codigo){
		$sql = "SELECT * FROM t_productos WHERE cod_barras = '$codigo' LIMIT 1 ";
		$datos = $this->db->query($sql)->fetch();//ejecutando la consulta con la conexión establecida

		//$datos->fetch();

		$res['existe'] = false;
		$res['error'] = '';
		$res['datos'] = '';
				
		if($datos){
			$res['datos'] = $datos;
			$res['existe'] = true;
		} else{
			$res['error'] = 'No existe el producto';
			$res['existe'] = false;
		}

		echo json_encode($res);
	}

	//Comprobando si ya existe un producto escaneado, para solo cambiar su cantidad
	public function porIdCompra($idProducto, $folio){
		$sql = "SELECT * FROM t_temp_comprapro WHERE folio = '$folio' AND id_producto = '$idProducto' LIMIT 1";
		$datos = $this->db->query($sql)->fetch();

		return $datos;
	}

	public function selectIdProducto($idProducto){
		$sql = "SELECT * FROM t_productos WHERE id_producto = '$idProducto' LIMIT 1";
		$datos = $this->db->query($sql)->fetch();
		return $datos;
	}

	public function insertaEnTemp($idCompra,$idProducto,$codBarras,$nombre,$cantidad,$precio,$subtotal){

		$sql = "INSERT INTO t_temp_comprapro (folio,id_producto,cod_barras,nombre,cantidad,precio,subtotal) VALUES ('$idCompra' , '$idProducto' , '$codBarras' , '$nombre' , '$cantidad' , '$precio' , '$subtotal' )";

		$datos = $this->db->query($sql);
	}
		


}


?>