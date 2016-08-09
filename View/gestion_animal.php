<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php
    require_once("../Model/conexion.php");
    require_once("../Model/animal.class.php");
    $animal=gestion_animal::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>Codigo </td>
			<td>Raza</td>
			<td>Nombre</td>
      <td>Esterilizacion</td>
      <td>Edad</td>
      <td>Descripcion</td>
      <td>N° Microchip</td>
		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];
      $ra_cod_raza,$ani_nombre,$ani_esterilizado,$ani_edad,$ani_descripcion,$ani_numero_microchip,$ani_cod_animal

			echo @$mensaje;

			foreach ($cuidado as $row) {
				echo"<tr>
						<td>".$row["ani_cod_animal"]."</td>
						<td>".$row["ra_cod_raza"]."</td>
						<td>".$row["ani_nombre"]."</td>
            <td>".$row["ani_esterilizado"]."</td>
            <td>".$row["ani_edad"]."</td>
            <td>".$row["ani_descripcion"]."</td>
            <td>".$row["ani_numero_microchip"]."</td>
						<td>
                    		<a href='../View/actualizar_evento.php?an=".base64_encode($row["cu_cod_cuidado"])."'>actualizar</a>

                    		<a href='../Controller/evento.controller.php?an=".base64_encode($row["cu_cod_cuidado"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
