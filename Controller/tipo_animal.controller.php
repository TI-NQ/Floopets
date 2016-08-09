<?php 
	require_once("../Model/conexion.php");
	require_once("../Model/tipo_animal.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':
				
			$ta_nombre	= $_POST["ta_nombre"];
			$cu_cod_cuidado	= $_POST["cu_cod_cuidado"];
			$tamano	= $_POST["tamano"];


			try {
				Gestion_tipo_animal::Create($ta_nombre,$cu_cod_cuidado,$tamano);
				$mensaje = "Se creo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/gestion_tipo_animal.php?m=$mensaje");

			break;
			case 'u':
				$ta_cod_tipo_animal =["ta_cod_tipo_animal"];
				$ta_nombre			= $_POST["ta_nombre"];
				$cu_cod_cuidado		= $_POST["cu_cod_cuidado"];
				$tamano				= $_POST["tamano"];

			try {
				Gestion_tipo_animal::Update($ta_cod_tipo_animal,$ta_nombre,$cu_cod_cuidado,$tamano);
				$mensaje = "Se actializo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/gestion_tipo_animal.php?m=$mensaje");
			break;
		
		case 'd':
			try {
          $tipo = Gestion_tipo_animal::Delete(base64_decode($_REQUEST["ta"]));
          $mensaje = "se elimino correctamente";
          header("Location: ../View/gestion_tipo_animal.php?m=".$mensaje);
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/gestion_tipo_animal.php?m=".$mensaje);
        }
      
			break;
	}

 ?>	