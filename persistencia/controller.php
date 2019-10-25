<?php
header('Content-Type: text/html; charset=utf-8');
//ini_set("display_errors", "1");
//error_reporting(E_ALL);
require_once('modelo/modelo.php');
$modelo=new Modelo();
    $result = $modelo->traerCliente();
    print_r ($result);

/*
	if($tipo=='clasificaciones'){
		$result = $modelo->traerClasificaciones();
		if(isset($result)){
			echo $result;
		}
	}
	if($tipo=='laboratorios'){
		$result = $modelo->traerLaboratorios();
		if(isset($result)){
			echo $result;
		}
	}
	if($tipo=='orden'){
		$registros['clasificacion']=$_POST['clasificacion'];
		$registros['codigoLaboratorio']=$_POST['codigoLaboratorio'];
		$result = $modelo->traerOrden($registros);
		if(isset($result)){
			echo $result;
		}
	}
	if($tipo=='agregar'){
		$registros['clasificacion']=$_POST['clasificacion'];
		$registros['codigoLaboratorio']=$_POST['codigoLaboratorio'];
		$registros['orden']=$_POST['orden'];
		$registros['tCondicion']=$_POST['tCondicion'];
		$registros['vCondicion']=$_POST['vCondicion'];
		$registros['vCondicion2']=$_POST['vCondicion2'];
		$registros['tRegla']=$_POST['tRegla'];
		$registros['vRegla']=$_POST['vRegla'];
		$result = $modelo->agregarRegla($registros);
		if(isset($result)){
			echo $result;
		}
	}
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
