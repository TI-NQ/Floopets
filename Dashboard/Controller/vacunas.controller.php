<?php
	require_once("../Model/conexion.php");
	require_once("../Model/vacuna.class.php");

	$accion = $_REQUEST["accion"];
	switch ($accion) {
		case 'c':
			// $va_cod_vacuna 	= $_POST["va_cod_vacuna"];
			$vac_nombre			= $_POST["vac_nombre"];
      $vac_fecha          = $_POST["vac_fecha"];
       $vac_serial          = $_POST["vac_serial"];
			try {
				Gestion_vacuna::Create($vac_nombre,$vac_fecha,$vac_serial);
				$mensaje = base64_encode("Se creo exitosamente");
				$tipo_mensaje = base64_encode("success");
			} catch (Exception $e) {
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
			}
			header("Location: ../View/dashboard.php?p=".base64_encode("vacunas_fundacion")."&m=$mensaje&tm=$tipo_mensaje");

			break;

		case 'u':
			$vac_cod_vacuna = $_POST["vac_cod_vacuna"];
			$vac_nombre			= $_POST["vac_nombre"];
      		$vac_fecha          = $_POST["vac_fecha"];
       $vac_serial          = $_POST["vac_serial"];

				try{
					Gestion_vacuna::Update($vac_cod_vacuna,$vac_nombre,$vac_fecha,$vac_serial);
					$mensaje = base64_encode("La vacuna se modifico exitosamente");
					$tipo_mensaje = base64_encode("success");
				}catch(Exception $e){
					$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
				}
				header("Location: ../View/dashboard.php?p=".base64_encode("vacunas_fundacion")."&m=$mensaje&tm=$tipo_mensaje" );
				break;

		case 'd':
					try {
		          $vacunas = Gestion_vacuna::Delete($_REQUEST["va"]);
		          $mensaje = "Se eliminó correctamente";
		          header("Location: ../View/dashboard.php?p=".base64_encode("vacunas_fundacion"));
		        } catch (Exception $e) {
		          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
		          header("Location: ../View/dashboard.php?p=".base64_encode("vacunas_fundacion"));
		        }
		      break;

	}

 ?>
