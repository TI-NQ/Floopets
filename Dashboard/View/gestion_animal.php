<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


 <a href="dashboard.php?p=<?php echo base64_encode('nueva_mascota')?>" class="waves-effect btn animated zoomIn">Nuevo</a>


<?php
    require_once("../Model/conexion.php");
    require_once("../Model/animal.class.php");
    require_once("../../WebFloopets/js/zebra.css");
    $animal=Gestion_animal::Nombres();
    $animales=Gestion_animal::paginacion();


   $num_reg = count($animales);
 // echo $num_reg;
   $paginas = 2;

   $paginacion = new Zebra_Pagination();
   $paginacion->records($num_reg);
   $paginacion->records_per_page($paginas);

   $Conexion = floopets_BD::Connect();
   $Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $consulta = 'SELECT * FROM animal ORDER BY ani_cod_animal DESC LIMIT '.(($paginacion->get_page()));
   $query = $Conexion->prepare($consulta);
   $query->execute();
   $resultado = $query->fetchALL(PDO::FETCH_BOTH);
   return $resultado;
   floopets_BD::Disconnect();

		foreach ($animal as $row) {
				echo"<div class='col l6 descrip'>
		                	<div class='row '>
			                  	<div class='col l6 col m6'>
			                  		<div class='col l7'>
				                        <span><b>Mascota:</b></span>
				                        <li>".$row["ani_nombre"]."</li>
			                      	</div>
			                  		<div class='imagenmascota col l12'>
				                          <img class=' responsive-img' style='width:200px ;height:200px ;' src='img/imagen_animal/".$row["ani_nombre"]."/".$row["ani_imagen"]."'>
				                     	</div>
			                   		<div class='col l6'>

			                        	<a class='btn-floating waves-effect' href='../View/dashboard.php?p=".base64_encode('actualizar_animal')."&an=".base64_encode($row['ani_cod_animal'])."'>

			                          <i class='small material-icons'>mode_edit</i>
			                          </a>

			                      	</div>
			                      	<div class='col l6'>

			                          <a class='btn-floating waves-effect waves-light red' href='../Controller/animal.controller.php?an=".base64_encode($row["ani_cod_animal"])."&accion=d'>
			                          <i class='small material-icons'>delete</i>
			                          </a>

			                      	</div>
			                     </div>

								<div class='col l6'>
				                 	<ul class='descrip'>
				                   	<label>Codigo</label>
				                     	  <li>".$row["ani_cod_animal"]."</li>
				                   	<label>raza</label>
				                     	    <li>".$row["ra_nombre"]."</li>
				                   	<label>organizacion</label>
				                     	    <li>".$row["org_nombre"]."</li>
				                	<label>Nombre</label>
				                     	    <li>".$row["ani_nombre"]."</li>
				                     <label>Esterilizacion</label>
				                     	    <li>".$row["ani_esterilizado"]."</li>
				                     <label>Edad</label>
				                     	    <li>".$row["ani_edad"]."</li>
				                     <label>Descripcion</label>
				                     	    <li>".$row["ani_descripcion"]."</li>
				                     <label>N° Microchip</label>
				                     	    <li>".$row["ani_numero_microchip"]."</li>
				                     <label>sexo</label>
				                     	    <li>".$row["ani_sexo"]."</li>
				                 	</ul>

				             	</div>
				           </div>
				        </div>

				    </div>


		        ";


			}
	$paginacion->render();
?>
</div>
</div>
