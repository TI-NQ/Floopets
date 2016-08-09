<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php

require_once("../Model/conexion.php");
require_once("../Model/cuidado.class.php");
$cuidado=gestion_cuidado::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>Codigo </td>
			<td>Nombre</td>
			<td>-Descripcion</td>
		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($cuidado as $row) {
				echo"<tr>
						<td>".$row["cu_cod_cuidado"]."</td>
						<td>".$row["cu_nombre"]."</td>
						<td>".$row["cu_descripcion"]."</td>
						<td>
                    		<a href='../View/actualizar_evento.php?cu=".base64_encode($row["cu_cod_cuidado"])."'>actualizar</a>

                    		<a href='../Controller/evento.controller.php?cu=".base64_encode($row["cu_cod_cuidado"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
