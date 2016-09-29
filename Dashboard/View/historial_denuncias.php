<?php
  require_once ("../Model/conexion.php");
  require_once ("../Model/denuncia.class.php");
  $denuncia=Gestion_denuncia::ReadAll();


?>
<div class="container">


<div class="row">
  <h3 class="center">Historial Denuncias</h3>
<table id="datatable" class="display highlight centered responsive-table bordered">

	<thead>
		<tr>
			<td>Codigo</td>
			<td>Tipo Denuncia</td>
			<td>Descripción</td>
		  <td>Nombre Denunciante</td>
		  <td>Correo Contacto</td>
      <td>Telefono</td>
      <td>Estado</td>
		  <td>Acciones</td>
		</tr>
	</thead>
		<tbody>
			<?php


			foreach ($denuncia as $row) {
				echo"<tr>
						<td>".$row["de_cod_denuncia"]."</td>
            <td>".$row["td_nombre"]."</td>
						<td>".$row["de_descripcion"]."</td>
						<td>".$row["de_nombre"]."</td>
            <td>".$row["de_contacto"]."</td>
            <td>".$row["de_telefono"]."</td>
            <td>".$row["eve_estado"]."</td>



						<td>
                        <a href='dashboard.php?p=".base64_encode('actualizar_denuncia')."&dn=".base64_encode($row['de_cod_denuncia'])."'><i class='fa fa-pencil'style='color:black !important ; font-size: 30px'></i></a>
                    		<a href='../Controller/denuncia.controller.php?dn=".base64_encode($row["de_cod_denuncia"])."&accion=d'><i class='fa fa-trash'style='color:red !important; font-size: 30px '></i></a>

            </td>

					</tr>";
			}

			 ?>
		</tbody>

</table>
</div>
</div>
