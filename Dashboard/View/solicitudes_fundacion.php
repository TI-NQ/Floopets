

<?php

require_once("../Model/conexion.php");
require_once("../Model/animal.class.php");
require_once("../Model/usuarios.class.php");
require_once("../Model/adopcion.class.php");
$org_cod_organizacion=Gestion_usuarios::Mi_Organizacion($_SESSION["usu_cod_usuario"]);


$solicitudes=Gestion_animal::solicitudes_fundacion($org_cod_organizacion[1]);







 ?>
 <script type="text/javascript">
 $(document).ready(function(){
 	<?php
          if(isset($_GET["m"]) )
          {
            echo "swal('".($_GET["m"])."','','".($_GET["tm"])."');";
          }
         ?>
 });


 </script>
<div>



<table id="datatable" class="display highlight centered responsive-table bordered">
	<thead>
		<tr>
			<td>Nombre Usuario </td>
      <td>email</td>
      <td>Nombre animal</td>
			<td>Raza</td>
      <td>Color</td>
      <td>Tamaño</td>
      <td>Esterilizado</td>
      <td>Edad</td>
      <td>Numero microchip</td>
      <td>Sexo</td>
      <td>Estado solicitud</td>
      <td>Acciones </td>
		</tr>
		<tbody>
			<?php


			foreach ($solicitudes as $row) {

				echo"<tr>
           <td>".$row["usu_nombre"]." ".$row["usu_apellido"]."</td>
           <td>".$row["usu_email"]."</td>
						<td>".$row["ani_nombre"]."</td>
						<td>".$row["ra_nombre"]."</td>
            <td>".$row["ani_color"]."</td>
            <td>".$row["ani_tamanio"]."</td>
            <td>".$row["ani_esterilizado"]."</td>
            <td>".$row["ani_edad"]."</td>
            <td>".$row["ani_numero_microchip"]."</td>
            <td>".$row["ani_sexo"]."</td>
            <td>".$row["sol_estado"]."</td>


						<td>
            <a class='btn-floating waves-light waves-effect' href='../View/enviar_correo.php?p=".base64_encode('enviar_email')."&us=".base64_encode($row["usu_cod_usuario"])."'><i class='small material-icons'>perm_identity</i></a>
            <a class='btn-floating waves-light waves-effect' href='../Controller/adopcion.controller.php?an=".($row["ani_cod_animal"])."&us=".($row["usu_cod_usuario"])."&accion=aceptar'><i class='small material-icons'>done</i></a>
          </td>


                    	";?>

                      </a><?php echo "</tr>"
					;
			}

			 ?>

		</tbody>
	</thead>
</table>

</div>
