<!-- <button type="button" name="button">
  <a href="registrar_vacunas.php">Nuevo</a>
</button> -->
<?php

require_once("../Model/conexion.php");
require_once("../Model/vacuna.class.php");
$vacunas=gestion_vacuna::ReadAll();
 ?>

<a href="dashboard.php?p=<?php echo base64_encode('nueva_vacuna')?>" class="waves-effect btn animated zoomIn">Nuevo</a>

<div class="container">
<div class="row">
<table id="datatable" class="display highlight centered responsive-table bordered">
	
	<thead>
		<tr>
			<td>codigo</td>
			<td>nombre vacuna</td>
			<td>fecha</td>
			<td>serial</td>
      <td>acciones</td>
		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($vacunas as $row) {
				echo"<tr>
						<td>".$row["vac_cod_vacuna"]."</td>
						<td>".$row["vac_nombre"]."</td>
            			<td>".$row["vac_fecha"]."</td>
            			<td>".$row["vac_serial"]."</td>
						<td>
                    		<a href='../View/actualizar_vacuna.php?va=".base64_encode($row["vac_cod_vacuna"])."'>actualizar</a>

                    		<a href='../Controller/vacunas.controller.php?va=".base64_encode($row["vac_cod_vacuna"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
</div>
</div>