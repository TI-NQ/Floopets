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
            <td>".$row["fecha"]."</td>
						<td>
                    		<a href='../View/actualizar_vacuna.php?ui=".base64_encode($row["vac_cod_vacuna"])."'>actualizar</a>

                    		<a href='../Controller/vacunas.controller.php?ui=".base64_encode($row["vac_cod_vacuna"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
