<?php 

require_once("../Model/conexion.php");
require_once("../Model/denuncia.class.php");
$denuncia = Gestion_denuncia::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>codigo denuncia</td>
			<td>codigo usuario</td>
			<td>codigo denuncia</td>
			<td>descripcion</td>
			<td>fecha</td>
			<td>acciones</td>
		</tr>
		<tbody>
			<?php 
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($denuncia as $row) {
				echo"<tr>
						<td>".$row["de_cod_denuncia"]."</td>
						<td>".$row["usu_cod_denuncia"]."</td>
						<td>".$row["de_descripcion"]."</td>
						<td>".$row["de_fecha"]."</td>
						<td>
                    		<a href='../View/actualizar_denuncia.php?dn=".base64_encode($row["de_cod_denuncia"])."'>actualizar</a>

                    		<a href='../Controller/denuncia.controller.php?dn=".base64_encode($row["de_cod_denuncia"])."&accion=d'>eliminar</a>
                 		
					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>