<?php

require_once("../Model/conexion.php");
require_once("../Model/tipo_animal.class.php");
$tipo=Gestion_tipo_animal::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>codigo </td>
			<td>nombre</td>
			<td>tamaño</td>
      <td>acciones</td>
		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($tipo as $row) {
				echo"<tr>
						<td>".$row["ta_cod_tipo_animal"]."</td>
						<td>".$row["ta_nombre"]."</td>
						<td>".$row["tamano"]."</td>
						<td>
                    		<a href='../View/actualizar_tipo_animal.php?ui=".base64_encode($row["ta_cod_tipo_animal"])."'>actualizar</a>

                    		<a href='../Controller/tipo_animal.controller.php?ui=".base64_encode($row["ta_cod_tipo_animal"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
