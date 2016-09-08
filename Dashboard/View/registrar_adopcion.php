<?php
	require_once("../Model/conexion.php");
	require_once("../Model/usuarios.class.php");
	require_once("../Model/animal.class.php");
	$animal = gestion_animal::ReadAll();
	$usuarios = gestion_usuarios::ReadAll();
?>
<h2 class="center">Registrar Adopcion</h2>
<div class="row">
	<div class="fixed-action-btn horizontal click-to-toggle" style="position:relative;">
		<a class="btn-floating btn-large red darken-1 tooltipped" data-tooltip="Acciones" style="left:95%;">
			<i class="fa fa-plus" aria-hidden="true"></i>
		</a>
		<ul>
			<li><a href="dashboard.php?p=<?php echo base64_encode('actualizar_adopcion')?>" class="btn-floating green tooltipped" data-tooltip="Actualizar"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
			<li><a href="dashboard.php?p=<?php echo base64_encode('gestion_adopcion')?>" class="btn-floating blue tooltipped" data-tooltip="Gestionar"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
		</ul>
	</div>
	<form class="col s12" action="../Controller/adopcion.controller.php" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="input-field col s12 m6 l6" style="z-index:10;">
				<input type="date" class="datepicker" id="ado_fecha" name="ado_fecha" required>
				<label for="ado_fecha">Fecha Adopcion</label>
			</div>
			<div class="input-field col s12 m6 l6" style="z-index:10;">
				<input type="time" id="ado_hora" name="ado_hora" required>
				<label for="ado_hora">Hora Adopcion</label>
			</div>
			<div class="file-field input-field">
	      <div class="btn" multiple name="Imagen_Upload[]">
	        <span>Imagenes</span>
	        <input type="file">
	      </div>
	      <div class="file-path-wrapper">
	        <input class="file-path validate" type="text" name="ado_imagen">
	      </div>
    	</div>
			<div class="input-field col s12 m6 l6">
				<select name="usu_cod_usuario">
					<option value="" disabled selected>usuario</option>
					<?php
							foreach ($usuarios as $row){
									echo "<option value='".$row["usu_cod_usuario"]."'>".$row["usu_nombre"]."</option>";
							}
					 ?>
				</select>
			</div>
			<div class="input-field col s12 m6 l6">
				<select name="ani_cod_animal">
					<option value="" disabled selected>Nombre</option>
					<?php
						foreach ($animal as $row){
							echo "<option value='".$row["ani_cod_animal"]."'>".$row["ani_nombre"]."</option>";
						}
					 ?>
				</select>
			</div>
			<a href="<?=$_SERVER['HTTP_REFERER'] ?>" class="waves-effect waves-light btn red darken-1 left">Cancelar</a>
			<button class="waves-effect waves-light  btn right cyan darken-1" name="accion" value="c">Registrar</button>
		</div>
	</form>
</div>
<!-- <form action="../Controller/adopcion.controller.php" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label class="form-label">fecha</label>
		<input class="form-control" type="date" name="ado_fecha" required>
	</div>
	<div class="form-group">
		<label class="form-label">hora</label>
		<input class="form-control" type="time" name="ado_hora" required>
	</div>
	<div class="form-group">
       <div class="btn">
         <span>imagen</span>
         <input type="file" multiple name="Imagen_Upload[]">
       </div>
       <div class="file-path-wrapper">
         <input class="file-path validate"  type="text" placeholder="imagen" name="ado_imagen"  >
       </div>
    </div>
<div class="form-group">
                        <select  Required name="usu_cod_usuario">
                            <option value="" disabled selected>usuario</option>
                            <?php
                                 // Cargo la bd
                                 require_once("../Model/conexion.php");
                                // Cargo la clase tipo empresa
                                require_once("../Model/usuarios.class.php");
                                 $usuarios = gestion_usuarios::ReadAll();
                                foreach ($usuarios as $row){
                                    echo "<option value='".$row["usu_cod_usuario"]."'>".$row["nombre"]."</option>";
                                }
                             ?>
                        </select>
                        <label></label>
                    </div>
    <div class="form-group">
                        <select  Required name="ani_cod_animal">
                            <option value="" disabled selected>nombre</option>
                            <?php
                                 // Cargo la bd
                                 require_once("../Model/conexion.php");
                                // Cargo la clase tipo empresa
                                require_once("../Model/animal.class.php");
                                 $animal = gestion_animal::ReadAll();
                                foreach ($animal as $row){
                                    echo "<option value='".$row["ani_cod_animal"]."'>".$row["nombre"]."</option>";
                                }
                             ?>
                        </select>
                        <label></label>
                    </div>
    <div class="form-group">
        <button name="accion" value="c" class="btn btn-primary">Registrar</button>
    </div>
</form> -->
