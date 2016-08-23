<?php
	class gestion_permisos
	{
		// Metodo Create()
		function Create($permiso_nombre)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			//Si la pk es autoincremental se excluye del INSERT
			$consulta ="INSERT INTO permiso (permiso_nombre) VALUES (?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($permiso_nombre));
			floopets_BD::Disconnect();
		}
		function ReadAll()
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "SELECT * FROM permiso";
				$query = $Conexion->prepare($consulta);
				$query->execute();
				//Devolvemos el resultado en un arreglo
				//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
				//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
				$resultado = $query->fetchALL(PDO::FETCH_BOTH);
				return $resultado;
				floopets_BD::Disconnect();
		}
		function ReadbyID($cod_permiso)
		{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
			$consulta = "SELECT * FROM permiso WHERE cod_permiso=?";
			$query = $Conexion->prepare($consulta);
			$query->execute(array($cod_permiso));
			//Devolvemos el resultado en un arreglo
			//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
			//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
			$resultado = $query->fetch(PDO::FETCH_BOTH);
			return $resultado;
			floopets_BD::Disconnect();
		}
		function Update($cod_permiso,$permiso_nombre)
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "UPDATE permiso SET permiso_nombre = ? WHERE cod_permiso = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($permiso_nombre,$cod_permiso));
				floopets_BD::Disconnect();

		}
		function Delete($cod_permiso)
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "DELETE FROM permiso WHERE cod_permiso = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($cod_permiso));
				floopets_BD::Disconnect();
		}


	}
?>
