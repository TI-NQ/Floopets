<?php

require_once("../Model/conexion.php");
require_once("../Model/evento.class.php");
require_once("../Model/usuarios.class.php");
//Esta consulta trae los datos de la organizacion que esta ligada siempre y cuando la tenga
$org_cod_organizacion=Gestion_usuarios::Mi_Organizacion($_SESSION["usu_cod_usuario"]);

//Esta consulta trae los eventos que tiene la organizacion
$evento=Gestion_evento::mis_eventos($org_cod_organizacion[1]);

// @$mensaje = $_REQUEST["m"];
//
// 	echo @$mensaje;
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
						document.location.href = "../Controller/evento.controller.php?eve="+codigo+"&accion="+accion;
				 }
		});
 }
 </script>
<div class="row">
<div class="col l11 offset-l1">
<?php

if (count($evento)==0) {
	echo "<h5>No hay eventos para mostrar</h5>";
}else {
	foreach ($evento as $row) {
		 $nombre_carpeta = strtolower(str_replace('ñ', 'n', $row["eve_carpeta"]));
			$nombre_carpeta = strtolower(str_replace(' ', '', $nombre_carpeta));
			$nombre_img_ani = strtolower(str_replace('ñ', 'n', $row["eve_imagen"]));
			$nombre_img_ani = strtolower(str_replace(' ', '', $nombre_img_ani));
				echo"<div class='col l6 descrip'>
										<div class='row'>
												<div class='col l6 col m6'>
													<div class='col l7'>
														<span><b>Evento:</b></span>
														<li>".$row["eve_nombre"]."</li>
													</div>
												<div class='imagenmascota col l12'>
											<div>";
											if ($nombre_carpeta=="") {
												echo "<img class='responsive-img' style='width:200px ;height:200px ;border-radius:10px;' src='../../WebFloopets/images/base.jpg'>";
											}else {
												echo "<img class='responsive-img' style='width:200px ;height:200px ;border-radius:10px;' src='img/imagen_evento/".$nombre_carpeta."/".$nombre_img_ani."'>";
											}
echo "</div>
</div>
												<div class='col l6'>
													</div>
													<div class='col l6'>
													</div>
											 </div>
							<div class='col l6'>
												<ul class='descrip'>
													<label>Codigo</label>
															<li>".$row["eve_cod_evento"]."</li>
													<label>Tipo de evento</label>
															<li>".$row["te_nombre"]."</li>
													<label>Dirección</label>
																<li>".$row["eve_direccion"]."</li>
													 <label>Fecha</label>
																<li>".$row["eve_fecha"]."</li>
																<label>Hasta</label>
																<li>".$row["eve_fecha_hasta"]."</li>
													 <label>Hora</label>
																<li>".$row["eve_hora"]."</li>
																<label>Hasta</label>
																<li>".$row["eve_hora_hasta"]."</li>
													 <label>Descripcion</label>
																<li>".$row["eve_descripcion"]."</li>
													 <label>Estado</label>
																<li>".$row["eve_estado"]."</li>
												</ul>

										</div>

							</div>
				</div>


				";

	}
}

?>
</div>
</div>
</div>
