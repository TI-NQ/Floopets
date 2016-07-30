<?php 
	//Llamamos la conexion a la base de datos
	require_once("../Model/conexion.php");

	//Llamamos la clase que necesitamos del model
	require_once("../Model/tipo_donacion.class.php");

	// la variable accion nos indica que parte del crud crearemos
	$accion=$_REQUEST["accion"];
	switch ($accion) {
		# crear
		#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
		case 'c':
		$td_nombre=$_POST["td_nombre"];
		$td_estado=$_POST["td_estado"];
 		
 		try {
 			Gestion_tipo_donacion::create($td_nombre,$td_estado);
 			$mensaje="Registro exitoso";
 			
 			header("Location:../View/registrar_tipo_donacion.php?m=".$mensaje);
 		} catch (Exception $e) {
 			$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			$tipomensaje = "error";
			header("Location:../View/registrar_tipo_donacion.php?m=".$mensaje);
 		}
 		break;

 		case 'u':
 			$td_cod_tipo_donacion=$_POST["td_cod_tipo_donacion"];
		
			$td_nombre=$_POST["td_nombre"];
			$td_estado=$_POST["td_estado"];
      

				try{
					Gestion_tipo_donacion::Update($td_cod_tipo_donacion,$td_nombre,$td_estado);
					$mensaje = "Se actualizo correctamente";
				}catch(Exception $e){
					$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
				}
				header("Location: ../View/gestion_tipo_donacion.php?m= ".$mensaje );
				break;

		case 'd':
					try {
		          $tipo_donacion = Gestion_tipo_donacion::Delete(base64_decode($_REQUEST["ui"]));
		          $mensaje = "Se eliminó correctamente";
		          header("Location: ../View/gestion_tipo_donacion.php?m=".$mensaje);
		        } catch (Exception $e) {
		          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
		          header("Location: ../View/gestion_tipo_donacion.php?m=".$mensaje);
		        }
		      break;
 	}
 ?>