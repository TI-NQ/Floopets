<button type="button" name="button">
  <a href="registrar_usuario.php">Nuevo</a>
</button>
<?php

require_once("../Model/conexion.php");
require_once("../Model/usuarios.class.php");
$user=Gestion_usuarios::ReadAll();
 ?>

<table>
	<thead>
		<tr>
			<td>Cedula</td>
			<td>Nombre</td>
      <td>Apellido</td>
      <td>Telefono</td>
      <td>Email</td>
      <td>Rol</td>
      <td>Contraseña</td>
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
</table>
<script type="text/javascript">
	
        <?php

      if(isset($_GET["m"])){
        echo "alert( '".$_GET["m"]."');";
      }
    ?>

</script>