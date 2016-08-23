<?php
	require_once("../Model/conexion.php");
	require_once("../Model/permisos.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':

			// $cod_permiso		= $_POST["cod_permiso"];
			$permiso_nombre = $_POST["permiso_nombre"];

			try {
				gestion_permisos::Create($permiso_nombre);
				$mensaje = "Se registro exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/gestion_permisos.php?m=$mensaje");

			break;

		case 'u':
				$cod_permiso		= $_POST["cod_permiso"];
				$permiso_nombre = $_POST["permiso_nombre"];

				try{
					gestion_permisos::Update($cod_permiso,$permiso_nombre);
					$mensaje = "Se actualizo correctamente";
				}catch(Exception $e){
					$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
				}
				header("Location: ../View/gestion_permisos.php?m= ".$mensaje );
				break;

		case 'd':
					try {
		          $permisos = gestion_permisos::Delete(base64_decode($_REQUEST["pe"]));
		          $mensaje = "Se eliminó correctamente";
		          header("Location: ../View/gestion_permisos.php?m=".$mensaje);
		        } catch (Exception $e) {
		          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
		          header("Location: ../View/gestion_permisos.php?m=".$mensaje);
		        }
		      break;

	}

 ?>
