<h2 class="center animated zoomIn" >Registrar Vacuna</h2>
<form id="form" action="../Controller/vacunas.controller.php" method="POST">
	
	<div class="input-field">
		<label >Nombre</label>
		<input  type="text" name="vac_nombre" required>
	</div>
	
	<div >
		<label >Fecha</label>
		<input  type="date" name="vac_fecha" min="<?php echo date("Y-m-d"); ?>" required>
	</div>
	
	<div class="input-field">
		<label >serial</label>
		<input  type="number" name="vac_serial" required>
	</div>
	
	<div >
		<button name="accion" value="c" class="btn btn-primary">Registrar</button>
	</div>
</form>
