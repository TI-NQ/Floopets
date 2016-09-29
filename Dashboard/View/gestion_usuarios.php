<button type="button" name="button">
  <a href="registrar_usuario.php">Nuevo</a>
</button>
<?php

require_once("../Model/conexion.php");
require_once("../Model/usuarios.class.php");
$user=Gestion_usuarios::ReadAll();
 ?>
<div class="container">

<table id="datatable" class="display highlight centered responsive-table bordered">
	<thead>
		<tr>
			<td>Codigo de usuario</td>
			<td>Nombre</td>
      <td>Apellido</td>
      <td>Telefono</td>
      <td>Cedula</td>
      <td>Email</td>
      <td>Rol</td>
      <td>Contraseña</td>
      <td>acciones</td>
		</tr>
		<tbody>
			<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($user as $row) {

				echo"<tr>
						<td>".$row["usu_cod_usuario"]."</td>
						<td>".$row["usu_nombre"]."</td>
            <td>".$row["usu_apellido"]."</td>
            <td>".$row["usu_telefono"]."</td>
            <td>".$row["usu_cedula"]."</td>
            <td>".$row["usu_email"]."</td>
            <td>".$row["rol_nombre"]."</td>
            <td>".$row["usu_clave"]."</td>
						<td>
                    		<a href='../View/actualizar_usuario.php?us=".base64_encode($row["usu_cod_usuario"])."'>actualizar</a>

                    		<a href='../Controller/usuarios.controller.php?us=".base64_encode($row["usu_cod_usuario"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>

</div>
