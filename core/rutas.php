<?php 

	//generando de forma automática el nombre de la clase y del archivo de los controladores
	function cargarControlador($controlador){
		$nombreControlador = ucwords($controlador); //ucwords para que la primera letra sea mayúscula
		$archivoControlador = 'controlador/'.ucwords($nombreControlador).'.php';

		if(!is_file($archivoControlador)){
			$archivoControlador = 'controlador/'.CONTROLADOR_PRINCIPAL.'.php';
		}

		require_once $archivoControlador;
		$control = new $nombreControlador();
		return $control;
	}	 

	function cargarAccion($controlador,$accion,$id=null,$idCompra=null,$cantidad=null){

		if(isset($accion) && method_exists($controlador,$accion)){
			if($id!=null){

				if($idCompra!=null){

					if($cantidad!=null){
						//si está seteado a, id, cantidad e idCompra
						$controlador->$accion($id,$idCompra,$cantidad);

					}else{//si está seteado a, id e idCompra pero no cantidad
						$controlador->$accion($id,$idCompra);
					}

				}else{//si está seteado a e id pero no idCompra
					$controlador->$accion($id);
				}
				
			}else{//si está seteado a pero no id
				$controlador->$accion();		
			}
			
		}else{
			$controlador->ACCION_PRINCIPAL();
		}
	}

 
?>
