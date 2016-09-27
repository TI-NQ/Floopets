<?php
	session_start();
	require_once("../Model/conexion.php");
	require_once("../Model/animal.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':
				$ra_cod_raza			=$_POST["ra_cod_raza"];
				$org_cod_organizacion	=$_POST["org_cod_organizacion"];
				$ani_nombre             = $_POST["ani_nombre"];
				$ani_color=$_POST["ani_color"];
				$ani_tamanio=$_POST["ani_tamanio"];
		      	$ani_esterilizado     	= $_POST["ani_esterilizado"];
		     	$ani_edad             	= $_POST["ani_edad"];
		      	$ani_descripcion      	= $_POST["ani_descripcion"];
		     	$ani_numero_microchip	= $_POST["ani_numero_microchip"];
		      	$ani_sexo				= implode(",", $_POST["ani_sexo"]);
		      	$nombre_ani_imagen 	= strtolower(str_replace('ñ', 'n', $ani_nombre.rand(0,2000)));
				$nombre_ani_imagen 	= strtolower(str_replace(' ', '', $nombre_ani_imagen));
		      	$ani_imagen   			= $_POST["ani_imagen"];
		      	$count_galeria		= count($_FILES['ani_imagen']['name']);
			try {
				if($count_galeria >= 1){
					include("Upload_ani_image.php");
				}
				Gestion_animal::Create($ra_cod_raza,$ani_nombre,$ani_color,$ani_tamanio,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip,$ani_sexo,$org_cod_organizacion,$ani_imagen);
				$mensaje = "Se creo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/dashboard.php?p=".base64_encode("mis_mascotas")."&m=$mensaje");


			break;
			case 'u':
			$ani_cod_animal						=$_POST["ani_cod_animal"];
			$ra_cod_raza			=$_POST["ra_cod_raza"];
				$org_cod_organizacion	=$_POST["org_cod_organizacion"];
				$ani_nombre             = $_POST["ani_nombre"];
		      	$ani_esterilizado     	= $_POST["ani_esterilizado"];
		     	$ani_edad             	= $_POST["ani_edad"];
		      	$ani_descripcion      	= $_POST["ani_descripcion"];
		     	$ani_numero_microchip	= $_POST["ani_numero_microchip"];
		      	$ani_sexo				= implode(",", $_POST["ani_sexo"]);
		      	$ani_imagen   			= $_POST["ani_imagen"];
		      	$count_galeria		= count($_FILES['ani_imagen']['name']);
			try {
				if($count_galeria >= 1){ 
					include("Upload_ani_image.php");
				} 
				Gestion_animal::Update($ra_cod_raza,$ani_nombre,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip,$ani_cod_animal);
				$mensaje = "Se actializo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/dashboard.php?p=".base64_encode("mis_mascotas")."&m=$mensaje");
			break;

		case 'd':
			try {
          $animal = Gestion_animal::Delete(base64_decode($_REQUEST["an"]));
          $mensaje = "Se elimino correctamente";
          header("Location: ../View/dashboard.php?p=".base64_encode("mis_mascotas")."&m=$mensaje");
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/dashboard.php?p=".base64_encode("mis_mascotas")."&m=$mensaje");
        }

			break;
	}

 ?>
