<?php
	require_once("../Model/conexion.php");
	require_once("../Model/denuncia.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':

			$usu_cod_usuario		= $_POST["usu_cod_usuario"];
			$td_cod_denuncia		= $_POST["td_cod_denuncia"];
			$de_descripcion			= $_POST["de_descripcion"];
			$de_fecha				= $_POST["de_fecha"];

			try {
				Gestion_denuncia::Create($usu_cod_usuario,$td_cod_denuncia,$de_descripcion,$de_fecha);
				$mensaje = "Se creo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/Gestion_denuncia.php?m=$mensaje");

			break;
			case 'u':
				$de_cod_denuncia		= $_POST["de_cod_denuncia"];
				$usu_cod_usuario		= $_POST["usu_cod_usuario"];
				$td_cod_denuncia		= $_POST["td_cod_denuncia"];
				$de_descripcion			= $_POST["de_descripcion"];
				$de_fecha				= $_POST["de_fecha"];

			try {
				Gestion_denuncia::Update($de_cod_denuncia,$usu_cod_usuario,$td_cod_denuncia,$de_descripcion,$de_fecha);
				$mensaje = "Se actualizo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/Gestion_denuncia.php?m=$mensaje");

				break;

		case 'd':
			try {
          $denuncia = Gestion_denuncia::Delete(base64_decode($_REQUEST["dn"]));
          $mensaje = "se elimino correctamente";
          header("Location: ../View/Gestion_denuncia.php?m=".$mensaje);
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/Gestion_denuncia.php?m=".$mensaje);
        }
      break;
			
	}

 ?>
