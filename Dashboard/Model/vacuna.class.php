<?php
	class gestion_vacuna
	{
		// Metodo Create()
		// El metodo guarda los datos en la tabla contactos, captura todos los parametros desde el formulario.
		function Create($vac_nombre,$fecha)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO vacunas (vac_nombre,fecha) VALUES (?,?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($vac_nombre,$fecha));
			floopets_BD::Disconnect();
		}
		function ReadAll()
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "SELECT * FROM vacunas";
				$query = $Conexion->prepare($consulta);
				$query->execute();
				//Devolvemos el resultado en un arreglo
				//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
				//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
				$resultado = $query->fetchALL(PDO::FETCH_BOTH);
				return $resultado;
				floopets_BD::Disconnect();
		}

		function ReadbyID($vac_cod_vacuna)
		{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
			$consulta = "SELECT * FROM vacunas WHERE vac_cod_vacuna=?";
			$query = $Conexion->prepare($consulta);
			$query->execute(array($vac_cod_vacuna));
			//Devolvemos el resultado en un arreglo
			//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
			//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
			$resultado = $query->fetch(PDO::FETCH_BOTH);
			return $resultado;
			floopets_BD::Disconnect();
		}

		function Update($vac_cod_vacuna,$vac_nombre,$fecha)
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "UPDATE vacunas SET vac_nombre = ?, fecha=? WHERE vac_cod_vacuna = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($vac_nombre,$fecha,$vac_cod_vacuna));
				floopets_BD::Disconnect();

		}
		function Delete($vac_cod_vacuna)
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "DELETE FROM vacunas WHERE vac_cod_vacuna = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($vac_cod_vacuna));
				floopets_BD::Disconnect();
		}


	}
?>
