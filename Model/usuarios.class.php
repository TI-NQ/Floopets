<?php

	class gestion_usuarios
	{
			function Create($usu_cod_usuario,$usu_nombre,$usu_apellido,$usu_telefono,$usu_cedula,$usu_email,$cod_rol)
			{
				//Instanciamos y nos conectamos a la bd
				$conexion=floopets_BD::Connect();
				$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				//Creamos el query de la consulta a la BD
				$consulta ="INSERT INTO usuario (usu_cod_usuario,usu_nombre,usu_apellido,usu_telefono,usu_cedula,usu_email,cod_rol) VALUES (?,?,?,?,?,?,?)";
				$query = $conexion->prepare($consulta);
				$query->execute(array($usu_cod_usuario,$usu_nombre,$usu_apellido,$usu_telefono,$usu_cedula,$usu_email,$cod_rol));
				floopets_BD::Disconnect();
		}

	}
?>
