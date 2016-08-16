<?php
	require_once("../Model/conexion.php");
	require_once("../Model/denuncia.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':

			$usu_cod_usuario		= $_POST["usu_cod_usuario"];
			// $td_cod_denuncia		= $_POST["td_cod_denuncia"];
			$nombre_cod_usuario 	= strtolower(str_replace('ñ', 'n', $usu_cod_usuario));
			$nombre_cod_usuario 	= strtolower(str_replace(' ', '', $nombre_cod_usuario));
			$de_descripcion			= $_POST["de_descripcion"];
			$de_fecha				= $_POST["de_fecha"];
			$de_fecha =   getdate();
			$de_imagen			=$_POST["de_imagen"];
			$count_galeria			= count($_FILES['ado_imagen']['name']);
			$de_nombre = $_POST["de_nombre"];
			$de_contacto  =$_POST["de_contacto"];
			$de_telefono  =$_POST["de_telefono"];

			try {
				if($count_galeria >= 1){
					include("Upload_de_image.php");
				}
				Gestion_denuncia::Create($usu_cod_usuario,$de_descripcion,$de_fecha,$de_imagen,$de_nombre,$de_contacto,$de_telefono);
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
				$de_imagen			=$_POST["de_imagen"];
				$de_nombre = $_POST["de_nombre"];
				$de_contacto  =$_POST["de_contacto"];
				$de_telefono  =$_POST["de_telefono"];

			try {
				Gestion_denuncia::Update($de_cod_denuncia,$usu_cod_usuario,$td_cod_denuncia,$de_descripcion,$de_fecha,$de_imagen,$de_nombre,$de_contacto,$de_telefono);
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
