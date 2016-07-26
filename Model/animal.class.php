<?php
	class gestion_animal
	{
		// Metodo Create()	
		function Create($ani_cod_animal,$ra_cod_raza,$ani_nombre,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO animal (ani_cod_animal,ra_cod_raza,ani_nombre,ani_esterilizado,ani_edad,ani_descripcion,ani_numero_microchip) VALUES (?,?,?,?,?,?,?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($ani_cod_animal,$ra_cod_raza,$ani_nombre,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip));
			floopets_BD::Disconect();
		}

	}
?>
