<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<button type="button" name="button">
  <a href="registrar_animal.php">Nuevo</a>
</button>

<?php
    require_once("../Model/conexion.php");
    require_once("../Model/animal.class.php");
    $animal=Gestion_animal::Nombres();
 ?>

<table>
	<thead>
		<tr>
			<td>Codigo </td>
			<td>raza</td>
			<td>organizacion</td>
			<td>Nombre</td>
		    <td>Esterilizacion</td>
		    <td>Edad</td>
		    <td>Descripcion</td>
		    <td>N° Microchip</td>
		    <td>sexo</td>
		    <td>acciones</td>
		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($animal as $row) {
				echo"<tr>
						<td>".$row["ani_cod_animal"]."</td>
						<td>".$row["ra_nombre"]."</td>
						<td>".$row["org_nombre"]."</td>
						<td>".$row["ani_nombre"]."</td>
            <td>".$row["ani_esterilizado"]."</td>
            <td>".$row["ani_edad"]."</td>
            <td>".$row["ani_descripcion"]."</td>
            <td>".$row["ani_numero_microchip"]."</td>
            <td>".$row["ani_sexo"]."</td>
						<td>
                    		<a href='../View/actualizar_animal.php?an=".base64_encode($row["ani_cod_animal"])."'>actualizar</a>

                    		<a href='../Controller/animal.controller.php?an=".base64_encode($row["ani_cod_animal"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
