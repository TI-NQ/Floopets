<?php
	require_once("../Model/conexion.php");
	require_once("../Model/denuncia.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':


			$td_cod_tipo_denuncia		= $_POST["td_cod_tipo_denuncia"];
			$de_contacto  =$_POST["de_contacto"];
			$nombre_de_contacto 	= strtolower(str_replace('ñ', 'n', $de_contacto));
			$nombre_de_contacto 	= strtolower(str_replace(' ', '', $nombre_de_contacto));
			$de_descripcion			= $_POST["de_descripcion"];
			$de_telefono  =$_POST["de_telefono"];
			$de_nombre    = $_POST["de_nombre"];
			//$de_imagen			=$_POST["de_imagen"];
			$de_imagen	= $_FILES['de_imagen']['name'];

			$count_galeria			= count($_FILES['de_imagen']['name']);

			try {
				if($count_galeria >= 1){
					include("Upload_de_image.php");
				}
				Gestion_denuncia::Create($td_cod_tipo_denuncia,$de_descripcion,$de_contacto,$de_telefono,$de_nombre,	$de_imagen[0]);
				$mensaje = "Se creo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/dashboard.php?p=".base64_encode("Gestion_denuncia"));

			break;
			case 'u':
			$de_cod_denuncia =$_POST["de_cod_denuncia"];
			$td_cod_tipo_denuncia		= $_POST["td_cod_tipo_denuncia"];
			$de_descripcion			= $_POST["de_descripcion"];
			$de_contacto  =$_POST["de_contacto"];
			$de_telefono  =$_POST["de_telefono"];
			$de_nombre = $_POST["de_nombre"];
			$de_imagen			=$_POST["de_imagen"];

			try {
				Gestion_denuncia::Update($de_cod_denuncia,$td_cod_tipo_denuncia,$de_descripcion,$de_contacto,$de_telefono,$de_nombre,$de_imagen);
				$mensaje = "Se actualizo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/dashboard.php?p=".base64_encode("Gestion_denuncia"));

				break;

		case 'd':
			try {
          $denuncia = Gestion_denuncia::Delete($_REQUEST["dn"]);
          $msn  = "se elimino correctamente";
					$tmsn = "success";
          header("Location: ../View/dashboard.php?p=".base64_encode("Gestion_denuncia")."&m=".base64_encode($msn)."&tm=".base64_encode($tmsn));
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
					$tmsn = "error";
          header("Location: ../View/dashboard.php?p=".base64_encode("Gestion_denuncia")."&m=".base64_encode($msn)."&tm=".base64_encode($tmsn));
        }
      break;

	}

 ?>
