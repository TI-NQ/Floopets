<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form action="../Controller/organizacion.controller.php" method="POST">
	<h1>Registrar Organización</h1>
	<div class="form-group">
		<label>Tipo organizacion:</label> -->
		<!--<?php
		// require_once("../Model/conexion.php");
		// require_once("../Model/tipo_organizacion.class.php");
		// 					 // $tp=Gestion_tipo_organizacion::ReadAll();
							 ?>
								 <select name="to_cod_tipo_organizacion">
								 <option disabled selected>Tipo organizacion:</option>
								 <?php
							 // foreach ($tp as $row) {
							 ?>

									 <option value="<?php /*echo $row["to_cod_tipo_organizacion"] ?>" ><?php echo $row["to_nombre"] ?></option>*/
										 // <?php } ?>
								 </select>-->
	<!-- 	<br>
		<label>Nombre organización:</label>
		<input name="org_nombre"></input>
		<br>
		<label>Nit:</label>
		<input name="org_nit"></input>
		<br>
		<label>Email:</label>
		<input  name="org_email"></input>
		<br>
		<label>Telefono:</label>
		<input type="numeric" name="org_telefono"></input>
		<br>
		<label>Dirección:</label>
		<input name="org_direccion"></input>
		<br>
		<label>Contraseña:</label>
		<input name="org_clave" type="password"></input>
		<br>

	</div>
	<div class="form-group">
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>  -->

<!-- ------------------------------------------ -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/estilos.css">
	<script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container">
                    <div class="row">
                        
                        <div class="col-lg-5">
                        	<div class="titulo_formulario">
                        			<h1 id="titulo">Registro Organización</h1>
                            </div>

                            <div class="formulario">
			                    <form role="form" action="../Controller/organizacion.controller.php" method="POST">
			                    	
			                    	<div class="form-group">
			                    		
			                    		<label class="sr-only" for="form-first-name">Tipo de Organizacion</label>
			                    		
			                    		<?php
										require_once("../Model/conexion.php");
										require_once("../Model/tipo_organizacion.class.php");

							 				$tp=Gestion_tipo_organizacion::ReadAll();
							 			?>

			                    		<select class="form-control" name="to_cod_tipo_organizacion">
			                    			<option disabled selected>Tipo Organizacion</option>
			                    			<?php
							 				foreach ($tp as $row) {
							 				?>
			                    			<option value="<?php echo $row["to_cod_tipo_organizacion"] ?>" ><?php echo $row["to_nombre"] ?></option>
			                    			<?php } ?>

			                    		</select>
			                    	</div>

			                    	<div class="form-group">
			                    		<label class="sr-only" for="Nombre_Organizacion">Nombre Organizacion</label>
			                        	<input type="text" name="org_nombre" placeholder="Nombre Organizacion..." class="form-control" >
			                        </div>

			                        <div class="form-group">
			                        	<label class="sr-only" for="Nit">Nit</label>
			                        	<input type="text" name="org_nit" placeholder="Nit..." class="form-control">
			                        </div>

			                        <div class="form-group">
			                        	<label class="sr-only" for="Email">Email</label>
			                        	<input type="text" name="org_email" placeholder="Email..." class="form-control">
			                        </div>

			                        <div class="form-group">
			                        	<label class="sr-only" for="Telefono">Telefono</label>
			                        	<input type="numeric" name="org_telefono" placeholder="Telefono..." class="form-control">
			                        </div>

			                        <div class="form-group">
			                        	<label class="sr-only" for="Direccion">Direccion</label>
			                        	<input type="text" name="org_direccion" placeholder="Direccion..." class="form-control">
			                        </div>

			                        <div class="form-group">
			                        	<label class="sr-only" for="Contraseña">Contraseña</label>
			                        	<input type="password" name="org_clave"  placeholder="Contraseña..." class="form-control">
			                        </div>
			                        
			                        <button type="submit" name="accion" value="c"  class="btn btn-primary">Registrar</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>	
</body>
</html>