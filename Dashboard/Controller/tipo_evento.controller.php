<?php 
	//Llamamos la conexion a la base de datos
	require_once("../Model/conexion.php");
	

	//Llamamos la clase que necesitamos del model
	require_once("../Model/tipo_evento.class.php");

	// la variable accion nos indica que parte del crud crearemos
	$accion=$_REQUEST["accion"];
	switch ($accion) {
		# crear
		#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
		case 'c':
		$te_nombre=$_POST["te_nombre"];
		$te_estado=$_POST["te_estado"];
 		
 		try {
 			Gestion_tipo_evento::Create($te_nombre,$te_estado);
 			$mensaje="Registro exitoso";
 			
 			header("Location:../View/registrar_tipo_evento.php?m=".$mensaje);
 		} catch (Exception $e) {
 			$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			$tipomensaje = "error";
			header("Location:../View/registrar_tipo_evento.php?m=".$mensaje);
 		}
 		break;

 		case 'u':
 			$te_cod_tipo_evento=$_POST["te_cod_tipo_evento"];
		
			$te_nombre=$_POST["te_nombre"];
			$te_estado=$_POST["te_estado"];
      

				try{
					Gestion_tipo_evento::Update($te_cod_tipo_evento,$te_nombre,$te_estado);
					$mensaje = "Se actualizo correctamente";
				}catch(Exception $e){
					$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
				}
				header("Location: ../View/gestion_tipo_evento.php?m= ".$mensaje );
				break;

		case 'd':
					try {
		          $tipo_evento = Gestion_tipo_evento::Delete(base64_decode($_REQUEST["ui"]));
		          $mensaje = "Se eliminó correctamente";
		          header("Location: ../View/gestion_tipo_evento.php?m=".$mensaje);
		        } catch (Exception $e) {
		          $msn = "error:".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();
		          header("Location: ../View/gestion_tipo_evento.php?m=".$mensaje);
		        }
		      break;
 	}
 		
 		
 ?>