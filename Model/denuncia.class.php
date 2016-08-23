<?php

class Gestion_denuncia{
	//Metodo create()
	//El metodo create guarda los datos en la tabla contactos, captura todos los parametros desde el  formulario

	function Create($td_cod_tipo_denuncia,$de_descripcion,$de_contacto,$de_telefono,$de_nombre,$de_imagen){

		//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//Crear el query que vamos a realizar
		$consulta = "INSERT INTO denuncia (td_cod_tipo_denuncia,de_descripcion,de_contacto,de_telefono,de_nombre,de_fecha,de_imagen) VALUES (?,?,?,?,?,now(),?)";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($td_cod_tipo_denuncia,$de_descripcion,$de_contacto,$de_telefono,$de_nombre,$de_imagen));

		floopets_BD::Disconnect();
	}

	function ReadbyID($de_cod_denuncia){

		//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



		//Crear el query que vamos a realizar
		$consulta = "SELECT * FROM denuncia WHERE de_cod_denuncia=?";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($de_cod_denuncia));

		//Devolvemos el resultado en un arreglo
		//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
		//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL

		$resultado = $query->fetch(PDO::FETCH_BOTH);
		return $resultado;

		floopets_BD::Disconnect();
	}


	//Metodo ReadAll()
	//Busca todos los registros de la tabla

	function ReadAll(){

		//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



		//Crear el query que vamos a realizar
		$consulta = "SELECT * FROM denuncia";

		$query = $Conexion->prepare($consulta);
		$query->execute();

		//Devolvemos el resultado en un arreglo
		//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
		//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL

		$resultado = $query->fetchALL(PDO::FETCH_BOTH);
		return $resultado;

		floopets_BD::Disconnect();
	}

	function Update($td_cod_tipo_denuncia,$de_descripcion,$de_contacto,$de_telefono,$de_nombre,$de_imagen,$de_cod_denuncia){
	//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



		//Crear el query que vamos a realizar
		$consulta = "UPDATE denuncia SET td_cod_tipo_denuncia=?,de_descripcion=?,de_contacto=?,de_telefono=?,de_nombre=?,de_imagen=? WHERE de_cod_denuncia =?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($td_cod_tipo_denuncia,$de_descripcion,$de_contacto,$de_telefono,$de_nombre,$de_imagen,$de_cod_denuncia));

		floopets_BD::Disconnect();

	}


		function Delete($de_cod_denuncia){
	//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



		//Crear el query que vamos a realizar
		$consulta = "DELETE FROM denuncia WHERE de_cod_denuncia =?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($de_cod_denuncia));

		floopets_BD::Disconnect();
	}
}

?>
