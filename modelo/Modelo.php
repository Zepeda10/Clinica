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

	//Modificar un proveedor
	public function modificarServicio($idServ,$nomServ, $descripcion, $precio, $descuento){
		$sql = " UPDATE t_servicios SET nombre_servicio = '$nomServ' , descripcion = '$descripcion' , precio = '$precio' , descuento = '$descuento' WHERE id_servicio = '$idServ' ";

		$resultado = $this->db->query($sql);		
			
		header("Location: principal.php?c=controlador&a=muestraServicios");
	}

	//mostrando un proveedor en la vista "modificarProveedor", para actualizar los datos
	public function getServicio($id){
		$sql = " SELECT * FROM t_servicios WHERE id_servicio = '$id' LIMIT 1 ";
		$resultado = $this->db->query($sql);//ejecutando la consulta con la conexión establecida

		$row = $resultado->fetch(PDO::FETCH_ASSOC);
				
		return $row;

	}

	//Eliminar un proveedor
	public function eliminarServicio($id){
		$resultado = $this->db->query(" DELETE FROM t_servicios WHERE id_servicio = '$id' ");
	}

	//Busca un proveedor
	public function buscarServicio($buscar){
		$sql = " SELECT * FROM t_servicios WHERE id_servicio LIKE '%".$buscar."%' OR nombre_servicio LIKE UPPER('%".$buscar."%') ";
		$resultado = $this->db->query($sql);

		while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->objeto[] = $row;//llenando array con valores de la consulta
		}

		return $this->objeto;
	}

	

		


}



?>