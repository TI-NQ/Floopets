<?php

require_once("../Model/conexion.php");
require_once("../Model/rol.class.php");
$rol=gestion_rol::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>Codigo</td>
			<td>Nombre Rol</td>
      <td>Acciones</td>
		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($rol as $row) {
				echo"<tr>
						<td>".$row["cod_rol"]."</td>
						<td>".$row["rol_nombre"]."</td>
						<td>
                    		<a href='../View/actualizar_roles.php?ro=".base64_encode($row["cod_rol"])."'>actualizar</a>

                    		<a href='../Controller/rol.controller.php?ro=".base64_encode($row["cod_rol"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
