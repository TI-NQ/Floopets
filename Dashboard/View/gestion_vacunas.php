<button type="button" name="button">
  <a href="registrar_vacunas.php">Nuevo</a>
</button>
<?php

require_once("../Model/conexion.php");
require_once("../Model/vacuna.class.php");
$vacunas=gestion_vacuna::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>codigo</td>
			<td>nombre vacuna</td>
			<td>fecha</td>
			<td>serial</td>
      <td>acciones</td>
		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($vacunas as $row) {
				echo"<tr>
						<td>".$row["vac_cod_vacuna"]."</td>
						<td>".$row["vac_nombre"]."</td>
            			<td>".$row["vac_fecha"]."</td>
            			<td>".$row["vac_serial"]."</td>
						<td>
                    		<a href='../View/actualizar_vacuna.php?va=".base64_encode($row["vac_cod_vacuna"])."'>actualizar</a>

                    		<a href='../Controller/vacunas.controller.php?va=".base64_encode($row["vac_cod_vacuna"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
