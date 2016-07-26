<?php
	class gestion_vacuna
	{
		// Metodo Create()
		// El metodo guarda los datos en la tabla contactos, captura todos los parametros desde el formulario.
		function Create($vac_cod_vacuna,$vac_nombre,$fecha)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO vacunas (vac_cod_vacuna,vac_nombre,fecha) VALUES (?,?,?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($vac_cod_vacuna,$vac_nombre,$fecha));
			floopets_BD::Disconect();
		}

	}
?>
