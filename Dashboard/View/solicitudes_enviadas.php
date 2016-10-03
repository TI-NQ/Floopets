

<?php

require_once("../Model/conexion.php");
require_once("../Model/animal.class.php");

$solicitudes=Gestion_animal::Validar_adopcion($_SESSION["usu_cod_usuario"]);

$organizacion=Gestion_animal::organizacion_animal($_SESSION["usu_cod_usuario"]);
	



 ?>
 <script type="text/javascript">
 $(document).ready(function(){
 	<?php
          if(isset($_GET["m"]) )
          {
            echo "swal('".base64_decode(($_GET["m"]))."','','".base64_decode(($_GET["tm"]))."');";
          }
         ?>
 });

 
 </script>
<div>

	

<table id="datatable" class="display highlight centered responsive-table bordered">
	<thead>
		<tr>
			<td>Nombre animal</td>
			<td>Raza</td>
      <td>Color</td>
      <td>Tamaño</td>
      <td>Esterilizado</td>
      <td>Edad</td>
      <td>Numero microchip</td>
      <td>Sexo</td>
      <td>Estado solicitud</td>
      <td>Organizacion</td>
      <td>acciones</td>
		</tr>
		<tbody>
			<?php


			foreach ($solicitudes as $row) {

				echo"<tr>
						<td>".$row["ani_nombre"]."</td>
						<td>".$row["ra_nombre"]."</td>
            <td>".$row["ani_color"]."</td>
            <td>".$row["ani_tamanio"]."</td>
            <td>".$row["ani_esterilizado"]."</td>
            <td>".$row["ani_edad"]."</td>
            <td>".$row["ani_numero_microchip"]."</td>
            <td>".$row["ani_sexo"]."</td>
            <td>".$row["sol_estado"]."</td>
            <td>$organizacion[2]</td>


						<td>
               <a class='btn-floating waves-light waves-effect' href='../Controller/adopcion.controller.php?an=".($row["ani_cod_animal"])."&accion=cancelarsoli'><i class='small material-icons'>not_interested</i></a>

                    	";?>
                     <?php    
              echo "</tr>";
			}

			 ?>

		</tbody>
	</thead>
</table>

</div>
