<?php 
	//Llamamos la conexion a la base de datos
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
		$org_nit=$_POST["org_nit"];
		$org_email=$_POST["org_email"];
		$org_telefono=$_POST["org_telefono"];
		$org_direccion=$_POST["org_direccion"];
		
 		
 		try {
 			Gestion_organizacion::Create($to_cod_tipo_organizacion,$org_nombre,$org_nit,$org_email,$org_telefono,$org_direccion);
 			$mensaje="Registro exitoso";
 			
 			header("Location:../View/registrar_organizacion.php?m=".$mensaje);
 		} catch (Exception $e) {
 			$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			$tipomensaje = "error";
			header("Location:../View/registrar_organizacion.php?m=".$mensaje);
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
      

				try{
					Gestion_organizacion::Update($org_cod_organizacion,$to_cod_tipo_organizacion,$org_nombre,$org_nit,$org_email,$org_telefono,$org_direccion);
					$mensaje = "Se actualizo correctamente";
				}catch(Exception $e){
					$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
				}
				header("Location: ../View/gestion_organizacion.php?m= ".$mensaje );
				break;

		case 'd':
					try {
		          $evento = Gestion_organizacion::Delete(base64_decode($_REQUEST["ui"]));
		          $mensaje = "Se eliminó correctamente";
		          header("Location: ../View/gestion_organizacion.php?m=".$mensaje);
		        } catch (Exception $e) {
		          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
		          header("Location: ../View/gestion_organizacion.php?m=".$mensaje);
		        }
		      break;
 	}
 		
 		
 ?>