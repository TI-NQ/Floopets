<?php
	class Gestion_adopcion
	{
		// Metodo Create()
		function Create($ani_cod_animal,$usu_cod_usuario,$ado_fecha,$ado_hora,$ado_imagen)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO adopcion (ani_cod_animal,usu_cod_usuario,ado_fecha,ado_hora,ado_imagen) VALUES (?,?,?,?,?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($ani_cod_animal,$usu_cod_usuario,$ado_fecha,$ado_hora,$ado_imagen));
			floopets_BD::Disconnect();
		}
		function ReadAll()
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "SELECT * FROM adopcion";
				$query = $Conexion->prepare($consulta);
				$query->execute();
				//Devolvemos el resultado en un arreglo
				//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
				//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
				$resultado = $query->fetchALL(PDO::FETCH_BOTH);
				return $resultado;
				floopets_BD::Disconnect();
		}
		function ReadbyID($ado_cod_adopcion)
			{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar
			$consulta = "SELECT * FROM adopcion WHERE ado_cod_adopcion=?";
			$query = $Conexion->prepare($consulta);
			$query->execute(array($ado_cod_adopcion));
			//Devolvemos el resultado en un arreglo
			//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
			//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
			$resultado = $query->fetch(PDO::FETCH_BOTH);
			return $resultado;
			floopets_BD::Disconnect();
		}
		function Readbyorg_cod($org_cod)
			{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar
			$consulta = "SELECT * FROM animal WHERE org_cod_organizacion=? LIMIT 6";
			$query = $Conexion->prepare($consulta);
			$query->execute(array($org_cod));
			//Devolvemos el resultado en un arreglo
			//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
			//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
			$resultado = $query->fetchALL(PDO::FETCH_BOTH);
			return $resultado;
			floopets_BD::Disconnect();
		}

		function Update($ado_cod_adopcion,$ani_cod_animal,$usu_cod_usuario,$ado_fecha,$ado_hora,$ado_imagen)
		{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar
			$consulta = "UPDATE adopcion SET ani_cod_animal=?,usu_cod_usuario=?,ado_fecha=?,ado_hora=?,ado_imagen WHERE ado_cod_adopcion = ?" ;
			$query = $Conexion->prepare($consulta);
			$query->execute(array($ani_cod_animal,$usu_cod_usuario,$ado_fecha,$ado_hora,$ado_imagen,$ado_cod_adopcion));
			floopets_BD::Disconnect();
		}
			function Delete($ado_cod_adopcion)
			{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "DELETE FROM adopcion WHERE ado_cod_adopcion = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($ado_cod_adopcion));
				floopets_BD::Disconnect();
		}

	}
?>
