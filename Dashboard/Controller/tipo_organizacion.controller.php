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
			header("Location: ../View/gestion_tipo_organizacion.php?m=$mensaje");

			break;
			case 'u':
				$to_cod_tipo_organizacion 	= $_POST["to_cod_tipo_organizacion"];
				$to_nombre					= $_POST["to_nombre"];

			try {
				Gestion_tipo_organizacion::Update($to_cod_tipo_organizacion,$to_nombre);
				$mensaje = "Se actualizo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/gestion_tipo_organizacion.php?m=$mensaje");

				break;

		case 'd':
			try {
          $tipo_organizacion = Gestion_tipo_organizacion::Delete(base64_decode($_REQUEST["tp"]));
          $mensaje = "se elimino correctamente";
          header("Location: ../View/gestion_tipo_organizacion.php?m=".$mensaje);
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/gestion_tipo_organizacion.php?m=".$mensaje);
        }
      break;
			
	}

 ?>
