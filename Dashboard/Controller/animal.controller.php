<?php
	session_start();
	require_once("../Model/conexion.php");
	require_once("../Model/animal.class.php");
	require_once("../Model/usuarios.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':
		$tipo_animal = $_POST["tipo_mascota"];
				$ra_cod_raza			=$_POST["ra_cod_raza"];
				$org_cod_organizacion	=$_POST["org_cod_organizacion"];
				$ani_nombre             = $_POST["ani_nombre"];
				$ani_color				=$_POST["ani_color"];
				$ani_tamanio			=$_POST["ani_tamanio"];
		      	$ani_esterilizado     	= $_POST["ani_esterilizado"];
		     	$ani_edad             	= $_POST["ani_edad"];
		      	$ani_descripcion      	= $_POST["ani_descripcion"];
		     	$ani_numero_microchip	= $_POST["ani_numero_microchip"];
		      	$ani_sexo				= implode(",", $_POST["ani_sexo"]);
		      	$nombre_ani_imagen 		= strtolower(str_replace('ñ', 'n', $ani_nombre.rand(0,2000)));
				$nombre_ani_imagen 		= strtolower(str_replace(' ', '', $nombre_ani_imagen));
				$ani_carpeta   			= $nombre_ani_imagen;
		      	$ani_imagen   			= $_POST["ani_imagen"];
		    	 $count_galeria			= count($_FILES['ani_imagen']['name']);

			try {
				if($count_galeria != ""){
					include("Upload_ani_image.php");
				}
				if ($tipo_animal==9 && $ra_cod_raza=="") {
					$ra_cod_raza=2;
				}elseif ($tipo_animal==10 && $ra_cod_raza=="") {
					$ra_cod_raza=1;
				}
				Gestion_animal::Create($ra_cod_raza,$ani_nombre,$ani_color,$ani_tamanio,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip,$ani_sexo,$org_cod_organizacion,$ani_imagen,$ani_carpeta);
				$mensaje = base64_encode("Se creo exitosamente");
				$tipo_mensaje = base64_encode("success");
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/dashboard.php?p=".base64_encode("mis_mascotas")."&m=$mensaje&tm=$tipo_mensaje");


			break;
			case 'u':
				$ani_cod_animal 		= $_POST["ani_cod_animal"];
				$ra_cod_raza			= $_POST["ra_cod_raza"];
				$ani_nombre             = $_POST["ani_nombre"];
				$ani_color				= $_POST["ani_color"];
				$ani_tamanio			= $_POST["ani_tamanio"];
		      	$ani_esterilizado     	= $_POST["ani_esterilizado"];
		     	$ani_edad             	= $_POST["ani_edad"];
		      	$ani_descripcion      	= $_POST["ani_descripcion"];
		     	$ani_numero_microchip	= $_POST["ani_numero_microchip"];
		      	$ani_sexo				= implode(",", $_POST["ani_sexo"]);
		      	$nombre_ani_imagen 		= strtolower(str_replace('ñ', 'n', $ani_nombre.rand(0,2000)));
				$nombre_ani_imagen 		= strtolower(str_replace(' ', '', $nombre_ani_imagen));
				$ani_carpeta   			= $nombre_ani_imagen;
		      	$ani_imagen   			= $_POST["ani_imagen"];



			try {
				if($ani_imagen != ""){
					include("Upload_ani_image.php");
				}

				Gestion_animal::Update($ani_cod_animal,$ra_cod_raza,$ani_nombre,$ani_color,$ani_tamanio,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip,$ani_sexo,$ani_imagen,$ani_carpeta);
				$mensaje = base64_encode("Se actualizo exitosamente");
				$tipo_mensaje = base64_encode("success");
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/dashboard.php?p=".base64_encode("mis_mascotas")."&m=$mensaje&tm=$tipo_mensaje");
			break;
			case 'enproceso':
			$animal =  Gestion_animal::ReadbyID(base64_decode($_REQUEST["an"]));
					
			try {
				Gestion_animal::En_Proceso($animal[0]);
          $mensaje = base64_encode("Se elimino correctamente");
					$tipo_mensaje=base64_encode("success");
         // header("Location: ../View/dashboard.php?p=".base64_encode("mis_mascotas")."&m=$mensaje&tm=$tipo_mensaje");
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
         // header("Location: ../View/dashboard.php?p=".base64_encode("mis_mascotas")."&m=$mensaje");
        }
			break;


		case 'd':
			try {
          $animal = Gestion_animal::Delete(($_REQUEST["an"]));
          $mensaje = base64_encode("Se elimino correctamente");
					$tipo_mensaje=base64_encode("success");
          header("Location: ../View/dashboard.php?p=".base64_encode("mis_mascotas")."&m=$mensaje&tm=$tipo_mensaje");
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/dashboard.php?p=".base64_encode("mis_mascotas")."&m=$mensaje");
        }
			break;
	}

 ?>
