<?php
	class gestion_rol
	{
		// Metodo Create()		
		function Create($cod_rol,$rol_nombre)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO rol (cod_rol,rol_nombre) VALUES (?,?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($cod_rol,$rol_nombre));
			floopets_BD::Disconect();
		}

	}
?>
