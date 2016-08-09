<?php 
	
class Gestion_cuidado{
	//Metodo create()
	//El metodo create guarda los datos en la tabla contactos, captura todos los parametros desde el  formulario

	function Create($cu_nombre,$cu_descripcion,$galeria,$video){

		//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//Crear el query que vamos a realizar
		$consulta = "INSERT INTO cuidado (cu_nombre,cu_descripcion,galeria,video) VALUES (?,?,?,?)";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($cu_nombre,$cu_descripcion));

		floopets_BD::Disconnect();
	}
	
	function ReadbyID($cu_cod_cuidado){

		//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "SELECT * FROM cuidado WHERE cu_cod_cuidado=?";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($cu_cod_cuidado));

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
		$consulta = "SELECT * FROM cuidado";

		$query = $Conexion->prepare($consulta);
		$query->execute();

		//Devolvemos el resultado en un arreglo
		//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
		//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL

		$resultado = $query->fetchALL(PDO::FETCH_BOTH);
		return $resultado;

		floopets_BD::Disconnect();
	}
	
	function Update($cu_cod_cuidado,$cu_nombre,$cu_descripcion){
	//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "UPDATE cuidado SET cu_nombre = ?, cu_descripcion= ? WHERE cu_cod_cuidado = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($cu_nombre,$cu_descripcion,$cu_cod_cuidado));		

		floopets_BD::Disconnect();
	
	}


		function Delete($cu_cod_cuidado){
	//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "DELETE FROM cuidado WHERE cu_cod_cuidado = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($cu_cod_cuidado));		

		floopets_BD::Disconnect();
	}
}

?>