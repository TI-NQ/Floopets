<?php
	require_once("../Model/conexion.php");
	require_once("../Model/evento.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':
      	$te_cod_tipo_evento      =$_POST["te_cod_tipo_evento"];
		$eve_nombre              =$_POST["eve_nombre"];
		$nombre_eve_imagen 	= strtolower(str_replace('ñ', 'n', $eve_nombre));
		$nombre_eve_imagen 	= strtolower(str_replace(' ', '', $nombre_eve_imagen));
      	$eve_direccion            =$_POST["eve_direccion"];
      	$eve_fecha           =$_POST["eve_fecha"];
      	$eve_fecha_hasta           =$_POST["eve_fecha_hasta"];
      	$eve_hora           =$_POST["eve_hora"];
      	$eve_hora_hasta           =$_POST["eve_hora_hasta"];
      	$eve_descripcion           =$_POST["eve_descripcion"];
      	$eve_imagen 				=$_POST["eve_imagen"];
      	$eve_estado 				=$_POST["eve_estado"];
     	$count_galeria			= count($_FILES['eve_imagen']['name']);

			try {
				if($count_galeria >= 1){
					include("Upload_eve_imagen.php");
				} 
				Gestion_evento::Create($te_cod_tipo_evento,$eve_nombre,$eve_direccion,$eve_fecha,$eve_fecha_hasta,$eve_hora,$eve_hora_hasta,$eve_descripcion,$eve_imagen,$eve_estado);
				$mensaje = "Se creo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			 // header("Location: ../View/dashboard.php?p=".base64_encode("gestion_evento"));

			break;
			case 'u':
      	$te_cod_tipo_evento      =$_POST["te_cod_tipo_evento"];
		$eve_nombre              =$_POST["eve_nombre"];
      	$eve_direccion            =$_POST["eve_direccion"];
      	$eve_fecha           =$_POST["eve_fecha"];
      	$eve_fecha_hasta           =$_POST["eve_fecha_hasta"];
      	$eve_hora           =$_POST["eve_hora"];
      	$eve_hora_hasta           =$_POST["eve_hora_hasta"];
      	$eve_descripcion           =$_POST["eve_descripcion"];
      	$eve_imagen 				=$_POST["eve_imagen"];
      	$eve_estado 				=$_POST["eve_estado"];

			try {
				Gestion_evento::Update($eve_cod_evento,$te_cod_tipo_evento,$eve_nombre,$eve_direccion,$eve_fecha,$eve_fecha_hasta,$eve_hora,$eve_hora_hasta,$eve_descripcion,$eve_imagen,$eve_estado);
				$mensaje = "Se actializo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/dashboard.php?p=".base64_encode("gestion_evento"));
			break;

		case 'd':
			try {
          $evento = Gestion_evento::Delete(base64_decode($_REQUEST["eve"]));
          $mensaje = "Se elimino correctamente";
          header("Location: ../View/dashboard.php?p=".base64_encode("gestion_evento"));
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/dashboard.php?p=".base64_encode("gestion_evento"));
        }

			break;
	}

 ?>
