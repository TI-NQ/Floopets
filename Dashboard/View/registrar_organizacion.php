<h2 class="center">Registrar Organización</h2>
	<form action="../Controller/organizacion.controller.php" method="POST">
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
		                    <!-- </div>
                        </div>
                    </div>
                </div>
</body>
</html> -->
