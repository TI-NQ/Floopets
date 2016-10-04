<?php
session_start();
	require_once("../Model/conexion.php");
	require_once("../Model/evento.class.php");
	require_once("../Model/usuarios.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':
      	$te_cod_tipo_evento     	=$_POST["te_cod_tipo_evento"];
		$eve_nombre              	=$_POST["eve_nombre"];
		$nombre_eve_imagen 			= strtolower(str_replace('ñ', 'n', $eve_nombre.rand(0,3000)));
		$nombre_eve_imagen 			= strtolower(str_replace(' ', '', $nombre_eve_imagen));
      	$eve_direccion            	=$_POST["eve_direccion"];
      	$eve_fecha           		=$_POST["eve_fecha"];
      	$eve_fecha_hasta           	=$_POST["eve_fecha_hasta"];
      	$eve_hora           		=$_POST["eve_hora"];
      	$eve_hora_hasta           	=$_POST["eve_hora_hasta"];
      	$eve_descripcion           	=$_POST["eve_descripcion"];
      	$eve_imagen 				=$_POST["eve_imagen"];
      	$eve_estado 				=$_POST["eve_estado"];
      		$eve_carpeta   			= $nombre_eve_imagen;
     	$count_galeria				= count($_FILES['eve_imagen']['name']);
     	$org_cod_organizacion=Gestion_usuarios::Mi_Organizacion($_SESSION["usu_cod_usuario"]);
     	if ($eve_fecha<=$eve_fecha_hasta) {
     		try {
				if($count_galeria != ""){
					include("Upload_eve_imagen.php");
				}
				Gestion_evento::Create($te_cod_tipo_evento,$eve_nombre,$eve_direccion,$eve_fecha,$eve_fecha_hasta,$eve_hora,$eve_hora_hasta,$eve_descripcion,$eve_imagen,$eve_estado,$eve_carpeta,$org_cod_organizacion[1]);
				$mensaje = base64_encode("$eve_nombre se creo correctamente");
				$tipo_mensaje= base64_encode("success");
				header("Location: ../View/dashboard.php?p=".base64_encode("mis_eventos")."&m=$mensaje&tm=$tipo_mensaje");
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
     	}else{
     		$mensaje="La fecha inicio es menor a la fecha fin";
     		header("Location: ../View/dashboard.php?p=".base64_encode("nuevo_evento")."&m=".$mensaje);
     	}



			break;
			case 'u':
		$eve_cod_evento      =$_POST["eve_cod_evento"];
      	$te_cod_tipo_evento      =$_POST["te_cod_tipo_evento"];
		$eve_nombre              =$_POST["eve_nombre"];
		$nombre_eve_imagen 	= strtolower(str_replace('ñ', 'n', $eve_nombre.rand(0,3000)));
		$nombre_eve_imagen 	= strtolower(str_replace(' ', '', $nombre_eve_imagen));
      	$eve_direccion            =$_POST["eve_direccion"];
      	$eve_fecha           =$_POST["eve_fecha"];
      	$eve_fecha_hasta           =$_POST["eve_fecha_hasta"];
      	$eve_hora           		=$_POST["eve_hora"];
      	$eve_hora_hasta           =$_POST["eve_hora_hasta"];
      	$eve_descripcion           =$_POST["eve_descripcion"];
      	$eve_imagen 				=$_POST["eve_imagen"];
      	$eve_carpeta   			= $nombre_eve_imagen;
      	$eve_estado 				=$_POST["eve_estado"];

			try {
				if($eve_imagen != ""){
					include("Upload_eve_imagen.php");
				}
				Gestion_evento::Update($eve_cod_evento,$te_cod_tipo_evento,$eve_nombre,$eve_direccion,$eve_fecha,$eve_fecha_hasta,$eve_hora,$eve_hora_hasta,$eve_descripcion,$eve_imagen,$eve_estado,$eve_carpeta);
				$mensaje = "Se actializo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}

			header("Location: ../View/dashboard.php?p=".base64_encode("gestion_evento"));
			break;
			case 'estado_eve':
			$cod_eve = base64_decode($_REQUEST["cod_eve"]);
			$estado_eve = base64_decode($_REQUEST["es_eve"]);

			try {
				Gestion_evento::cambiar_estado($estado_eve,$cod_eve);
				$mensaje = "Se actualizo exitosamente";
				$tipo_mensaje = "success";
					header("Location: ../View/dashboard.php?p=".base64_encode("gestion_evento")."&m=$mensaje&tm=$tipo_mensaje");
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}

			 header("Location: ../View/dashboard.php?p=".base64_encode("gestion_evento"));
			break;
		case 'd':
			try {
          $evento = Gestion_evento::Delete($_REQUEST["eve"]);
          $mensaje = "Se elimino correctamente";
          header("Location: ../View/dashboard.php?p=".base64_encode("gestion_evento"));
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/dashboard.php?p=".base64_encode("gestion_evento"));
        }

			break;
	}

 ?>
