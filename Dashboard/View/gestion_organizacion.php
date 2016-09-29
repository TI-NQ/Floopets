<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<button type="button" name="button">
  <a href="registrar_organizacion.php">Nuevo</a>
</button>
<?php

require_once("../Model/conexion.php");
require_once("../Model/organizacion.class.php");
$organizacion=Gestion_organizacion::Nombres();
 ?>
 <script type="text/javascript">
 function borrar(cod){
   var codigo = cod;
   var accion = "d";
   sweetAlert({
          title: 'Mensaje de FLOOPETS',
          text: 'Esta seguro que desea eliminar?',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#4db6ac',
          confirmButtonText: 'Aceptar',
          cancelButtonText: 'Cancelar',
          closeOnConfirm: true,
          closeOnCancel: true,
          },
       function(isConfirm){
         if (isConfirm) {
            document.location.href = "../Controller/organizacion.controller.php?org="+codigo+"&accion="+accion;
         }
    });
 }
 </script>

<table>
	<thead>
		<tr>
			<td>Codigo organización</td>
			<td>Tipo organizacion</td>
			<td>Nombre</td>
			<td>Nit</td>
			<td>Email</td>
			<td>Telefono</td>
			<td>Direccion</td>
      <td></td>

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
                        <a href='#' id='btntrash' onclick="borrar('<?php echo $row["org_cod_organizacion"];?>')" class='btn-floating waves-light red waves-effect'>
                      
                        <?php echo"
                        <i class='small material-icons'>delete</i>
                        </a>
                        <a class='btn-floating btn-light blue waves-effect' href='../View/actualizar_organizacion.php?org=".base64_encode($row["org_cod_organizacion"])."'>
                        <i class='small material-icons'>mode_edit</i></a>




					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
