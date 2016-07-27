<?php
	class gestion_adopcion
	{
		// Metodo Create()
		function Create($ado_cod_adopcion,$ani_cod_animal,$usu_cod_usuario,$ado_fecha,$ado_hora)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO adopcion (ado_cod_adopcion,ani_cod_animal,usu_cod_usuario,ado_fecha,ado_hora) VALUES (?,?,?,?,?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($ado_cod_adopcion,$ani_cod_animal,$usu_cod_usuario,$ado_fecha,$ado_hora));
			floopets_BD::Disconnect();
		}
		function ReadAll()
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets::Connect();
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
				floopets::Disconnect();
		}

		function Update($ado_cod_adopcion,$ani_cod_animal,$usu_cod_usuario,$ado_fecha,$ado_hora)
		{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar
			$consulta = "UPDATE adopcion SET to_nombre=?,ani_cod_animal=?,usu_cod_usuario=?,ado_fecha=?,ado_hora=? WHERE ado_cod_adopcion = ?" ;
			$query = $Conexion->prepare($consulta);
			$query->execute(array($ani_cod_animal,$usu_cod_usuario,$ado_fecha,$ado_hora,$ado_cod_adopcion));
			floopets::Disconnect();
		}
			function Delete($ado_cod_adopcion,$ani_cod_animal,$usu_cod_usuario,$ado_fecha,$ado_hora)
			{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "DELETE FROM adopcion WHERE ado_cod_adopcion = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($ado_cod_adopcion));
				floopets::Disconnect();
		}

	}
?>
