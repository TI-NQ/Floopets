<?php
	//Llamamos la conexion a la base de datos
	require_once("../Model/conexion.php");


	//Llamamos la clase que necesitamos del model
	require_once("../Model/evento.class.php");

	// la variable accion nos indica que parte del crud crearemos
	$accion=$_REQUEST["accion"];
	switch ($accion) {
		# crear
		#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
		case 'c':
		$te_cod_tipo_evento				=$_POST["te_cod_tipo_evento"];
		$eve_nombre								=$_POST["eve_nombre"];
		$eve_direccion						=$_POST["eve_direccion"];
		$eve_fecha								=$_POST["eve_fecha"];
		$eve_hora									=$_POST["eve_hora"];
		$eve_descripcion					=$_POST["eve_descripcion"];
		$imagen										=$_POST["imagen"];


 		try {
 			Gestion_evento::Create($te_cod_tipo_evento,$eve_nombre,$eve_direccion,$eve_fecha,$eve_hora,$eve_descripcion,$imagen);
 			$mensaje="Registro exitoso";

 			header("Location:../View/dashboard.php?p=".base64_encode("gestion_evento"));
 		} catch (Exception $e) {
 			$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			$tipomensaje = "error";
			header("Location:../View/dashboard.php?p=".base64_encode("gestion_evento"));
 		}
 		break;

 		case 'u':
 			$eve_cod_evento						=$_POST["eve_cod_evento"];
 			$te_cod_tipo_evento				=$_POST["te_cod_tipo_evento"];
			$eve_nombre								=$_POST["eve_nombre"];
			$eve_direccion						=$_POST["eve_direccion"];
			$eve_fecha								=$_POST["eve_fecha"];
			$eve_hora									=$_POST["eve_hora"];
			$eve_descripcion					=$_POST["eve_descripcion"];
			$imagen										=$_POST["imagen"];


				try{
					Gestion_evento::Update($eve_cod_evento,$te_cod_tipo_evento,$eve_nombre,$eve_direccion,$eve_fecha,$eve_hora,$eve_descripcion,$imagen);
					$mensaje = "Se actualizo correctamente";
				}catch(Exception $e){
					$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
				}
				header("Location: ../View/dashboard.php?p=".base64_encode("gestion_evento"));
				break;

		case 'd':
					try {
		          $evento = Gestion_evento::Delete(base64_decode($_REQUEST["ui"]));
		          $mensaje = "Se eliminó correctamente";
		          header("Location: ../View/dashboard.php?p=".base64_encode("gestion_evento"));
		        } catch (Exception $e) {
		          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
		          header("Location: ../View/dashboard.php?p=".base64_encode("gestion_evento"));
		        }
		      break;
 	}


 ?>
