<?php 
	
class Gestion_raza{
	//Metodo create()
	//El metodo create guarda los datos en la tabla contactos, captura todos los parametros desde el  formulario

	function Create($ra_nombre,$ta_cod_tipo_animal){

		//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//Crear el query que vamos a realizar
		$consulta = "INSERT INTO raza (ra_nombre,ta_cod_tipo_animal) VALUES (?,?)";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($ra_nombre,$ta_cod_tipo_animal));

		floopets_BD::Disconnect();
	}
	
	function ReadbyID($ra_cod_raza){

		//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "SELECT * FROM raza WHERE ra_cod_raza=?";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($ra_cod_raza));

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
		$consulta = "SELECT * FROM raza";

		$query = $Conexion->prepare($consulta);
		$query->execute();

		//Devolvemos el resultado en un arreglo
		//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
		//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL

		$resultado = $query->fetchALL(PDO::FETCH_BOTH);
		return $resultado;

		floopets_BD::Disconnect();
	}
	
	function Update($ra_cod_raza,$ra_nombre,$ta_cod_tipo_animal){
	//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "UPDATE raza SET ra_nombre = ?, ta_cod_tipo_animal= ?  WHERE ra_cod_raza = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($ra_nombre,$ta_cod_tipo_animal,$ra_cod_raza));		

		floopets_BD::Disconnect();
	
	}


		function Delete($ra_cod_raza){
	//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "DELETE FROM raza WHERE ra_cod_raza = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($ra_cod_raza));		

		floopets_BD::Disconnect();
	}
}

?>