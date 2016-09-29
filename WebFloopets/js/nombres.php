<?php
include("global.php");
require_once("zebra.php");

$query = "SELECT * FROM nombres ORDER BY id DESC";
$res = $con->query($query);
$num_registros = mysqli_num_rows($res);

$resul_x_pagina = 6;

$paginacion = new Zebra_Pagination();
$paginacion->records($num_registros);
$paginacion->records_per_page($resul_x_pagina);

$consulta = 'SELECT * FROM nombres ORDER BY id DESC LIMIT ' .(($paginacion->get_page() - 1) * $resul_x_pagina). ',' .$resul_x_pagina;
	$result = $con->query($consulta);

while($row = mysqli_fetch_array($result)){
	echo $row['name']."<br>";
	echo $row['id']."<br>";
}

$paginacion->render();

?>