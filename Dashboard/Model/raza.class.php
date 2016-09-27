<?php

class Gestion_raza{
	//Metodo create()
	//El metodo create guarda los datos en la tabla contactos, captura todos los parametros desde el  formulario

	function Create($ra_nombre,$ta_cod_tipo_animal,$cu_cod_cuidado,$ra_historia,$ra_imagen){

		//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//Crear el query que vamos a realizar
		$consulta = "INSERT INTO raza (ra_nombre,ta_cod_tipo_animal,cu_cod_cuidado,ra_historia,ra_imagen) VALUES (?,?,?,?,?)";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($ra_nombre,$ta_cod_tipo_animal,$cu_cod_cuidado,$ra_historia,$ra_imagen));

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
	function readbycodtipo($tipo_mascota){
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$consulta = "SELECT * FROM raza WHERE ta_cod_tipo_animal=?";
		$query = $Conexion->prepare($consulta);
		$query->execute(array($tipo_mascota));
		$resultado = $query->fetchALL(PDO::FETCH_BOTH);
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

	function Update($ra_cod_raza,$ra_nombre,$ta_cod_tipo_animal,$cu_cod_cuidado,$ra_historia,$ra_imagen){
	//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



		//Crear el query que vamos a realizar
		$consulta = "UPDATE raza SET ra_nombre = ?, ta_cod_tipo_animal= ? , cu_cod_cuidado= ?, ra_historia= ?, ra_imagen= ? WHERE ra_cod_raza = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($ra_nombre,$ta_cod_tipo_animal,$cu_cod_cuidado,$ra_historia,$ra_imagen,$ra_cod_raza));

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
			 function Nombres()
   {
    //para el modificar por cada usuario usuario
    $conexion=floopets_BD::Connect();
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $consulta="SELECT raza.*,tipo_animal.*,cuidado.* FROM raza INNER JOIN tipo_animal on tipo_animal.ta_cod_tipo_animal=raza.ta_cod_tipo_animal INNER JOIN cuidado on cuidado.cu_cod_cuidado=raza.cu_cod_cuidado ";
    // $consulta="SELECT * FROM citas  WHERE Cod_usu=?";
    $query=$conexion->prepare($consulta);
    $query->execute(array());

	$resultado=$query->fetchAll(PDO::FETCH_BOTH);

	floopets_BD::Disconnect();

	return $resultado;
  }
}

?>
