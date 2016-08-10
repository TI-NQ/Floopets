<?php
	require_once("../Model/conexion.php");
	require_once("../Model/donacion.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':

			$don_fecha						= $_POST["don_fecha"];
			$don_descripcion				= $_POST["don_descripcion"];
			$don_imagen						= $_POST["don_imagen"];
			$org_cod_organizacion			= $_POST["org_cod_organizacion"];
			$td_cod_tipo_donacion			= $_POST["td_cod_tipo_donacion"];
			$usu_cod_usuario				= $_POST["usu_cod_usuario"];

			try {
				Gestion_donacion::Create($don_descripcion,$don_fecha,$don_imagen,$org_cod_organizacion,$td_cod_tipo_donacion,$usu_cod_usuario);
				$mensaje = "Se creo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/gestion_donacion.php?m=$mensaje");

			break;
			case 'u':
				$don_cod_donacion				= $_POST["don_cod_donacion"];
				$don_fecha						= $_POST["don_fecha"];
				$don_descripcion				= $_POST["don_descripcion"];
				$don_imagen						= $_POST["don_imagen"];
				$org_cod_organizacion			= $_POST["org_cod_organizacion"];
				$td_cod_tipo_donacion			= $_POST["td_cod_tipo_donacion"];
				$usu_cod_usuario				= $_POST["usu_cod_usuario"];

			try {
				Gestion_donacion::Update($don_cod_donacion,$don_descripcion,$don_fecha,$don_imagen,$org_cod_organizacion,$td_cod_tipo_donacion);
				$mensaje = "Se actualizo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/gestion_donacion.php?m=$mensaje");

				break;

		case 'd':
			try {
          $donacion = Gestion_donacion::Delete(base64_decode($_REQUEST["do"]));
          $mensaje = "se elimino correctamente";
          header("Location: ../View/gestion_donacion.php?m=".$mensaje);
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/gestion_donacion.php?m=".$mensaje);
        }
      break;
			
	}

 ?>
