<?php
	require_once("../Model/conexion.php");
	require_once("../Model/tipo_organizacion.class.php");
	$tp=Gestion_tipo_organizacion::ReadAll();
?>
<h2 class="center">Registrar Organización</h2>
<div class="row">
	<div class="fixed-action-btn horizontal click-to-toggle" style="position:relative;">
		<a class="btn-floating btn-large red darken-1 tooltipped" data-tooltip="Acciones" style="left:95%;">
			<i class="fa fa-plus" aria-hidden="true"></i>
		</a>
		<ul>
			<li><a href="dashboard.php?p=<?php echo base64_encode('actualizar_organizacion')?>" class="btn-floating green tooltipped" data-tooltip="Actualizar"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
			<li><a href="dashboard.php?p=<?php echo base64_encode('gestion_organizacion')?>" class="btn-floating blue tooltipped" data-tooltip="Gestionar"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
		</ul>
	</div>
	<form id="form" class="col s12" action="../Controller/organizacion.controller.php" method="POST">
  		<div class="row">
				<div class="row">
					<div class="input-field col s12">
						<select name="to_cod_tipo_organizacion" required>
							<?php
								foreach ($tp as $row) {
							?>
							<option value="<?php echo $row["to_cod_tipo_organizacion"] ?>" ><?php echo $row["to_nombre"] ?></option>
							<?php } ?>
						</select>
						<label>Tipo de Organizacion</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input type="text" name="org_nombre" id="org_nombre" required>
						<label for="org_nombre">Nombre Organizacion</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l6">
						<input type="email" name="org_email" id="org_email" required>
								<label for="org_email">Correo Electronico</label>
	        </div>
					<div class="input-field col s12 m6 l6">
						<input type="number" name="org_telefono" id="org_telefono" required>
								<label for="org_telefono">Telefono</label>
	        </div>
					<div class="input-field col s12 m4 l4">
						<input type="text" name="org_nit" id="org_nit" required>
								<label for="org_nit">Nit</label>
	        </div>
					<div class="input-field col s12 m4 l4">
						<input type="text" name="org_direccion" id="org_direccion" required>
								<label for="org_direccion">Direccion</label>
	        </div>
					<div class="input-field col s12 m4 l4">
						<input type="password" name="org_clave" id="org_clave" required>
								<label for="org_clave">Contraseña</label>
	        </div>
				</div>
				<a href="<?=$_SERVER['HTTP_REFERER'] ?>" class="waves-effect waves-light btn red darken-1 left">Cancelar</a>
				<button class="waves-effect waves-light  btn right cyan darken-1" name="accion" value="c" style="margin-right: 50px;">Registrar</button>
  		</div>
	</form>
</div>
