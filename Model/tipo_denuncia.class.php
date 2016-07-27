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

	}
?>
