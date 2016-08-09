<?php

require_once("../Model/conexion.php");
require_once("../Model/voluntarios.class.php");
$voluntarios=gestion_voluntarios::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>Cedula</td>
			<td>Nombre</td>
      <td>Telefono</td>
      <td>Direccion</td>
      <td>Foto</td>
		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($voluntarios as $row) {
				echo"<tr>
						<td>".$row["vo_cod_voluntario"]."</td>
						<td>".$row["vo_nombre"]."</td>
            <td>".$row["vo_telefono"]."</td>
            <td>".$row["vo_direccion"]."</td>
            <td>".$row["vo_imagen"]."</td>

						<td>
                    		<a href='../View/actualizar_voluntarios.php?vo=".base64_encode($row["vo_cod_voluntario"])."'>actualizar</a>

                    		<a href='../Controller/voluntarios.controller.php?vo=".base64_encode($row["vo_cod_voluntario"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
