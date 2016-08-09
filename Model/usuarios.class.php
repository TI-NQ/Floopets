<?php

	class gestion_usuarios
	{
			function Create($usu_cod_usuario,$usu_nombre,$usu_apellido,$usu_telefono,$usu_email,$cod_rol)
			{
				//Instanciamos y nos conectamos a la bd
				$conexion=floopets_BD::Connect();
				$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				//Creamos el query de la consulta a la BD
				$consulta ="INSERT INTO usuario (usu_cod_usuario,usu_nombre,usu_apellido,usu_telefono,usu_email,cod_rol) VALUES (?,?,?,?,?,?)";
				$query = $conexion->prepare($consulta);
				$query->execute(array($usu_cod_usuario,$usu_nombre,$usu_apellido,$usu_telefono,$usu_email,$cod_rol));
				floopets_BD::Disconnect();
		}
		function ReadAll()
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "SELECT usuario.*, rol.* FROM usuario INNER JOIN rol ON usuario.cod_rol = rol.cod_rol";
				$query = $Conexion->prepare($consulta);
				$query->execute();
				//Devolvemos el resultado en un arreglo
				//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
				//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
				$resultado = $query->fetchALL(PDO::FETCH_BOTH);
				return $resultado;
				floopets_BD::Disconnect();
		}
		function ReadbyID($usu_cod_usuario)
		{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
			$consulta = "SELECT * FROM usuario WHERE usu_cod_usuario=?";
			$query = $Conexion->prepare($consulta);
			$query->execute(array($usu_cod_usuario));
			//Devolvemos el resultado en un arreglo
			//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
			//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
			$resultado = $query->fetch(PDO::FETCH_BOTH);
			return $resultado;
			floopets_BD::Disconnect();
		}
		function Update($usu_nombre,$usu_apellido,$usu_telefono,$usu_email,$cod_rol,$usu_cod_usuario)
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "UPDATE usuario SET usu_nombre=?,usu_apellido=?,usu_telefono=?,usu_email=?,cod_rol=? WHERE usu_cod_usuario = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($usu_nombre,$usu_apellido,$usu_telefono,$usu_email,$cod_rol,$usu_cod_usuario));
				floopets_BD::Disconnect();

		}
		function Delete($usu_cod_usuario)
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "DELETE FROM usuario WHERE usu_cod_usuario = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($usu_cod_usuario));
				floopets_BD::Disconnect();
		}


	}
?>
