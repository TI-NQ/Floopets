<?php

require_once("../Model/conexion.php");
require_once("../Model/permisos.class.php");
$permisos=gestion_permisos::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>Codigo</td>
			<td>Nombre Permiso</td>
      <td>Acciones</td>
		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($permisos as $row) {
				echo"<tr>
						<td>".$row["cod_permiso"]."</td>
						<td>".$row["permiso_nombre"]."</td>
						<td>
                    		<a href='../View/actualizar_permisos.php?pe=".base64_encode($row["cod_permiso"])."'>actualizar</a>

                    		<a href='../Controller/permisos.controller.php?pe=".base64_encode($row["cod_permiso"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
