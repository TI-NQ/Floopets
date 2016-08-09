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
      $vo_imagen              =$_POST["vo_imagen"];

			try {
				gestion_voluntarios::Create($vo_cod_voluntario,$vo_nombre,$vo_telefono,$vo_direccion,$vo_imagen);
				$mensaje = "Se creo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/gestion_voluntarios.php?m=$mensaje");

			break;
			case 'u':
      $vo_cod_voluntario      =$_POST["vo_cod_voluntario"];
			$vo_nombre              =$_POST["vo_nombre"];
      $vo_telefono            =$_POST["vo_telefono"];
      $vo_direccion           =$_POST["vo_direccion"];
      $vo_imagen              =$_POST["vo_imagen"];

			try {
				gestion_voluntarios::Update($vo_cod_voluntario,$vo_nombre,$vo_telefono,$vo_direccion,$vo_imagen);
				$mensaje = "Se actializo exitosamente";
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/gestion_voluntarios.php?m=$mensaje");
			break;

		case 'd':
			try {
          $animal = gestion_voluntarios::Delete(base64_decode($_REQUEST["vo"]));
          $mensaje = "Se elimino correctamente";
          header("Location: ../View/gestion_voluntarios.php?m=".$mensaje);
        } catch (Exception $e) {
          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
          header("Location: ../View/gestion_animal.php?m=".$mensaje);
        }

			break;
	}

 ?>
