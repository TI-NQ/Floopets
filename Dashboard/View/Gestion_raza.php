<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<button type="button" name="button">
  <a href="registrar_raza.php">Nuevo</a>
</button>
<?php

require_once("../Model/conexion.php");
require_once("../Model/raza.class.php");
$raza = Gestion_raza::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>Codigo </td>
			<td>nombre</td>
			<td>tipo animal</td>
			<td>cuidado</td>
			<td>histaria</td>
			<td>acciones</td>


		</tr>
		<tbody>
			<?php

			foreach ($raza as $row) {
				echo"<tr>
						<td>".$row["ra_cod_raza"]."</td>
						<td>".$row["ra_nombre"]."</td>
						<td>".$row["ta_cod_tipo_animal"]."</td>
						<td>".$row["cu_cod_cuidado"]."</td>
						<td>".$row["ra_historia"]."</td>
						<td>
                    		<a href='../View/actualizar_raza.php?rz=".base64_encode($row["ra_cod_raza"])."'>actualizar</a>

                    		<a href='../Controller/raza.controller.php?rz=".base64_encode($row["ra_cod_raza"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
