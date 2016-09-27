<?php
	class Gestion_noticia
	{
		// Metodo Create()
		function Create($usu_cod_usuario,$not_titulo,$not_contenido,$not_galeria,$not_portada,$not_palabras_clave)
		{
			//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//Crear el query que vamos a realizar
		$consulta = "INSERT INTO noticias (usu_cod_usuario,not_titulo,not_contenido,not_fecha_publicacion,not_galeria,not_portada,not_palabras_clave) VALUES (?,?,?,now(),?,?,?)";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($usu_cod_usuario,$not_titulo,$not_contenido,$not_galeria,$not_portada,$not_palabras_clave));

		floopets_BD::Disconnect();
		}
		function ReadAll()
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "SELECT * FROM noticias";
				$query = $Conexion->prepare($consulta);
				$query->execute();
				//Devolvemos el resultado en un arreglo
				//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
				//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
				$resultado = $query->fetchALL(PDO::FETCH_BOTH);
				return $resultado;
				floopets_BD::Disconnect();
		}
		function ReadbyID($cod_noticia)
			{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar
			$consulta = "SELECT * FROM noticias WHERE cod_noticia=?";
			$query = $Conexion->prepare($consulta);
			$query->execute(array($cod_noticia));
			//Devolvemos el resultado en un arreglo
			//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
			//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
			$resultado = $query->fetch(PDO::FETCH_BOTH);
			return $resultado;
			floopets_BD::Disconnect();
		}

		function Update($cod_noticia,$usu_cod_usuario,$not_titulo,$not_contenido,$not_galeria,$not_portada,$not_palabras_clave)
		{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar
			$consulta = "UPDATE noticias SET usu_cod_usuario=?,not_titulo=?,not_contenido=?,not_galeria=?,not_portada=?,not_palabras_clave=? WHERE cod_noticia = ?" ;
			$query = $Conexion->prepare($consulta);
			$query->execute(array($usu_cod_usuario,$not_titulo,$not_contenido,$not_galeria,$not_portada,$not_palabras_clave,$cod_noticia));
			floopets_BD::Disconnect();
		}
			function Delete($cod_noticia)
			{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "DELETE FROM noticias WHERE cod_noticia = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($cod_noticia));
				floopets_BD::Disconnect();
		}


	}
?>
