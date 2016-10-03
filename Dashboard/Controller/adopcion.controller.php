<?php
	require_once("../Model/conexion.php");
	require_once("../Model/adopcion.class.php");
	require_once("../Model/animal.class.php");


	

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'aceptar':
			


			try {
					Gestion_animal::UpdateEstadosoli(($_REQUEST["an"]));
					Gestion_animal::UpdateEstadoani(($_REQUEST["an"]));
				
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			//header("Location: ../View/dashboard.php?p=".base64_encode("historial_adopciones")."&m=$mensaje");

			break;

	}

 ?>
