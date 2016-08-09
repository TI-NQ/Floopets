<?php
	require_once("../Model/conexion.php");
	require_once("../Model/usuarios.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':

			// $usu_cod_usuario		= $_POST["usu_cod_usuario"];
			$usu_cod_usuario				=$_POST["usu_cod_usuario"];
			$usu_nombre 			= $_POST["usu_nombre"];
			$usu_apellido 		=$_POST["usu_apellido"];
			$usu_telefono			=$_POST["usu_telefono"];

			$usu_email				=$_POST["usu_email"];
			$cod_rol					=$_POST["cod_rol"];

			try {
				gestion_usuarios::Create($usu_cod_usuario,$usu_nombre,$usu_apellido,$usu_telefono,$usu_email,$cod_rol);
				$mensaje = "Se registro exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/gestion_usuarios.php?m=$mensaje");

			break;

		case 'u':
				$usu_cod_usuario		= $_POST["usu_cod_usuario"];
				$usu_nombre 			= $_POST["usu_nombre"];
				$usu_apellido 		=$_POST["usu_apellido"];
				$usu_telefono			=$_POST["usu_telefono"];
				$usu_email				=$_POST["usu_email"];
				$cod_rol					=$_POST["cod_rol"];

				try{
					gestion_usuarios::Update($usu_nombre,$usu_apellido,$usu_telefono,$usu_email,$cod_rol,$usu_cod_usuario);
					$mensaje = "Se actualizo correctamente";
				}catch(Exception $e){
					$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
				}
				header("Location: ../View/gestion_usuarios.php?m= ".$mensaje );
				break;

		case 'd':
					try {
		          $user = gestion_usuarios::Delete(base64_decode($_REQUEST["us"]));
		          $mensaje = "Se eliminó correctamente";
		          header("Location: ../View/gestion_usuarios.php?m=".$mensaje);
		        } catch (Exception $e) {
		          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
		          header("Location: ../View/gestion_usuarios.php?m=".$mensaje);
		        }
		      break;

	}

 ?>
