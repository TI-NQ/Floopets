<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<button type="button" name="button">
  <a href="registrar_tipo_denuncia.php">Nuevo</a>
</button>

<?php
    require_once("../Model/conexion.php");
    require_once("../Model/tipo_denuncia.class.php");
    $td=gestion_tipo_denuncia::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>Codigo</td>
			<td>Tipo Denuncia</td>
			<td>Estado</td>
		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($td as $row) {
				echo"<tr>
						<td>".$row["td_cod_tipo_denuncia"]."</td>
						<td>".$row["td_nombre"]."</td>
						<td>".$row["td_estado"]."</td>
						<td>
                    		<a href='../View/actualizar_tipo_denuncia.php?td=".base64_encode($row["td_cod_tipo_denuncia"])."'>actualizar</a>

                    		<a href='../Controller/tipo_denuncia.controller.php?td=".base64_encode($row["td_cod_tipo_denuncia"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
