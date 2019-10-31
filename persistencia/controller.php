<?php
header('Content-Type: text/html; charset=utf-8');
//ini_set("display_errors", "1");
//error_reporting(E_ALL);
require_once('modelo/modelo.php');
$modelo=new Modelo();
    /*$result = $modelo->traerCliente();
    print_r ($result);*/
	
		$registros['nombre']=$_POST['nombre'];
		$registros['apellido']=$_POST['apellido'];
		$registros['telefono']=$_POST['telefono'];
		$registros['direccion']=$_POST['direccion'];
		$registros['fechaNacimiento']=$_POST['fechaNacimiento'];
		$registros['ciudad']=$_POST['ciudad'];
		$registros['tipoDocumento']=$_POST['tipoDocumento'];
		$registros['numeroDocumento']=$_POST['numeroDocumento'];
		$result = $modelo->agregarCliente($registros);
		
		header("location:../index.php");

		
/*
	if($tipo=='eliminar'){
		$registros['clasificacion']=$_POST['clasificacion'];
		$registros['codigoLaboratorio']=$_POST['codigoLaboratorio'];
		$registros['orden']=$_POST['orden'];
		$result = $modelo->eliminarRegla($registros);
		if(isset($result)){
			echo $result;
		}
	}
	if($tipo=='productos'){
		$result = $modelo->traerProductos($_POST['clasificacion']);
		if(isset($result)){
			echo $result;
		}
	}
	if($tipo=='procesar'){
		$result = $modelo->procesarRecargos();
		if(isset($result)){
			echo $result;
		}
	}
	if($tipo=='listas'){
		$result = $modelo->traerListasVigentes();
		if(isset($result)){
			echo $result;
		}
	}
	if($tipo=='exclusiones'){
		$result = $modelo->traerListasExclusion();
		if(isset($result)){
			echo $result;
		}
	}
	if($tipo=='agregarE'){
		$result = $modelo->agregarListaExclusion($_POST['lista']);
		if(isset($result)){
			echo $result;
		}
	}
	if($tipo=='eliminarE'){
		$result = $modelo->eliminarListaExclusion($_POST['lista']);
		if(isset($result)){
			echo $result;
		}
	}
}*/
?>
