<?php
	class Gestion_organizacion{

		function Create($to_cod_tipo_organizacion,$org_nombre,$org_nit,$org_email,$org_telefono,$org_direccion){
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Creamos el query de la consulta a la BD
			$consulta="INSERT INTO organizacion (to_cod_tipo_organizacion,org_nombre,org_nit,org_email,org_telefono,org_direccion) VALUES (?,?,?,?,?,?)";

			$query=$conexion->prepare($consulta);
			$query->execute(array($to_cod_tipo_organizacion,$org_nombre,$org_nit,$org_email,$org_telefono,$org_direccion));

			floopets_BD::Disconnect();
		}


		function ReadALL(){
			//Instanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Creamos el query de la consulta a la BD
			$consulta="SELECT * FROM organizacion";

			$query=$conexion->prepare($consulta);
			$query->execute();
			$resultado = $query->fetchALL(PDO::FETCH_BOTH);
			floopets_BD::Disconnect();

			return $resultado;
		}

		

		function ReadbyID($org_cod_organizacion){
			//Intanciamos y nos conectamos a la bd
			$conexion=floopets_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Creamos el query de la consulta a la bd
			$consulta="SELECT * FROM organizacion WHERE org_cod_organizacion=? ";

			$query=$conexion->prepare($consulta);
			$query->execute(array($org_cod_organizacion));

			$resultado = $query->fetch(PDO::FETCH_BOTH);

			floopets_BD::Disconnect();
			return $resultado;
		}

		function Update($org_cod_organizacion,$to_cod_tipo_organizacion,$org_nombre,$org_nit,$org_email,$org_telefono,$org_direccion)
		{
				//Instanciamos y nos conectamos a la bd
				$Conexion = floopets_BD::Connect();
				$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Crear el query que vamos a realizar
				$consulta = "UPDATE organizacion SET to_cod_tipo_organizacion = ?, org_nombre=?, org_nit=?, org_email=?, org_telefono=?, org_direccion=? WHERE org_cod_organizacion = ?" ;
				$query = $Conexion->prepare($consulta);
				$query->execute(array($to_cod_tipo_organizacion,$org_nombre,$org_nit,$org_email,$org_telefono,$org_direccion,$org_cod_organizacion));
				floopets_BD::Disconnect();
		}

		function Delete($org_cod_organizacion){
			//Instanciamos y nos conectamos a la bd
			$Conexion = floopets_BD::Connect();
			$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

			//Crear el query que vamos a realizar
			$consulta = "DELETE FROM organizacion WHERE org_cod_organizacion = ?" ;

			$query = $Conexion->prepare($consulta);
			$query->execute(array($org_cod_organizacion));		

			floopets_BD::Disconnect();
			
		}	


	}













 ?>
