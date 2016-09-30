<?php
	require_once("../Model/conexion.php");
	require_once("../Model/voluntarios.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':
      	$vo_cod_voluntario      =$_POST["vo_cod_voluntario"];

		$vo_nombre              =$_POST["vo_nombre"];

      	$vo_telefono            =$_POST["vo_telefono"];
      	$vo_direccion           =$_POST["vo_direccion"];
      	$org_cod_organizacion           =$_POST["org_cod_organizacion"];
      	$nombre_vo_nombre 	= strtolower(str_replace('ñ', 'n', $vo_cod_voluntario));
		$nombre_vo_nombre 	= strtolower(str_replace(' ', '', $nombre_vo_nombre));
      	$vo_imagen 				=$_POST["vo_imagen"];
     	$count_galeria			= count($_FILES['vo_imagen']['name']);

			try {
				if($count_galeria >= 1){
					include("Upload_vo_image.php");
				}
				Gestion_voluntarios::Create($vo_cod_voluntario,$vo_nombre,$vo_telefono,$vo_direccion,$vo_imagen,$org_cod_organizacion);
				$mensaje = "Se envio su solicitud, en breve se pondran en contacto contigo";
				$tipo_mensaje = "info";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			 header ("Location: ../../index.php?m=$mensaje&tm=$tipo_mensaje");

			break;
			case 'u':
			$vo_cod_voluntario      =$_POST["vo_cod_voluntario"];

	$vo_nombre              =$_POST["vo_nombre"];

			$vo_telefono            =$_POST["vo_telefono"];
			$vo_direccion           =$_POST["vo_direccion"];
			$nombre_vo_nombre 	= strtolower(str_replace('ñ', 'n', $vo_cod_voluntario));
			$nombre_vo_nombre 	= strtolower(str_replace(' ', '', $nombre_vo_nombre));
			$vo_imagen 				=$_POST["vo_imagen"];


			try {
				if($vo_imagen != ""){
					include("Upload_vo_image.php");
				}
				Gestion_voluntarios::Update($vo_cod_voluntario,$vo_nombre,$vo_telefono,$vo_direccion,$vo_imagen);
				$mensaje = "Se actualizo exitosamente";
				$tipo_mensaje = "success";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/dashboard.php?p=".base64_encode("voluntarios")."&m=$mensaje&tm=$tipo_mensaje");
			break;

		case 'd':
			try {
          $voluntarios = gestion_voluntarios::Delete(base64_decode($_REQUEST["vo"]));
          $mensaje = "Se elimino correctamente";
          header("Location: ../View/dashboard.php?p=".base64_encode("gestion_voluntarios"));
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/dashboard.php?p=".base64_encode("gestion_voluntarios"));
        }

			break;



		case 'aceptar':


 				$voluntario =  Gestion_voluntarios::ReadbyID(base64_decode($_REQUEST["vo"]));


			try {

				Gestion_voluntarios::aceptar_voluntario($voluntario[0]);


				$mensaje="Aceptado";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
 				header("Location: ../View/dashboard.php?p=".base64_encode("mi_organizacion"));
			break;


	}

 ?>
