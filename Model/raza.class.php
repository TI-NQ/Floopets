<?php
	class gestion_raza
	{
		// Metodo Create()
		function Create($ra_cod_raza,$ra_nombre,$ta_cod_tipo_animal)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO tipo_animal (ra_cod_raza,ra_nombre,ta_cod_tipo_animal) VALUES (?,?,?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($ra_cod_raza,$ra_nombre,$ta_cod_tipo_animal));
			floopets_BD::Disconnect();
		}

	}
?>
