<?php
	require_once("../Model/conexion.php");
	require_once("../Model/adopcion.class.php");
	

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'aceptar':
			$usu_cod_usuario 		= $_POST["usu_cod_usuario"];
			$ani_cod_animal 		= $_POST["ani_cod_animal"];


			try {
				
				Gestion_adopcion::Create($ani_cod_animal,$usu_cod_usuario);
				$mensaje = "Se registro exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			//header("Location: ../View/dashboard.php?p=".base64_encode("historial_adopciones")."&m=$mensaje");

			break;

	}

 ?>
