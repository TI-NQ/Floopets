
<?php

require_once("../Model/conexion.php");
require_once("../Model/voluntarios.class.php");
$voluntarios=Gestion_voluntarios::ReadAll();


 ?>


<div class="row">
<div class="col l11 offset-l1">

<?php
$valores=count($voluntarios);

if ($valores != 0) {
	@$mensaje = $_REQUEST["m"];

	echo @$mensaje;
	 echo "<h4 class='center'>Peticiones voluntario </h4>";
	foreach ($voluntarios as $row) {

		echo"

			<div class='col l6 descrip'>
							<div class='row'>
									<div class='col l6 col m6'>
										<div class='col l7'>
												<span><b>Voluntario:</b></span>
												<li>".$row["vo_nombre"]."</li>
											</div>
										<div class='imagenmascota col l12'>
													<img class=' responsive-img' style='width:250px ;height:250px ;' src='img/imagen_voluntario/".$row["vo_cod_voluntario"]."/".$row["vo_imagen"]."'>
											</div>
										<div class='col l6'>
												<a class='btn-floating waves-effect' href='../View/dashboard.php?p=".base64_encode('actualizar_voluntarios')."&vo=".base64_encode($row['vo_cod_voluntario'])."'>

												<i class='small material-icons'>mode_edit</i>
												</a>

											</div>
											<div class='col l6'>

												<a class='btn-floating waves-effect waves-light red' href='../Controller/voluntarios.controller.php?vo=".base64_encode($row["vo_cod_voluntario"])."&accion=d'>
												<i class='small material-icons'>delete</i>
												</a>

											</div>
											<div class='col l6'>
												<a class='btn waves-effect blue lighten-3 right' href='../Controller/voluntarios.controller.php?vo=".base64_encode($row["vo_cod_voluntario"])."&accion=aceptar'>Aceptar</a>


											</div>





									 </div>
				<div class='col l6'>
									<ul class='descrip'>
										<label>Codigo</label>
												<li>".$row["vo_cod_voluntario"]."</li>
										<label>Telefono</label>
													<li>".$row["vo_telefono"]."</li>
										<label>Dirección</label>
													<li>".$row["vo_direccion"]."</li>
									<label>Estado</label>
													<li>".$row["vo_estado"]."</li>
									</ul>

							</div>
					 </div>
				</div>
		</div>


		";


}

}else {
	echo "<h4 class='center'>No hay peticiones de voluntarios</h4>";
}
 ?>



		</tbody>

</table>

</div>

</div>
</div>
