<?php
	class gestion_denuncia
	{
		// Metodo Create()
		// El metodo guarda los datos en la tabla contactos, captura todos los parametros desde el formulario.
		function Create($td_tipo_denuncia,$td_nombre,$td_estado)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO rol (td_tipo_denuncia,td_nombre,td_estado) VALUES (?,?,?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($td_tipo_denuncia,$td_nombre,$td_estado));
			floopets_BD::Disconect();
		}

	}
?>