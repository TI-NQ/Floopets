<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/estilos.css">
	<script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
<div class="container">
		<div class="row">
		                        
		    <div class="col-lg-5">
		    	<div class="titulo_formulario">
		           <h1 id="titulo">Registro voluntarios</h1>
		        </div>
				<div class="formulario ">
					<form action="../Controller/voluntarios.controller.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label class="form-label">Cedula:</label>
						<input class="form-control" type="text" name="vo_cod_voluntario" required>
					</div>
					<div class="form-group">
						<label class="form-label">Nombre</label>
						<input class="form-control" type="text" name="vo_nombre" required>
					</div>
				  <div class="form-group">
						<label class="form-label">Telefono</label>
						<input class="form-control" type="number" name="vo_telefono" required>
					</div>
				  <div class="form-group">
						<label class="form-label">Direccion</label>
						<input class="form-control" type="text" name="vo_direccion" required>
					</div>
					<div class="file-field input-field col s12 m6">
				       <div class="btn">
				         <span>Galeria</span>
				         <input type="file" multiple name="vo_imagen[]" class="form-control">
				       </div>
				       <div class="file-path-wrapper">
				         <input class="file-path validate"  type="text" placeholder="" name="vo_imagen" >
				       </div>
				    </div>
					<div class="form-group">
						<button name="accion" value="c" class="btn btn-primary">Registrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>

