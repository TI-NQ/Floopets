<?php
	class gestion_permisos
	{
		// Metodo Create()
		function Create($cod_permiso,$permiso_nombre)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO permiso (cod_permiso,permiso_nombre) VALUES (?,?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($cod_permiso,$permiso_nombre));
			floopets_BD::Disconnect();
		}

	}
?>
