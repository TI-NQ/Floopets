<?php
session_start();
	require_once("../Model/conexion.php");
	require_once("../Model/donacion.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':
			$don_nombre						= $_POST["don_nombre"];
			// $don_fecha						= $_POST["don_fecha"];
			$don_descripcion				= $_POST["don_descripcion"];

			$nombre_don_imagen 	= strtolower(str_replace('ñ', 'n', $don_nombre));
			$nombre_don_imagen 	= strtolower(str_replace(' ', '', $nombre_don_imagen));
			$org_cod_organizacion			= $_POST["org_cod_organizacion"];
			$td_cod_tipo_donacion			= $_POST["td_cod_tipo_donacion"];
			$usu_cod_usuario				= $_SESSION["usu_cod_usuario"];
			$don_imagen						= $_POST["don_imagen"];
			$count_galeria			= count($_FILES['don_imagen']['name']);

			try {
				if($count_galeria >= 1){
					include("Upload_don_image.php");
				}
				Gestion_donacion::Create($don_nombre,$don_descripcion,$don_imagen,$org_cod_organizacion,$td_cod_tipo_donacion,$usu_cod_usuario);
				$mensaje = base64_encode("Se creo exitosamente") ;
				$tipo_mensaje=base64_encode("success") ;
				header("Location: ../View/dashboard.php?p=".base64_encode("gestion_donaciones")."&m=$mensaje&tm=$tipo_mensaje");
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
				header("Location: ../View/gestion_donacion.php?m=".$mensaje);
			}


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
			header("Location: ../View/dashboard.php?p=".base64_encode("gestion_donaciones"));

				break;

		case 'd':
			try {
          $donacion = Gestion_donacion::Delete($_REQUEST["do"]);
          $mensaje = "se elimino correctamente";
          header("Location: ../View/dashboard.php?p=".base64_encode("gestion_donaciones"));
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/dashboard.php?p=".base64_encode("gestion_donaciones"));
        }
      break;

	}

 ?>
