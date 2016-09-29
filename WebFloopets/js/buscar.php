<form action="buscar.php" method="get">
	<input name="name" type="text" placeholder="Buscar...">
	<input value="Buscar" type="submit">
</form>
<?php
include("global.php");
require_once("zebra.php");

$name = utf8_encode($_GET['name']);

$query = "SELECT * FROM nombres WHERE name LIKE '%".$name."%' ORDER BY name ASC";
$res = $con->query($query);
$num_registros = mysqli_num_rows($res);

$resul_x_pagina = 5;

$paginacion = new Zebra_Pagination();
$paginacion->records($num_registros);
$paginacion->records_per_page($resul_x_pagina);

$consulta = "SELECT * FROM nombres WHERE name LIKE '%".$name."%' ORDER BY name ASC LIMIT " .(($paginacion->get_page() - 1) * $resul_x_pagina). "," .$resul_x_pagina;
	$result = $con->query($consulta);
			
while($row = mysqli_fetch_array($result)){
	echo $row['name']."<br>";
	echo $row['id']."<br>";
}

$paginacion->render();

?>