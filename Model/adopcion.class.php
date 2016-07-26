<?php
	class gestion_adopcion
	{
		// Metodo Create()		
		function Create($ado_cod_adopcion,$ani_cod_animal,$usu_cod_usuario,$ado_fecha,$ado_hora)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO adopcion (ado_cod_adopcion,ani_cod_animal,usu_cod_usuario,ado_fecha,ado_hora) VALUES (?,?,?,?,?)";
			$query = $conexion->prepare($consulta);
			$query->execute(array($ado_cod_adopcion,$ani_cod_animal,$usu_cod_usuario,$ado_fecha,$ado_hora));
			floopets_BD::Disconect();
		}

	}
?>
