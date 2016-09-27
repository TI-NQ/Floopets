<?php
	require_once("../Model/conexion.php");
	require_once("../Model/tipo_denuncia.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':

			$td_nombre			= $_POST["td_nombre"];
			$td_estado 	    = $_POST["td_estado"];

			try {
				Gestion_tipo_denuncia::Create($td_nombre,$td_estado);
				$mensaje = "Se creo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/Gestion_tipo_denuncia.php?m=".$mensaje);

			break;
			case 'u':
      $td_nombre			= $_POST["td_nombre"];
      $td_estado 	    = $_POST["td_estado"];


			try {
				Gestion_tipo_denuncia::Update($td_nombre,$td_estado);
				$mensaje = "Se actializo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/Gestion_tipo_denuncia.php?m=".$mensaje);
			break;

		case 'd':
			try {
          $cuidado = Gestion_tipo_denuncia::Delete(base64_decode($_REQUEST["td"]));
          $mensaje = "se elimino correctamente";
          header("Location: ../View/Gestion_tipo_denuncia.php?m=".$mensaje);
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/Gestion_tipo_denuncia.php?m=".$mensaje);
        }

			break;
	}
