<?php

require_once("../Model/conexion.php");
require_once("../Model/adopcion.class.php");
$adopcion=Gestion_adopcion::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>codigo </td>
			<td>fecha</td>
			<td>hora</td>
			<td>codigo animal</td>
			<td>codigo usuario</td>
      		<td>acciones</td>
		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($adopcion as $row) {
				echo"<tr>
						<td>".$row["ado_cod_adopcion"]."</td>
						<td>".$row["ado_fecha"]."</td>
						<td>".$row["ado_hora"]."</td>
            			<td>".$row["ani_cod_animal"]."</td>
            			<td>".$row["usu_cod_usuario"]."</td>
						<td>
                    		<a href='../View/actualizar_adopcion.php?ui=".base64_encode($row["ado_cod_adopcion"])."'>actualizar</a>

                    		<a href='../Controller/adopcion.controller.php?ui=".base64_encode($row["ado_cod_adopcion"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>