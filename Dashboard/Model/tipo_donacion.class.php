<?php

	class Gestion_tipo_donacion{

		function Create($td_nombre,$td_estado){
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Creamos el query de la consulta a la BD
			$consulta ="INSERT INTO tipo_donacion (td_nombre,td_estado) VALUES (?,?)";

			$query = $conexion->prepare($consulta);
			$query->execute(array($td_nombre,$td_estado));

			floopets_BD::Disconnect();
	}

		function ReadALL(){
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Creamos el query de la consulta a la BD
			$consulta ="SELECT * FROM tipo_donacion";

			$query = $conexion->prepare($consulta);
			$query->execute();

			$resultado = $query->fetchALL(PDO::FETCH_BOTH);
			floopets_BD::Disconnect();

			return $resultado;
		}

		function ReadbyID($td_cod_tipo_donacion){

			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



			//Crear el query que vamos a realizar
			$consulta = "SELECT * FROM tipo_donacion WHERE td_cod_tipo_donacion=?";

			$query = $Conexion->prepare($consulta);
			$query->execute(array($td_cod_tipo_donacion));

			//Devolvemos el resultado en un arreglo
			//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
			//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL

			$resultado = $query->fetch(PDO::FETCH_BOTH);

			floopets_BD::Disconnect();
			return $resultado;
        }

        function Update($td_cod_tipo_donacion,$td_nombre,$td_estado){
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



			//Crear el query que vamos a realizar
			$consulta = "UPDATE tipo_donacion SET td_nombre=?, td_estado=? WHERE td_cod_tipo_donacion = ?" ;

			$query = $Conexion->prepare($consulta);
			$query->execute(array($td_nombre,$td_estado,$td_cod_tipo_donacion));

			floopets_BD::Disconnect();

	}

		function Delete($td_cod_tipo_donacion){
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



			//Crear el query que vamos a realizar
			$consulta = "DELETE FROM tipo_donacion WHERE td_cod_tipo_donacion = ?" ;

			$query = $Conexion->prepare($consulta);
			$query->execute(array($td_cod_tipo_donacion));

			floopets_BD::Disconnect();

	}

	}

 ?>
