<?php 
    
    //Validacion inicio de session
    if(!isset($_SESSION["usu_cod_usuario"])){
        $msn = base64_encode("Debe iniciar sesion primero!");
        $tm=base64_encode("Advertencia");

        header("Location: ../../index.php?ms=".$msn."tm=".$tm);
    };
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<?php
    require_once("../Model/conexion.php");
    require_once("../Model/denuncia.class.php");
    require_once("../Model/usuarios.class.php");
    $mi_organizacion=Gestion_usuarios::Mi_Organizacion($_SESSION["usu_cod_usuario"]);
    $de_estado="tomado";
    $tomadas 	=Gestion_denuncia::Denuncias_tomadas($mi_organizacion[1]);

    
    


 	
 ?>
 


<table>




	<thead>
		<tr>
			<td>tipo denuncia</td>
			<td>contacto</td>
			<td>telefono</td>
			<td>fecha</td>
			<td>estado</td>
			<td>acciones</td>
		</tr>
		<tbody>
			<?php
			

			foreach ($tomadas as $row) {
				echo"<tr>
						<td>".$row["td_nombre"]."</td>
						<td>".$row["de_contacto"]."</td>
						<td>".$row["de_telefono"]."</td>
						<td>".$row["de_fecha"]."</td>
						<td>".$row["de_estado"]."</td>
						<td>

                   		<a href='../Controller/denuncia.controller.php?dn=".base64_encode($row["de_cod_denuncia"])."&accion=d'>eliminar</a>
                   		</td>

					</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>
