<?php
	class Gestion_tipo_evento{

		function Create($te_nombre,$te_estado){
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Creamos el query de la consulta a la BD
			$consulta="INSERT INTO tipo_evento (te_nombre,te_estado) VALUES (?,?)";

			$query=$conexion->prepare($consulta);
			$query->execute(array($te_nombre,$te_estado));

			floopets_BD::Disconnect();
		}


		function ReadAll(){

			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar
			$consulta = "SELECT tipo_evento.* FROM tipo_evento ";
			$query = $Conexion->prepare($consulta);
			$query->execute();
			//Devolvemos el resultado en un arreglo
			//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
			//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
			$resultado = $query->fetchALL(PDO::FETCH_BOTH);
			return $resultado;
			floopets_BD::Disconnect();
		}

		function ReadbyID($te_cod_tipo_evento){
			//Intanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Creamos el query de la consulta a la bd
			$consulta="SELECT * FROM tipo_evento WHERE te_cod_tipo_evento=? ";

			$query=$conexion->prepare($consulta);
			$query->execute(array($te_cod_tipo_evento));

			$resultado = $query->fetch(PDO::FETCH_BOTH);

			floopets_BD::Disconnect();
			return $resultado;
		}

		function Update($te_cod_tipo_evento,$te_nombre,$te_estado)
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "UPDATE tipo_evento SET te_nombre = ?, te_estado=? WHERE te_cod_tipo_evento = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($te_nombre,$te_estado,$te_cod_tipo_evento));
				floopets_BD::Disconnect();
		}

		function Delete($te_cod_tipo_evento){
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



			//Crear el query que vamos a realizar
			$consulta = "DELETE FROM tipo_evento WHERE te_cod_tipo_evento = ?" ;

			$query = $Conexion->prepare($consulta);
			$query->execute(array($te_cod_tipo_evento));

			floopets_BD::Disconnect();

		}
	}













 ?>
