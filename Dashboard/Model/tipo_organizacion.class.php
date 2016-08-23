<?php 
	
class Gestion_tipo_organizacion{
	//Metodo create()
	//El metodo create guarda los datos en la tabla contactos, captura todos los parametros desde el  formulario

	function Create($to_nombre){

		//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//Crear el query que vamos a realizar
		$consulta = "INSERT INTO tipo_organizacion (to_nombre) VALUES (?)";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($to_nombre));

		floopets_BD::Disconnect();
	}
	
	function ReadbyID($to_cod_tipo_organizacion){

		//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "SELECT * FROM tipo_organizacion WHERE to_cod_tipo_organizacion=?";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($to_cod_tipo_organizacion));

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
		$consulta = "SELECT * FROM tipo_organizacion";

		$query = $Conexion->prepare($consulta);
		$query->execute();

		//Devolvemos el resultado en un arreglo
		//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
		//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL

		$resultado = $query->fetchALL(PDO::FETCH_BOTH);
		return $resultado;

		floopets_BD::Disconnect();
	}
	
	function Update($to_cod_tipo_organizacion,$to_nombre){
	//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "UPDATE tipo_organizacion SET to_nombre = ? WHERE to_cod_tipo_organizacion = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($to_nombre,$to_cod_tipo_organizacion));		

		floopets_BD::Disconnect();
	
	}


		function Delete($to_cod_tipo_organizacion){
	//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "DELETE FROM tipo_organizacion WHERE to_cod_tipo_organizacion = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($to_cod_tipo_organizacion));		

		floopets_BD::Disconnect();
	}
}

?>