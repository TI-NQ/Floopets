<?php
	require_once("../Model/conexion.php");
	require_once("../Model/vacuna.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':

			$va_cod_vacuna 	= $_POST["va_cod_vacuna"];
			$vac_nombre			= $_POST["vac_nombre"];
      $fecha          = $_POST["fecha"];
			try {
				gestion_vacuna::Create($vac_nombre,$fecha);
				$mensaje = "Se registro exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/vacunas.php?m=$mensaje");

			break;

		default:
			# code...
			break;
	}

 ?>
