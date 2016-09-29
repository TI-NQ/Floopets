<?php
	class Gestion_animal
	{
		// Metodo Create()
		function Create($ra_cod_raza,$ani_nombre,$ani_color,$ani_tamanio,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip,$ani_sexo,$org_cod_organizacion,$ani_imagen,$ani_carpeta)
		{
			//Instanciamos y nos conectamos a la bd
		$Conexion = floopets_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//Crear el query que vamos a realizar
		$consulta = "INSERT INTO animal (ra_cod_raza ,ani_nombre ,ani_color, ani_tamanio,ani_esterilizado, ani_edad, ani_descripcion, ani_numero_microchip, ani_sexo, org_cod_organizacion,ani_imagen,ani_carpeta) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($ra_cod_raza,$ani_nombre,$ani_color,$ani_tamanio,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip,$ani_sexo,$org_cod_organizacion,$ani_imagen,$ani_carpeta));

		floopets_BD::Disconnect();
		}
		function ReadAll()
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "SELECT * FROM animal";
				$query = $Conexion->prepare($consulta);
				$query->execute();
				//Devolvemos el resultado en un arreglo
				//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
				//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
				$resultado = $query->fetchALL(PDO::FETCH_BOTH);
				return $resultado;
				floopets_BD::Disconnect();
		}
		function ReadbyID($ani_cod_animal)
			{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar
			$consulta = "SELECT * FROM animal WHERE ani_cod_animal=?";
			$query = $Conexion->prepare($consulta);
			$query->execute(array($ani_cod_animal));
			//Devolvemos el resultado en un arreglo
			//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
			//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
			$resultado = $query->fetch(PDO::FETCH_BOTH);
			return $resultado;
			floopets_BD::Disconnect();
		}
		function Readcarpeta($ani_carpeta)
			{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar
			$consulta = "SELECT * FROM animal WHERE ani_carpeta=?";
			$query = $Conexion->prepare($consulta);
			$query->execute(array($ani_carpeta));
			//Devolvemos el resultado en un arreglo
			//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
			//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
			$resultado = $query->fetch(PDO::FETCH_BOTH);
			return $resultado;
			floopets_BD::Disconnect();
		}

		function Update($ani_cod_animal,$ra_cod_raza,$ani_nombre,$ani_color,$ani_tamanio,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip,$ani_sexo,$org_cod_organizacion,$ani_imagen,$ani_carpeta)
		{
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Crear el query que vamos a realizar
			$consulta = "UPDATE animal SET ra_cod_raza=?,ani_nombre=?,ani_color=?,ani_tamanio=?,ani_esterilizado=?,ani_edad=?,ani_descripcion=?,ani_numero_microchip=?,ani_sexo=?, org_cod_organizacion=? ,ani_imagen=?, ani_carpeta=? WHERE ani_cod_animal = ?" ;
			$query = $Conexion->prepare($consulta);
			$query->execute(array($ra_cod_raza,$ani_nombre,$ani_color,$ani_tamanio,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip,$ani_sexo,$org_cod_organizacion,$ani_imagen,$ani_carpeta,$ani_cod_animal));
			floopets_BD::Disconnect();
		}
			function Delete($ani_cod_animal)
			{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "DELETE FROM animal WHERE ani_cod_animal = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($ani_cod_animal));
				floopets_BD::Disconnect();
		}

		 function Nombres()
   {
    //para el modificar por cada usuario usuario
    $conexion=floopets_BD::Connect();
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $consulta="SELECT animal.*,raza.*,organizacion.* FROM animal INNER JOIN raza on raza.ra_cod_raza=animal.ra_cod_raza INNER JOIN organizacion on organizacion.org_cod_organizacion=animal.org_cod_organizacion ";
    // $consulta="SELECT * FROM citas  WHERE Cod_usu=?";
    $query=$conexion->prepare($consulta);
    $query->execute(array());

	$resultado=$query->fetchAll(PDO::FETCH_BOTH);

	floopets_BD::Disconnect();

	return $resultado;
  }
   function Nombresraza($org_cod_organizacion)
   {
    //para el modificar por cada usuario usuario
    $conexion=floopets_BD::Connect();
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $consulta="SELECT animal.*,raza.* FROM animal INNER JOIN raza on raza.ra_cod_raza=animal.ra_cod_raza WHERE org_cod_organizacion=?";
    // $consulta="SELECT * FROM citas  WHERE Cod_usu=?";
    $query=$conexion->prepare($consulta);
    $query->execute(array($org_cod_organizacion));

	$resultado=$query->fetchAll(PDO::FETCH_BOTH);

	floopets_BD::Disconnect();

	return $resultado;
  }
  function paginacion()
			{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "SELECT * FROM animal ORDER BY ani_cod_animal DESC" ;
				$query = $Conexion->prepare($consulta);
				$query->execute();
				//Devolvemos el resultado en un arreglo
				//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
				//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL
				$resultado = $query->fetchALL(PDO::FETCH_BOTH);
				return $resultado;
				floopets_BD::Disconnect();
		}

	}
?>
