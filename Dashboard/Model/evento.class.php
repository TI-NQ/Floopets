<?php
	class Gestion_evento{

		function Create($te_cod_tipo_evento,$eve_nombre,$eve_direccion,$eve_fecha,$eve_fecha_hasta,$eve_hora,$eve_hora_hasta,$eve_descripcion,$eve_imagen,$eve_estado,$eve_carpeta){
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Creamos el query de la consulta a la BD
			$consulta="INSERT INTO evento (te_cod_tipo_evento, eve_nombre, eve_direccion,eve_fecha, eve_fecha_hasta,eve_hora ,eve_hora_hasta, eve_descripcion , eve_imagen , eve_estado , eve_carpeta) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

			$query=$conexion->prepare($consulta);
			$query->execute(array($te_cod_tipo_evento,$eve_nombre,$eve_direccion,$eve_fecha,$eve_fecha_hasta,$eve_hora,$eve_hora_hasta,$eve_descripcion,$eve_imagen,$eve_estado,$eve_carpeta));

			floopets_BD::Disconnect();
		}


		function ReadALL(){
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Creamos el query de la consulta a la BD
			$consulta="SELECT * FROM evento";

			$query=$conexion->prepare($consulta);
			$query->execute();
			$resultado = $query->fetchALL(PDO::FETCH_BOTH);
			floopets_BD::Disconnect();

			return $resultado;
		}



		function ReadbyID($eve_cod_evento){
			//Intanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Creamos el query de la consulta a la bd
			$consulta="SELECT * FROM evento WHERE eve_cod_evento=? ";

			$query=$conexion->prepare($consulta);
			$query->execute(array($eve_cod_evento));

			$resultado = $query->fetch(PDO::FETCH_BOTH);

			floopets_BD::Disconnect();
			return $resultado;
		}

		function Update($eve_cod_evento,$te_cod_tipo_evento,$eve_nombre,$eve_direccion,$eve_fecha,$eve_fecha_hasta,$eve_hora,$eve_hora_hasta,$eve_descripcion,$eve_imagen,$eve_estado,$eve_carpeta)
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "UPDATE evento SET te_cod_tipo_evento = ?, eve_nombre=?, eve_direccion=?, eve_fecha=?,eve_fecha_hasta=?, eve_hora=?,eve_hora_hasta=?, eve_descripcion=?, eve_imagen=?,eve_estado=?,eve_carpeta=? WHERE eve_cod_evento = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($te_cod_tipo_evento,$eve_nombre,$eve_direccion,$eve_fecha,$eve_fecha_hasta,$eve_hora,$eve_hora_hasta,$eve_descripcion,$eve_imagen,$eve_estado,$eve_carpeta,$eve_cod_evento));
				floopets_BD::Disconnect();
		}

		function Delete($eve_cod_evento){
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



			//Crear el query que vamos a realizar
			$consulta = "DELETE FROM evento WHERE eve_cod_evento = ?" ;

			$query = $Conexion->prepare($consulta);
			$query->execute(array($eve_cod_evento));

			floopets_BD::Disconnect();

		}
		function ReadEvento(){
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Creamos el query de la consulta a la BD
			$consulta="SELECT * FROM evento WHERE (eve_estado = 'Publicado' OR eve_estado = 'publicado') AND  eve_fecha >= CURDATE()   LIMIT 6";

			$query=$conexion->prepare($consulta);
			$query->execute();
			$resultado = $query->fetchALL(PDO::FETCH_BOTH);
			floopets_BD::Disconnect();

			return $resultado;
		}
			 function Nombres()
   {
    //para el modificar por cada usuario usuario
    $conexion=floopets_BD::Connect();
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $consulta="SELECT tipo_evento.*,evento.* FROM evento INNER JOIN tipo_evento on tipo_evento.te_cod_tipo_evento=evento.te_cod_tipo_evento ";

    $query=$conexion->prepare($consulta);
    $query->execute(array());

	$resultado=$query->fetchAll(PDO::FETCH_BOTH);

	floopets_BD::Disconnect();

	return $resultado;
  }
	function eventos_proximos(){
		date_default_timezone_set("America/Bogota");
		$fechasystem=date("Y-m-d");
		$conexion=floopets_BD::Connect();
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$consulta="SELECT * FROM evento WHERE eve_fecha > $fechasystem";
		$query=$conexion->prepare($consulta);
		$query->execute(array());
		$resultado=$query->fetchALL(PDO::FETCH_BOTH);
		floopets_BD::Disconnect();
		return $resultado;
		}
		function historial_eventos(){
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$consulta="SELECT * FROM evento ORDER BY eve_fecha DESC";
			$query=$conexion->prepare($consulta);
			$query->execute(array());
			$resultado=$query->fetchALL(PDO::FETCH_BOTH);
			floopets_BD::Disconnect();
			return $resultado;
			}

	}













 ?>
