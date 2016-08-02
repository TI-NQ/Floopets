<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php

require_once("../Model/conexion.php");
require_once("../Model/evento.class.php");
$evento=Gestion_evento::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>Codigo vento</td>
			<td>Codigo tipo evento</td>
			<td>Nombre</td>
			<td>Dirección</td>
			<td>Fecha</td>
			<td>Hora</td>
			<td>Descripcion</td>

		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($evento as $row) {
				echo"<tr>
						<td>".$row["eve_cod_evento"]."</td>
						<td>".$row["te_cod_tipo_evento"]."</td>
						<td>".$row["eve_nombre"]."</td>
            			<td>".$row["eve_direccion"]."</td>
						<td>".$row["eve_fecha"]."</td>
						<td>".$row["eve_hora"]."</td>
						<td>".$row["eve_descripcion"]."</td>
						<td>
                    		<a href='../View/actualizar_evento.php?ui=".base64_encode($row["eve_cod_evento"])."'>actualizar</a>

                    		<a href='../Controller/evento.controller.php?ui=".base64_encode($row["eve_cod_evento"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
