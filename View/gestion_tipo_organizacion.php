<?php 

require_once("../Model/conexion.php");
require_once("../Model/tipo_organizacion.class.php");
$organizacion=Gestion_tipo_organizacion::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>identificacion</td>
			<td>nombre</td>
			<td>acciones</td>
		</tr>
		<tbody>
			<?php 
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($organizacion as $row) {
				echo"<tr>
						<td>".$row["to_cod_tipo_organizacion"]."</td>
						<td>".$row["to_nombre"]."</td>
						<td>
                    		<a href='../View/actualizar_tipo_organizacion.php?tp=".base64_encode($row["to_cod_tipo_organizacion"])."'>actualizar</a>

                    		<a href='../Controller/tipo_organizacion.controller.php?tp=".base64_encode($row["to_cod_tipo_organizacion"])."&accion=d'>eliminar</a>
                 		
					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>