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
		

	



}

?>