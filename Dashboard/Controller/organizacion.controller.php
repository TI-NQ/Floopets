<?php
	//Llamamos la conexion a la base de datos
	session_start();
	require_once("../Model/conexion.php");


	//Llamamos la clase que necesitamos del model
	require_once("../Model/organizacion.class.php");

	// la variable accion nos indica que parte del crud crearemos
	$accion=$_REQUEST["accion"];
	switch ($accion) {
		# crear
		#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
		case 'c':

		$to_cod_tipo_organizacion=$_POST["to_cod_tipo_organizacion"];
		$org_nombre=$_POST["org_nombre"];
		$org_descripcion=$_POST["org_descripcion"];
		$org_nit=$_POST["org_nit"];
		$org_email=$_POST["org_email"];
		$org_telefono=$_POST["org_telefono"];
		$org_direccion=$_POST["org_direccion"];


 		try {
 			Gestion_organizacion::Create($to_cod_tipo_organizacion,$org_nombre,$org_descripcion,$org_nit,$org_email,$org_telefono,$org_direccion);
 			$organizacion = Gestion_organizacion::ReadbyNIT($org_nit);

				$org_cod_organizacion = $organizacion[0];
				$usu_cod_usuario = $_SESSION["usu_cod_usuario"];

				Gestion_organizacion::Createorganizacion($org_cod_organizacion, $usu_cod_usuario);
				$_SESSION["org_cod_organizacion"] = $org_cod_organizacion;

 				$mensaje=base64_encode("$organizacion se creo exitosamente");
				$tipo_msn=base64_encode("success");

 			header("Location:../View/dashboard.php?p=".base64_encode("mi_organizacion")."&m=$mensaje&tm=$tipo_msn");
 		} catch (Exception $e) {
 			$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			$tipomensaje = "error";
			// echo $mensaje;
			header("Location:../View/dashboard.php?p=".base64_encode("registrar_organizacion")."&m=$mensaje&tmsn=$tipomensaje");
 			//header("Location:../View/dashboard.php?p=".base64_encode("gestion_organizacion"));
 		} catch (Exception $e) {
 			$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			$tipomensaje = "error";
			//header("Location:../View/dashboard.php?p=".base64_encode("gestion_organizacion"));

 		}
 		break;

 		case 'u':
 			$org_cod_organizacion=$_POST["org_cod_organizacion"];
 			$to_cod_tipo_organizacion=$_POST["to_cod_tipo_organizacion"];
			$org_nombre=$_POST["org_nombre"];
			$org_nit=$_POST["org_nit"];
			$org_email=$_POST["org_email"];
			$org_telefono=$_POST["org_telefono"];
			$org_direccion=$_POST["org_direccion"];
			$org_clave=$_POST["org_clave"];


				try{
					Gestion_organizacion::Update($org_cod_organizacion,$to_cod_tipo_organizacion,$org_nombre,$org_nit,$org_email,$org_telefono,$org_direccion,$org_clave);
					$mensaje = "Se actualizo correctamente";
				}catch(Exception $e){
					$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
				}
				header("Location: ../View/dashboard.php?p=".base64_encode("gestion_organizacion") );
				break;

		case 'd':
					try {
		          $evento = Gestion_organizacion::Delete(base64_decode($_REQUEST["ui"]));
		          $mensaje = "Se eliminó correctamente";
		          header("Location: ../View/dashboard.php?p=".base64_encode("gestion_organizacion"));
		        } catch (Exception $e) {
		          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
		          header("Location: ../View/dashboard.php?p=".base64_encode("gestion_organizacion"));
		        }
		      break;
		      case 'r':
			$empresa = Gestion_organizacion::ReadbyID($org_cod_organizacion);

		break;
		case 'buscar':
          	Gestion_organizacion::ReadbyNombre($org_nombre);
          	 break;
 	}


 ?>
