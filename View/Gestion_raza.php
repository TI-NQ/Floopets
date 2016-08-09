<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php

require_once("../Model/conexion.php");
require_once("../Model/raza.class.php");
$raza=Gestion_raza::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>Codigo </td>
			<td>nombre</td>
			<td>acciones</td>
			

		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($raza as $row) {
				echo"<tr>
						<td>".$row["ra_cod_raza"]."</td>
						<td>".$row["ra_nombre"]."</td>
						<td>
                    		<a href='../View/actualizar_raza.php?ui=".base64_encode($row["ra_cod_raza"])."'>actualizar</a>

                    		<a href='../Controller/raza.controller.php?ui=".base64_encode($row["ra_cod_raza"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
