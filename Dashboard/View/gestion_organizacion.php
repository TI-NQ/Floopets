<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<button type="button" name="button">
  <a href="registrar_organizacion.php">Nuevo</a>
</button>
<?php

require_once("../Model/conexion.php");
require_once("../Model/organizacion.class.php");
$organizacion=Gestion_organizacion::Nombres();
 ?>

<div class="container">
<div class="row">

<h3>Gestión Organización</h3>

<table id="datatable" class="display highlight centered responsive-table bordered">
	<thead>
		<tr>
			<td>Codigo organización</td>
			<td>Tipo organizacion</td>
			<td>Nombre</td>
			<td>Nit</td>
			<td>Email</td>
			<td>Telefono</td>
			<td>Direccion</td>
      <td>Acciones</td>

    </tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($organizacion as $row) {
				echo"<tr>
						<td>".$row["org_cod_organizacion"]."</td>
						<td>".$row["to_nombre"]."</td>
						<td>".$row["org_nombre"]."</td>
            			<td>".$row["org_nit"]."</td>
						<td>".$row["org_email"]."</td>
						<td>".$row["org_telefono"]."</td>
						<td>".$row["org_direccion"]."</td>
						<td>
                    		";?>
                        <!-- <a href='#' id='btntrash' onclick="borrar('<?php echo $row["org_cod_organizacion"];?>')" class='btn-floating waves-light red waves-effect'>
                          <i class='small material-icons'>delete</i>
                          </a> -->
                          <!-- <i class='small material-icons'>delete</i>
                          </a> -->
                        <?php echo"
                        <a class='btn-floating waves-effect '  href='dashboard.php?p=".base64_encode('actualizar_organizacion')."&org=".base64_encode($row['org_cod_organizacion'])."'><i class='small material-icons'>mode_edit</i></a>





					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
</div>
</div>