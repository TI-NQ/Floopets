<?php
	class Gestion_adopcion
	{
		// Metodo Create()
		function Create($ani_cod_animal,$usu_cod_usuario)
		{
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO adopcion (ani_cod_animal,usu_cod_usuario,ado_fecha) VALUES (?,?,now())";
			$query = $conexion->prepare($consulta);
			$query->execute(array($ani_cod_animal,$usu_cod_usuario));
			floopets_BD::Disconnect();
		}
		function solicitudesapro($org_cod_organizacion)
		{
			//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "SELECT animal.*,usuario.*,raza.*,adopcion.* FROM usuario INNER JOIN adopcion ON usuario.usu_cod_usuario=adopcion.usu_cod_usuario INNER JOIN animal ON adopcion.ani_cod_animal=animal.ani_cod_animal INNER JOIN raza on animal.ra_cod_raza=raza.ra_cod_raza WHERE animal.org_cod_organizacion=? AND animal.ani_estado='Adoptado' ";
				$query = $Conexion->prepare($consulta);
				$query->execute(array($org_cod_organizacion));
				//Devolvemos el resultado en un arreglo
				//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
				//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
				$resultado = $query->fetchALL(PDO::FETCH_BOTH);
				return $resultado;
				floopets_BD::Disconnect();

		}
		
	}
?>
