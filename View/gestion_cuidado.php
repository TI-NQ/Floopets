<?php 

require_once("../Model/conexion.php");
require_once("../Model/cuidado.class.php");
$cuidado=Gestion_cuidado::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>identificacion</td>
			<td>nombre</td>
			<td>descripcion</td>
			<td>acciones</td>
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
                    		<a href='../View/actuializar_cuidado.php?cu=".base64_encode($row["cu_cod_cuidado"])."'>actualizar</a>

                    		<a href='../Controller/cuidado.controller.php?cu=".base64_encode($row["cu_cod_cuidado"])."&accion=d'>eliminar</a>
                 		
					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>