<?php
	class Gestion_evento{

		function Create($te_cod_tipo_evento,$eve_nombre,$eve_direccion,$eve_fecha,$eve_hora,$eve_descripcion){
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Creamos el query de la consulta a la BD
			$consulta="INSERT INTO evento (te_cod_tipo_evento,eve_nombre,eve_direccion,eve_fecha,eve_hora,eve_descripcion) VALUES (?,?,?,?,?,?)";

			$query=$conexion->prepare($consulta);
			$query->execute(array($te_cod_tipo_evento,$eve_nombre,$eve_direccion,$eve_fecha,$eve_hora,$eve_descripcion));

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

		function Update($eve_cod_evento,$te_cod_tipo_evento,$eve_nombre,$eve_direccion,$eve_fecha,$eve_hora,$eve_descripcion)
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "UPDATE evento SET te_cod_tipo_evento = ?, eve_nombre=?, eve_direccion=?, eve_fecha=?, eve_hora=?, eve_descripcion=? WHERE eve_cod_evento = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($te_cod_tipo_evento,$eve_nombre,$eve_direccion,$eve_fecha,$eve_hora,$eve_descripcion,$eve_cod_evento));
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


	}













 ?>
