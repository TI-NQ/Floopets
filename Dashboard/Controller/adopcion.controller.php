<?php
	require_once("../Model/conexion.php");
	require_once("../Model/adopcion.class.php");
	require_once("../Model/animal.class.php");




	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'aceptar':


			$ani_estado="Adoptado";
					$sol_estado="Aprobado";
			try {

					$mensaje = "Adopcion aprobada";
					$tipo_mensaje="success";
					Gestion_animal::UpdateEstadosoli($sol_estado,($_REQUEST["an"]));
					Gestion_animal::UpdateEstadoani($ani_estado,($_REQUEST["an"]));
					Gestion_adopcion::Create(($_REQUEST["an"]),($_REQUEST["us"]));


			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
header("Location: ../View/dashboard.php?p=".base64_encode("solicitudes_adopcion")."&m=$mensaje&tm=$tipo_mensaje");


			break;
			case 'cancelarsoli':
			
				
					$sol_estado="Cancelado";
					$ani_estado="adoptar";

			try {
					$mensaje = "se cancelo su solicitud";
					$tipo_mensaje="success";
					Gestion_animal::UpdateEstadosoli($sol_estado,($_REQUEST["an"]));
					Gestion_animal::UpdateEstadoani($ani_estado,($_REQUEST["an"]));
					
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
				
			}
			
			header("Location: ../View/dashboard.php?p=".base64_encode("solicitudes_adopcion")."&m=$mensaje&tm=$tipo_mensaje");
			break;



	}

 ?>
