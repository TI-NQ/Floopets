<?php
	require_once("../Model/conexion.php");
	require_once("../Model/raza.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':

			$ra_nombre		= $_POST["ra_nombre"];
			$nombre_raza 	= strtolower(str_replace('ñ', 'n', $ra_nombre));
			$nombre_raza 	= strtolower(str_replace(' ', '', $nombre_raza));
			$ta_cod_tipo_animal		= $_POST["ta_cod_tipo_animal"];
			$cu_cod_cuidado		= $_POST["cu_cod_cuidado"];
			$ra_historia			= $_POST["ra_historia"];
			$ra_imagen				= $_POST["ra_imagen"];
			$count_galeria			= count($_FILES['ra_imagen']['name']);
			

			try {
				if($count_galeria >= 1){ 
					include("Upload_ra_imagen.php");
				} 
				Gestion_raza:: Create($ra_nombre,$ta_cod_tipo_animal,$cu_cod_cuidado,$ra_historia,$ra_imagen);
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
				$cu_cod_cuidado		= $_POST["cu_cod_cuidado"];
				$ra_historia			= $_POST["ra_historia"];
				$ra_imagen				= $_POST["ra_imagen"];
				

			try {
				Gestion_raza:: Update($ra_cod_raza,$ra_nombre,$ta_cod_tipo_animal,$cu_cod_cuidado,$ra_historia,$ra_imagen);
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
