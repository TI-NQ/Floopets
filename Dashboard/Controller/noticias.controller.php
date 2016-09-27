<?php
	require_once("../Model/conexion.php");
	require_once("../Model/noticias.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':

			// $cod_permiso		= $_POST["cod_permiso"];
			$usu_cod_usuario = $_POST["usu_cod_usuario"];
			$not_titulo		=$_POST["not_titulo"];
			$not_contenido		=$_POST["not_contenido"];
			$not_galeria		=$_POST["not_galeria"];
			$nombre_not_galeria 	= strtolower(str_replace('ñ', 'n', $not_titulo));
			$nombre_not_galeria 	= strtolower(str_replace(' ', '', $nombre_not_galeria));
			$not_portada		=$_POST["not_portada"];
			$not_palabras_clave		=$_POST["not_palabras_clave"];
			$count_galeria			= count($_FILES['not_galeria']['name']);
			try {
				if($count_galeria >= 1){
					include("Upload_not_image.php");
				}
				Gestion_noticia::Create($usu_cod_usuario,$not_titulo,$not_contenido,$not_galeria,$not_portada,$not_palabras_clave);
				$mensaje = "Se registro exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/gestion_noticias.php?m=".$mensaje);

			break;

		case 'u':
				$cod_rol		= $_POST["cod_rol"];
				$rol_nombre = $_POST["rol_nombre"];

				try{
					gestion_rol::Update($cod_rol,$rol_nombre);
					$mensaje = "Se actualizo correctamente";
				}catch(Exception $e){
					$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
				}
				header("Location: ../View/gestion_roles.php?m= ".$mensaje );
				break;

		case 'd':
					try {
		          $rol = gestion_rol::Delete(base64_decode($_REQUEST["ro"]));
		          $mensaje = "Se eliminó correctamente";
		          header("Location: ../View/gestion_roles.php?m=".$mensaje);
		        } catch (Exception $e) {
		          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
		          header("Location: ../View/gestion_roles.php?m=".$mensaje);
		        }
		      break;

	}

 ?>
