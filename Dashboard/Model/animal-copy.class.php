<?php
	class Gestion_animal{

	function paraAdoptar() {
    $conexion=floopets_BD::Connect();
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $consulta="SELECT animal.*,raza.*,organizacion.* FROM animal
									INNER JOIN raza on raza.ra_cod_raza=animal.ra_cod_raza
									INNER JOIN organizacion on organizacion.org_cod_organizacion=animal.org_cod_organizacion
								WHERE ani_estado = 'adoptar' ";

    $query=$conexion->prepare($consulta);
    $query->execute(array());

	  $resultado=$query->fetchAll(PDO::FETCH_BOTH);

  	floopets_BD::Disconnect();

	  return $resultado;
  }


		function paraAdoptarbyPet($pet) {
	    $conexion=floopets_BD::Connect();
	    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	    $consulta="SELECT animal.*,raza.*,organizacion.*, tipo_animal.* FROM animal
										INNER JOIN raza on raza.ra_cod_raza=animal.ra_cod_raza
										INNER JOIN organizacion on organizacion.org_cod_organizacion=animal.org_cod_organizacion
										INNER JOIN tipo_animal on tipo_animal.ta_cod_tipo_animal = raza.ta_cod_tipo_animal
									WHERE ani_estado = 'adoptar' AND tipo_animal.ta_nombre = ?";

	    $query=$conexion->prepare($consulta);
	    $query->execute(array($pet));

		  $resultado=$query->fetchAll(PDO::FETCH_BOTH);

	  	floopets_BD::Disconnect();

		  return $resultado;
	  }
		function paraAdoptarbyraza($raza) {
	    $conexion=floopets_BD::Connect();
	    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	    $consulta="SELECT animal.*,raza.*,organizacion.*, tipo_animal.* FROM animal
										INNER JOIN raza on raza.ra_cod_raza=animal.ra_cod_raza
										INNER JOIN organizacion on organizacion.org_cod_organizacion=animal.org_cod_organizacion
										INNER JOIN tipo_animal on tipo_animal.ta_cod_tipo_animal = raza.ta_cod_tipo_animal
									WHERE ani_estado = 'adoptar' AND raza.ra_nombre = ?";

	    $query=$conexion->prepare($consulta);
	    $query->execute(array($raza));

		  $resultado=$query->fetchAll(PDO::FETCH_BOTH);

	  	floopets_BD::Disconnect();

		  return $resultado;
	  }
		function paraAdoptarbysex($sex) {
	    $conexion=floopets_BD::Connect();
	    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	    $consulta="SELECT animal.*,raza.*,organizacion.*, tipo_animal.* FROM animal
										INNER JOIN raza on raza.ra_cod_raza=animal.ra_cod_raza
										INNER JOIN organizacion on organizacion.org_cod_organizacion=animal.org_cod_organizacion
										INNER JOIN tipo_animal on tipo_animal.ta_cod_tipo_animal = raza.ta_cod_tipo_animal
									WHERE ani_estado = 'adoptar' AND animal.ani_sexo = ?";

	    $query=$conexion->prepare($consulta);
	    $query->execute(array($sex));

		  $resultado=$query->fetchAll(PDO::FETCH_BOTH);

	  	floopets_BD::Disconnect();

		  return $resultado;
	  }
		function paraAdoptarbyfun($fun) {
	    $conexion=floopets_BD::Connect();
	    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	    $consulta="SELECT animal.*,raza.*,organizacion.*, tipo_animal.* FROM animal
										INNER JOIN raza on raza.ra_cod_raza=animal.ra_cod_raza
										INNER JOIN organizacion on organizacion.org_cod_organizacion=animal.org_cod_organizacion
										INNER JOIN tipo_animal on tipo_animal.ta_cod_tipo_animal = raza.ta_cod_tipo_animal
									WHERE ani_estado = 'adoptar' AND organizacion.org_nombre = ?";

	    $query=$conexion->prepare($consulta);
	    $query->execute(array($fun));

		  $resultado=$query->fetchAll(PDO::FETCH_BOTH);

	  	floopets_BD::Disconnect();

		  return $resultado;
	  }

	}
?>
