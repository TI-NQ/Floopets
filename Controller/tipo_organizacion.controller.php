<?php 
	require_once("../Model/db_conn.php");
	require_once("../Model/empresa.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':
				
			$to_cod_tipo_organizacion 	= $_POST["to_cod_tipo_organizacion"];
			$to_nombre			= $_POST["to_nombre"];

			try {
				Gestion_tipo_organizacion::Create($to_nombre);
				$mensaje = "Se elimino exitosamente";
			header("Location: ../View/registrar_tipo_organizacion.php?m=".$mensaje);
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
				header("Location: ../View/registrar_tipo_organizacion.php?m=".$mensaje);
			}

			break;
		
		default:
			# code...
			break;
	}

 ?>	