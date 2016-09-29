<?php
  require_once ("../Model/conexion.php");
  require_once ("../Model/evento.class.php");
  $historial_eventos=Gestion_evento::Nombres();


?>
<div class="container">


<div class="row">
  <h3 class="center">Historial de Eventos</h3>
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
            <td>".$row["te_nombre"]."</td>
						<td>".$row["eve_nombre"]."</td>
						<td>".$row["eve_direccion"]."</td>
            <td>".$row["eve_fecha"]."</td>
            <td>".$row["eve_fecha_hasta"]."</td>
            <td>".$row["eve_estado"]."</td>



						<td>
                        <a href='dashboard.php?p=".base64_encode('actualizar_evento')."&eve=".base64_encode($row['eve_cod_evento'])."'><i class='fa fa-pencil'style='color:black !important ; font-size: 30px'></i></a>
                    		<a href='../Controller/evento.controller.php?eve=".base64_encode($row["eve_cod_evento"])."&accion=d'><i class='fa fa-trash'style='color:red !important; font-size: 30px '></i></a>

            </td>

					</tr>";
			}

			 ?>
		</tbody>

</table>
</div>
</div>
