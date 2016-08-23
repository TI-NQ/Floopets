<?php

require_once("../Model/conexion.php");
require_once("../Model/donacion.php");
$donacion=Gestion_donacion::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>Codigo</td>
			<td>descripcion</td>
			<td>fecha</td>
      <td>Acciones</td>
		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($donacion as $row) {
				echo"<tr>
						<td>".$row["don_cod_donacion"]."</td>
						<td>".$row["don_descripcion"]."</td>
						<td>".$row["don_fecha"]."</td>
						<td>
                    		<a href='../View/actualizar_donacion.php?do=".base64_encode($row["don_cod_donacion"])."'>actualizar</a>

                    		<a href='../Controller/donacion.controller.php?do=".base64_encode($row["don_cod_donacion"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>