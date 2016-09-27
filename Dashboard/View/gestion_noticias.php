<?php 
    session_start();
    //Validacion inicio de session
    if(!isset($_SESSION["usu_cod_usuario"])){
        $msn = base64_encode("Debe iniciar sesion primero!");
        $tm=base64_encode("Advertencia");

        header("Location: ../../index.php?ms=".$msn."tm=".$tm);
    };
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<button type="button" name="button">
  <a href="registrar_noticias.php">Nuevo</a>
</button>

<?php
    require_once("../Model/conexion.php");
    require_once("../Model/noticias.class.php");
    require_once("../Model/usuarios.class.php");
    $noticias=Gestion_noticia::ReadAll();
    $usuario=Gestion_usuarios::ReadbyID($_SESSION["usu_cod_usuario"]);
 	;
 ?>

<table>
	<thead>
		<tr>
			<td>cod_noticias</td>
			<td>usuario</td>
			<td>titulo</td>
			<td>contenido</td>
			<td>fecha</td>
			<td>portada</td>
			<td>palabras clave</td>
		</tr>
		<tbody>
			<?php
			

			foreach ($noticias as $row) {
				echo"<tr>
						<td>".$row["cod_noticia"]."</td>
						<td>".$row["usu_nombre"]." ".$row["usu_apellido"]."</td>
						<td>".$row["not_titulo"]."</td>
						<td>".$row["not_contenido"]."</td>
						<td>".$row["not_fecha_publicacion"]."</td>
						<td>".$row["not_portada"]."</td>
						<td>".$row["not_palabras_clave"]."</td>
						<td>
                    		<a href='../View/actualizar_noticias.php?not=".base64_encode($row["cod_noticia"])."'>actualizar</a>

                   		<a href='../Controller/noticias.controller.php?not=".base64_encode($row["cod_noticia"])."&accion=d'>eliminar</a>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
