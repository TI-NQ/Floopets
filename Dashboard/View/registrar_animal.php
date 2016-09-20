<?php
		 require_once("../Model/conexion.php");
		require_once("../Model/cuidado.class.php");
		$tipo = Gestion_cuidado::ReadAll();
 ?>
<h2 class="center">Registrar Mascota</h2>
<div class="row">
	<div class="fixed-action-btn horizontal click-to-toggle" style="position:relative;">
		<a class="btn-floating btn-large red darken-1 tooltipped" data-tooltip="Acciones" style="left:95%;">
			<i class="fa fa-plus" aria-hidden="true"></i>
		</a>
		<ul>
			<li><a href="dashboard.php?p=<?php echo base64_encode('actualizar_animal')?>" class="btn-floating green tooltipped" data-tooltip="Actualizar"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
			<li><a href="dashboard.php?p=<?php echo base64_encode('gestion_animal')?>" class="btn-floating blue tooltipped" data-tooltip="Gestionar"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
		</ul>
	</div>
	<form id="form" class="col s12" action="../Controller/tipo_animal.controller.php" method="POST">
		<div class="row">
			<div class="input-field col s12">
				<input type="text" name="ta_nombre" required>
				<label for="ta_nombre">Nombre</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="tamano" required>
				<label for="tamano">Tamaño</label>
			</div>
			<div class="input-field col s12">
				<select  Required name="cu_cod_cuidado">
		  		<option value="" disabled selected>cuidado</option>
		        <?php
		          foreach ($tipo as $row){
		            echo "<option value='".$row["cu_cod_cuidado"]."'>".$row["cu_nombre"]."</option>";
		            }
		        ?>
		    </select>
			</div>
			<a href="<?=$_SERVER['HTTP_REFERER'] ?>" class="waves-effect waves-light btn red darken-1 left">Cancelar</a>
			<button class="waves-effect waves-light  btn right cyan darken-1" name="accion" value="c">Registrar</button>
		</div>
	</form>
</div>
