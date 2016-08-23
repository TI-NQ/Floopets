<?php
	require_once("../Model/conexion.php");
	require_once("../Model/raza.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':

			$ra_nombre		= $_POST["ra_nombre"];
			$ta_cod_tipo_animal		= $_POST["ta_cod_tipo_animal"];
			

			try {
				Gestion_raza:: Create($ra_nombre,$ta_cod_tipo_animal);
				$mensaje = "Se creo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/Gestion_raza.php?m=$mensaje");

			break;
			case 'u':
				$ra_cod_raza		= $_POST["ra_cod_raza"];
				$ra_nombre		= $_POST["ra_nombre"];
				$ta_cod_tipo_animal		= $_POST["ta_cod_tipo_animal"];
				

			try {
				Gestion_raza:: Update($ra_cod_raza,$ra_nombre,$ta_cod_tipo_animal);
				$mensaje = "Se actualizo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/Gestion_raza.php?m=$mensaje");

				break;

		case 'd':
			try {
          $raza = Gestion_raza::Delete(base64_decode($_REQUEST["rz"]));
          $mensaje = "se elimino correctamente";
          header("Location: ../View/Gestion_raza.php?m=".$mensaje);
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/Gestion_raza.php?m=".$mensaje);
        }
      break;
			
	}

 ?>
