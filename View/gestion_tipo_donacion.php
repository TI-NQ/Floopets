<?php

require_once("../Model/conexion.php");
require_once("../Model/tipo_donacion.class.php");
$tipo_donacion=Gestion_tipo_donacion::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>codigo </td>
			<td>nombre donacion</td>
			<td>estado</td>
      <td>acciones</td>
		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($tipo_donacion as $row) {
				echo"<tr>
						<td>".$row["td_cod_tipo_donacion"]."</td>
						<td>".$row["td_nombre"]."</td>
            <td>".$row["td_estado"]."</td>
						<td>
                    		<a href='../View/actualizar_tipo_donacion.php?ui=".base64_encode($row["td_cod_tipo_donacion"])."'>actualizar</a>

                    		<a href='../Controller/tipo_donacion.controller.php?ui=".base64_encode($row["td_cod_tipo_donacion"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
