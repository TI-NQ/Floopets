<?php
	class gestion_cuidado
	{
		// Metodo Create()
		// El metodo guarda los datos en la tabla contactos, captura todos los parametros desde el formulario.
		function Create($cu_cod_cuidado,$cu_nombre,$cu_descripcion)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO cuidado (cu_cod_cuidado,cu_nombre,cu_descripcion) VALUES (?,?,?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($cu_cod_cuidado,$cu_nombre,$cu_descripcion));
			floopets_BD::Disconect();
		}

	}
?>
