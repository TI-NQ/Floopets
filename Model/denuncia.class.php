<?php
	class gestion_denuncia
	{
		// Metodo Create()
		function Create($de_cod_denuncia,$usu_cod_usuario,$td_tipo_denuncia,$descripcion,$de_fecha)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO denuncia (de_cod_denuncia,usu_cod_usuario,td_tipo_denuncia,descripcion,de_fecha) VALUES (?,?,?,?,?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($de_cod_denuncia,$usu_cod_usuario,$td_tipo_denuncia,$descripcion,$de_fecha));
			floopets_BD::Disconnect();
		}

	}
?>
