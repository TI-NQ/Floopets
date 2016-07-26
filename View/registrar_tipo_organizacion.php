<form action="crud_clientes.php" method="POST">
	<div class="form-group">
		<label class="form-label">identificacion</label>
		<input class="form-control" type="number" name="id" required>
	</div>
	<div class="form-group">
		<label class="form-label">nombre</label>
		<input class="form-control" type="text" name="nombre" required>
	</div>
	<div class="form-group">
		<label class="form-label">apellido</label>
		<input class="form-control" type="text" name="apellido" required>
	</div>
	<div class="form-group">
		<label class="form-label">email</label>
		<input class="form-control" type="email" name="email" required>
	</div>
	<div class="form-group">
		<label class="form-label">clave</label>
		<input class="form-control" type="password" name="clave" required>
	</div>
	<div class="form-group">
		<button name="accion" value="crear" class="btn btn-primary">registrar cliente</button>
	</div>
</form>
<?php 
require_once("CLASS/dbconn.php");
require_once("CLASS/ges_cliente.class.php");
$clientes=Ges_clientes::Consultar();
 ?>

<table>
	<thead>
		<tr>
			<td>identificacion</td>
			<td>nombre</td>
			<td>apellico</td>
			<td>email</td>
		</tr>
		<tbody>
			<?php 
			@$mensaje = $_REQUEST["m"];

			echo @$mensaje;

			foreach ($clientes as $row) {
				echo"<tr>";
					echo"<td>".$row["cedula"]."</td>";
					echo"<td>".$row["nombre"]."</td>";
					echo"<td>".$row["apellido"]."</td>";
					echo"<td>".$row["email"]."</td>";
				echo"</tr>";
			}

			 ?>
		</tbody>
	</thead>
</table>