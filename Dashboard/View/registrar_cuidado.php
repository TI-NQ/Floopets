<h2 class="center">Registrar Cuidados</h2>
<div class="row">
	<div class="fixed-action-btn horizontal click-to-toggle" style="position:relative;">
		<a class="btn-floating btn-large red darken-1 tooltipped" data-tooltip="Acciones" style="left:95%;">
			<i class="fa fa-plus" aria-hidden="true"></i>
		</a>
		<ul>
			<li><a href="dashboard.php?p=<?php echo base64_encode('actualizar_cuidado')?>" class="btn-floating green tooltipped" data-tooltip="Actualizar"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
			<li><a href="dashboard.php?p=<?php echo base64_encode('Gestion_cuidado')?>" class="btn-floating blue tooltipped" data-tooltip="Gestionar"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
		</ul>
	</div>
	<form class="col s12" id="form" action="../Controller/cuidado.controller.php" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="input-field col s12">
				<input type="text" name="cu_nombre" required>
				<label for="cu_nombre">Nombre</label>
			</div>
			<div class="row">
        <div class="input-field col s12">
          <textarea id="cu_descripcion" class="materialize-textarea" name="cu_descripcion" length="120" required></textarea>
          <label for="cu_descripcion">Descripcion</label>
        </div>
      </div>
			<div class="file-field input-field col s12">
		    <div class="btn">
		      <span>Imagenes</span>
		      <input type="file" multiple name="Imagen_Upload[]">
		    </div>
		    <div class="file-path-wrapper">
		      <input class="file-path validate"  type="text" placeholder="Puede subir mas de una imagen" name="galeria"  >
		    </div>
		  </div>
			<div class="botones">
				<a href="<?=$_SERVER['HTTP_REFERER'] ?>" class="waves-effect waves-light btn red darken-1 left">Cancelar</a>
				<button class="waves-effect waves-light  btn right cyan darken-1" name="accion" value="c" style="margin-right: 50px;">Registrar</button>
			</div>
		</div>
	</form>
</div>
<!-- <form action="../Controller/cuidado.controller.php" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label class="form-label">nombre</label>
		<input class="form-control" type="text" name="cu_nombre" required>
	</div>
	<div class="form-group">
		<label class="form-label">descripcion</label>
		<input class="form-control" type="text" name="cu_descripcion" required>
	</div>
	<div class="file-field input-field col s12 m6">
       <div class="btn">
         <span>Galeria</span>
         <input type="file" multiple name="Imagen_Upload[]">
       </div>
       <div class="file-path-wrapper">
         <input class="file-path validate"  type="text" placeholder="Puede subir mas de una imagen" name="galeria"  >
       </div>
    </div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form> -->
