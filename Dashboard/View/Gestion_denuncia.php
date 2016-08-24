<?php

require_once("../Model/conexion.php");
require_once("../Model/denuncia.class.php");
$denuncia = Gestion_denuncia::ReadAll();
 ?>
 <button type="button" name="button">
   <a href="registrar_denuncia.php">Nuevo</a>
 </button>
<div>
<?php
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($denuncia as $row)
      {
				echo"<div>
            <label>Foto</label>
            <div><img src=img/imagen_denuncia/".$row["de_imagen"]."></div>
            </div>
            <div>
              <ul>
                <label>Codigo</label>
  						      <li>".$row["de_cod_denuncia"]."</li>
                <label>Tipo de denuncia</label>
  						      <li>".$row["td_cod_tipo_denuncia"]."</li>
                <label>Descripcion</label>
  						        <li>".$row["de_descripcion"]."</li>
                <label>Contacto</label>
                      <li>".$row["de_contacto"]."</li>
                <label>Telefono</label>
                      <li>".$row["de_telefono"]."</li>
                <label>Nombre de mascota</label>
                      <li>".$row["de_nombre"]."</li>
                <label>Fecha de denuncia</label>
  						        <li>".$row["de_fecha"]."</li>
              </ul>
            </div>

						<td>
                    		<a href='../View/actualizar_denuncia.php?dn=".base64_encode($row["de_cod_denuncia"])."'>actualizar</a>

                    		<a href='../Controller/denuncia.controller.php?dn=".base64_encode($row["de_cod_denuncia"])."&accion=d'>eliminar</a>

					</tr>";
			}

?>
</div>
