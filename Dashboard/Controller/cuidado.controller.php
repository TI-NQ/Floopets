<?php 
	require_once("../Model/conexion.php");
	require_once("../Model/cuidado.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':
				
			$cu_nombre			= $_POST["cu_nombre"];
			$nombre_cuidado 	= strtolower(str_replace('ñ', 'n', $cu_nombre));
			$nombre_cuidado 	= strtolower(str_replace(' ', '', $nombre_cuidado));
			$cu_descripcion 	= $_POST["cu_descripcion"];
			$galeria   			= $_POST["galeria"];
			$count_galeria		= count($_FILES['Imagen_Upload']['name']);
			try {
				
				if($count_galeria >= 1){ 
					include("Upload_image.php");
				} 
				Gestion_cuidado::Create($cu_nombre,$cu_descripcion,$galeria);
				$mensaje = "Se creo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/gestion_cuidado.php?m=$mensaje");

			break;
			case 'u':
				$cu_cod_cuidado		= $_POST["cu_cod_cuidado"];
				$cu_nombre			= $_POST["cu_nombre"];
				$cu_descripcion 	= $_POST["cu_descripcion"];
				$galeria 			= $_POST["galeria"];

			try {
				Gestion_cuidado::Update($cu_cod_cuidado,$cu_nombre,$cu_descripcion,$galeria,$video);
				$mensaje = "Se actializo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/dashboard.php?p=".base64_encode("gestion_cuidado"));
			break;
		
		case 'd':
			try {
          $cuidado = Gestion_cuidado::Delete(base64_decode($_REQUEST["cu"]));
          $mensaje = "se elimino correctamente";
          header("Location: ../View/dashboard.php?p=".base64_encode("gestion_cuidado"));
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/dashboard.php?p=".base64_encode("gestion_cuidado"));
        }
      
			break;
	}

 ?>	