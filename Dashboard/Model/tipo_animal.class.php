<?php 
	
class Gestion_tipo_animal{
	//Metodo create()
	//El metodo create guarda los datos en la tabla contactos, captura todos los parametros desde el  formulario

	function Create($ta_nombre,$cu_cod_cuidado,$tamano){

		//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//Crear el query que vamos a realizar
		$consulta = "INSERT INTO tipo_animal (ta_nombre,cu_cod_cuidado,tamano) VALUES (?,?,?)";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($ta_nombre,$cu_cod_cuidado,$tamano,$galeria,$video));

		floopets_BD::Disconnect();
	}
	
	function ReadbyID($ta_cod_tipo_animal){

		//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "SELECT * FROM tipo_animal WHERE ta_cod_tipo_animal=?";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($ta_cod_tipo_animal));

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
		$consulta = "SELECT * FROM tipo_animal";

		$query = $Conexion->prepare($consulta);
		$query->execute();

		//Devolvemos el resultado en un arreglo
		//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
		//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL

		$resultado = $query->fetchALL(PDO::FETCH_BOTH);
		return $resultado;

		floopets_BD::Disconnect();
	}
	
	function Update($ta_cod_tipo_animal,$ta_nombre,$cu_cod_cuidado,$tamano){
	//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "UPDATE tipo_animal SET ta_nombre = ?, cu_cod_cuidado= ?, tamano=?  WHERE ta_cod_tipo_animal = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($ta_nombre,$cu_cod_cuidado,$tamano,$ta_cod_tipo_animal));		

		floopets_BD::Disconnect();
	
	}


		function Delete($ta_cod_tipo_animal){
	//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "DELETE FROM cuidado WHERE ta_cod_tipo_animal = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($ta_cod_tipo_animal));		

		floopets_BD::Disconnect();
	}
}

?>