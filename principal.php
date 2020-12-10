<?php   
	
	//desde este index se relaciona la conexión con el controlador, y en el controlador ya está incluída la vista y el
	require_once "db/config.php";
	require_once "core/rutas.php";
	require_once "db/conexion.php";
	require_once "controlador/Controlador.php";

	/*
	Valdando si existe el controlador y la acción en la URL, para hacerla dinámica, el controlador solo es uno, "VehiculosControlador", y las acciones son las que están en el controlador: index, nuevo, etc.
	*/

	if(isset($_GET['c'])){
		$controlador = cargarControlador($_GET['c']);

		if(isset($_GET['a'])){	

			if(isset($_GET['id'])){

				if(isset($_GET['idCompra'])){

					if(isset($_GET['cantidad'])){
						//si está seteado a, id, cantidad e idCompra
						cargarAccion($controlador,$_GET['a'], $_GET['id'], $_GET['idCompra'], $_GET['cantidad']);

					}else{//si está seteado a, id e idCompra pero no cantidad
						cargarAccion($controlador,$_GET['a'], $_GET['id'], $_GET['idCompra']);
					}

				}else{//si está seteado a e id pero no idCompra
					cargarAccion($controlador,$_GET['a'], $_GET['id']);
				}
				
			}else{//si está seteado a pero no id
				cargarAccion($controlador,$_GET['a']);		
			}

		}else{//si no está seteado a
			cargarAccion($controlador,ACCION_PRINCIPAL);
		}

		
	}else{
		$controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
		$accionTmp=ACCION_PRINCIPAL;
		$controlador->$accionTmp();
	}

?>