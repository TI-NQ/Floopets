<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php

require_once("../Model/conexion.php");
require_once("../Model/organizacion.class.php");
$organizacion=Gestion_organizacion::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>Codigo organización</td>
			<td>Codigo tipo organización</td>
			<td>Nombre</td>
			<td>Nit</td>
			<td>Email</td>
			<td>Telefono</td>
			<td>Direccion</td>
			

		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($organizacion as $row) {
				echo"<tr>
						<td>".$row["org_cod_organizacion"]."</td>
						<td>".$row["to_cod_tipo_organizacion"]."</td>
						<td>".$row["org_nombre"]."</td>
            			<td>".$row["org_nit"]."</td>
						<td>".$row["org_email"]."</td>
						<td>".$row["org_telefono"]."</td>
						<td>".$row["org_direccion"]."</td>
						<td>
                    		<a href='../View/actualizar_organizacion.php?ui=".base64_encode($row["org_cod_organizacion"])."'>actualizar</a>

                    		<a href='../Controller/organizacion.controller.php?ui=".base64_encode($row["org_cod_organizacion"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
