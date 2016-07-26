<?php 
	class gestion_tipo_evento{

		function Create($te_nombre,$te_estado){
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connet();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Creamos el query de la consulta a la BD
			$consulta="INSERT INTO tipo_evento (te_nombre,te_estado) VALUES (?,?)";

			$query=$conexion->prepare($consulta);
			$query->exetute(array($te_nombre,$te_estado));

			floopets_BD::Disconect();
		}
		

		function ReadALL(){
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connet();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Creamos el query de la consulta a la BD
			$consulta="SELECT * FROM tipo_evento";

			$query=$conexion->prepare($consulta);
			$query->execute();
			$resultado = $query->fetchALL(PDO::FETCH_BOTH);
			floopets_BD::Disconect();

			return $resultado;
		}

		function ReadByID($te_cod_tipo_evento){
			//Intanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connet();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Creamos el query de la consulta a la bd
			$consulta="SELECT * FROM tipo_evento WHERE te_cod_tipo_evento=? ";
			
			$query=$conexion->prepare($consulta);
			$query->execute(array($te_cod_tipo_evento));

			$resultado = $query->fetch(PDO::FETCH_BOTH);
		
			floopets_BD::Disconect();
			return $resultado;
		}

		function Update($te_cod_tipo_evento,$te_nombre,$te_estado){
			//Intanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connet();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Creamos el query de la consulta a la bd
			$consulta = "UPDATE tipo_evento SET te_nombre=?, te_estado=? WHERE td_cod_tipo_evento = ?" ;
		}
	}













 ?>