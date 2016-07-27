<?php 
	//Llamamos la conexion a la base de datos
	require_once("../Model/conexion.php");
	floopets_BD::Connect();

	//Llamamos la clase que necesitamos del model
	require_once("../Model/tipo_donacion.class.php");

	// la variable accion nos indica que parte del crud crearemos
	$accion=$_REQUEST["acc"];
	switch ($accion) {
		# crear
		#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
		case 'c':
		$td_nombre=$_POST("td_nombre");
		$td_estado=$_POST("td_estado");
 		
 		try {
 			Gestion_tipo_donacion::create($td_nombre,$td_nombre);
 			$mensaje="Registro exitoso";
 			$tipomensaje="succes";
 			header("Location:../Model/tipo_donacion.class.php?m=".$mensaje."&tm=".$tipomensaje);
 		} catch (Exception $e) {
 			$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			$tipomensaje = "error";
			header("Location:../View/registrar_tipo_donacion.php?m=".$mensaje."&tm=".$tipomensaje);
 		}
 		break;
 	}
 ?>