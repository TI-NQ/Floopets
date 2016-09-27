<?php
	class Gestion_noticia
	{
		// Metodo Create()
		function Create($usu_cod_usuario,$not_titulo,$not_contenido,$not_fecha_publicacion,$not_galeria,$not_portada,$not_palabras_clave)
		{
			//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//Crear el query que vamos a realizar
		$consulta = "INSERT INTO noticias (usu_cod_usuario,not_titulo,not_contenido,not_fecha_publicacion,not_galeria,not_portada,not_palabras_clave) VALUES (?,?,?,?,?,?,?)";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($usu_cod_usuario,$not_titulo,$not_contenido,$not_fecha_publicacion,$not_galeria,$not_portada,$not_palabras_clave));

		floopets_BD::Disconnect();
		}
		function ReadAll()
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "SELECT * FROM animal";
				$query = $Conexion->prepare($consulta);
				$query->execute();
				//Devolvemos el resultado en un arreglo
				//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
				//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
				$resultado = $query->fetchALL(PDO::FETCH_BOTH);
				return $resultado;
				floopets_BD::Disconnect();
		}
		function ReadbyID($ani_cod_animal)
			{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar
			$consulta = "SELECT * FROM animal WHERE ani_cod_animal=?";
			$query = $Conexion->prepare($consulta);
			$query->execute(array($ani_cod_animal));
			//Devolvemos el resultado en un arreglo
			//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
			//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
			$resultado = $query->fetch(PDO::FETCH_BOTH);
			return $resultado;
			floopets_BD::Disconnect();
		}

		function Update($ra_cod_raza,$ani_nombre,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip,$ani_cod_animal)
		{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar
			$consulta = "UPDATE animal SET ra_cod_raza=?,ani_nombre=?,ani_esterilizado=?,ani_edad=?,ani_descripcion=?,ani_numero_microchip=? WHERE ani_cod_animal = ?" ;
			$query = $Conexion->prepare($consulta);
			$query->execute(array($ra_cod_raza,$ani_nombre,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip,$ani_cod_animal));
			floopets_BD::Disconnect();
		}
			function Delete($ani_cod_animal)
			{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "DELETE FROM animal WHERE ani_cod_animal = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($ani_cod_animal));
				floopets_BD::Disconnect();
		}


	}
?>
