<?php
	class gestion_tipo_denuncia
	{
		// Metodo Create()
		function Create($td_tipo_denuncia,$td_nombre,$td_estado)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO tipo_denuncia (td_tipo_denuncia,td_nombre,td_estado) VALUES (?,?,?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($td_tipo_denuncia,$td_nombre,$td_estado));
			floopets_BD::Disconnect();
		}
		function ReadAll()
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "SELECT * FROM tipo_denuncia";
				$query = $Conexion->prepare($consulta);
				$query->execute();
				//Devolvemos el resultado en un arreglo
				//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
				//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
				$resultado = $query->fetchALL(PDO::FETCH_BOTH);
				return $resultado;
				floopets_BD::Disconnect();
		}
		function ReadbyID($td_cod_tipo_denuncia)
		{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
			$consulta = "SELECT * FROM tipo_denuncia WHERE td_cod_tipo_denuncia=?";
			$query = $Conexion->prepare($consulta);
			$query->execute(array($td_cod_tipo_denuncia));
			//Devolvemos el resultado en un arreglo
			//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
			//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
			$resultado = $query->fetch(PDO::FETCH_BOTH);
			return $resultado;
			floopets_BD::Disconnect();
		}
		function Update($td_tipo_denuncia,$td_nombre,$td_estado,$td_cod_tipo_denuncia)
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "UPDATE tipo_denuncia SET td_tipo_denuncia = ?,td_nombre=?,td_estado=? WHERE td_cod_tipo_denuncia = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($td_tipo_denuncia,$td_nombre,$td_estado,$td_cod_tipo_denuncia));
				floopets_BD::Disconnect();

		}
		function Delete($td_cod_tipo_denuncia)
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "DELETE FROM tipo_denuncia WHERE td_cod_tipo_denuncia = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($td_cod_tipo_denuncia));
				floopets_BD::Disconnect();
		}

	}
?>
