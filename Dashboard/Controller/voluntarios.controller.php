<?php
	require_once("../Model/conexion.php");
	require_once("../Model/voluntarios.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':
      	$vo_cod_voluntario      =$_POST["vo_cod_voluntario"];

		$vo_nombre              =$_POST["vo_nombre"];
		$nombre_voluntario 	= strtolower(str_replace('ñ', 'n', $vo_cod_voluntario));
		$nombre_voluntario 	= strtolower(str_replace(' ', '', $nombre_voluntario));
      	$vo_telefono            =$_POST["vo_telefono"];
      	$vo_direccion           =$_POST["vo_direccion"];
      	$org_cod_organizacion           =$_POST["org_cod_organizacion"];
      	$vo_imagen 				=$_POST["vo_imagen"];
     	$count_galeria			= count($_FILES['vo_imagen']['name']);

			try {
				if($count_galeria >= 1){ 
					include("Upload_vo_image.php");
				} 
				Gestion_voluntarios::Create($vo_cod_voluntario,$vo_nombre,$vo_telefono,$vo_direccion,$org_cod_organizacion,$vo_imagen);
				$mensaje = "Se creo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			 //header("Location: ../View/dashboard.php?p=".base64_encode("gestion_voluntarios"));

			break;
			case 'u':
      $vo_cod_voluntario      =$_POST["vo_cod_voluntario"];
		$vo_nombre          =$_POST["vo_nombre"];
      $vo_telefono            =$_POST["vo_telefono"];
      $vo_direccion           =$_POST["vo_direccion"];
      $vo_imagen              =$_POST["vo_imagen"];

			try {
				Gestion_voluntarios::Update($vo_cod_voluntario,$vo_nombre,$vo_telefono,$vo_direccion,$vo_imagen);
				$mensaje = "Se actializo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/dashboard.php?p=".base64_encode("gestion_voluntarios"));
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
	}

 ?>
