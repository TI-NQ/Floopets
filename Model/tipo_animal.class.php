<?php
	class gestion_animal
	{
		// Metodo Create()
		function Create($ta_cod_tipo_animal,$ta_nombre,$cu_cod_cuidado,$tamano,$galeria,$video)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO tipo_animal (ta_cod_tipo_animal,ta_nombre,cu_cod_cuidado,tamano,galeria,video) VALUES (?,?,?,?,?,?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($ta_cod_tipo_animal,$ta_nombre,$cu_cod_cuidado,$tamano,$galeria,$video));
			floopets_BD::Disconnect();
		}

	}
?>
