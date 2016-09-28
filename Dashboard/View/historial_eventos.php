<?php
  require_once ("../Model/conexion.php");
  require_once ("../Model/evento.class.php");
  $historial_eventos=Gestion_evento::historial_eventos();


?>
<div class="container">
<div class="row">
  <h2 class="center">Historial de Eventos</h2>
<table id="datatable" class="display highlight centered responsive-table bordered">

	<thead>
		<tr>
			<td>Codigo </td>
			<td>Tipo Evento</td>
			<td>Titulo</td>
		  <td>Direccion</td>
		  <td>Fecha Inicio</td>
      <td>Fecha Fin</td>
      <td>Estado</td>
		  <td>Acciones</td>
		</tr>
	</thead>
		<tbody>
			<?php


			foreach ($historial_eventos as $row) {
				echo"<tr>
						<td>".$row["eve_cod_evento"]."</td>
            <td>".$row["te_cod_tipo_evento"]."</td>
						<td>".$row["eve_nombre"]."</td>
						<td>".$row["eve_direccion"]."</td>
            <td>".$row["eve_fecha"]."</td>
            <td>".$row["eve_fecha_hasta"]."</td>
            <td>".$row["eve_fecha_hasta"]."</td>
            <td>".$row["eve_estado"]."</td>


						<td>
                    		<a href='../View/actualizar_evento.php?eve=".base64_encode($row["eve_cod_evento"])."'>Actualizar</a>

                    		<a href='../Controller/evento.controller.php?eve=".base64_encode($row["eve_cod_evento"])."&accion=d'>Eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>

</table>
</div>
</div>
