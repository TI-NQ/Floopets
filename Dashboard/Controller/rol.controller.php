<?php
	require_once("../Model/conexion.php");
	require_once("../Model/rol.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':

			// $cod_permiso		= $_POST["cod_permiso"];
			$rol_nombre = $_POST["rol_nombre"];

			try {
				gestion_rol::Create($rol_nombre);
				$mensaje = "Se registro exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/gestion_roles.php?m=$mensaje");

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
