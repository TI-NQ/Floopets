<?php
	require_once("../Model/conexion.php");
	require_once("../Model/animal.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':
			$ra_cod_raza						=$_POST["ra_cod_raza"];
			$ani_nombre             = $_POST["ani_nombre  "];
      $ani_esterilizado     = $_POST["ani_esterilizado"];
      $ani_edad             = $_POST["ani_edad "];
      $ani_descripcion      = $_POST["ani_descripcion"];
      $ani_numero_microchip	= $_POST["ani_numero_microchip"];


			try {
				gestion_animal::Create($ra_cod_raza,$ani_nombre,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip);
				$mensaje = "Se creo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/gestion_animal.php?m=$mensaje");

			break;
			case 'u':
			$ra_cod_raza						=$_POST["ra_cod_raza"];
      $ani_nombre             = $_POST["ani_nombre  "];
      $ani_esterilizado     = $_POST["ani_esterilizado"];
      $ani_edad             = $_POST["ani_edad "];
      $ani_descripcion      = $_POST["ani_descripcion"];
      $ani_numero_microchip	= $_POST["ani_numero_microchip"];

			try {
				gestion_animal::Update($ra_cod_raza,$ani_nombre,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip);
				$mensaje = "Se actializo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/gestion_animal.php?m=$mensaje");
			break;

		case 'd':
			try {
          $animal = gestion_animal::Delete(base64_decode($_REQUEST["an"]));
          $mensaje = "Se elimino correctamente";
          header("Location: ../View/gestion_animal.php?m=".$mensaje);
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/gestion_animal.php?m=".$mensaje);
        }

			break;
	}

 ?>
