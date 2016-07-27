<?php 
	require_once("../Model/conexion.php");
	require_once("../Model/tipo_organizacion.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':
				
			$to_nombre			= $_POST["to_nombre"];

			try {
				Gestion_tipo_organizacion::Create($to_nombre);
				$mensaje = "Se creo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/registrar_tipo_organizacion.php?m=$mensaje");

			break;
		
		default:
			# code...
			break;
	}

 ?>	