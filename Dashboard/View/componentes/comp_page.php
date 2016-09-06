<?php

if(isset($_GET["p"])){
	$page = base64_decode($_GET["p"]);
}else{
	$page = "";
}

switch ($page) {
	case 'registrar_organizacion': 
		require_once("registrar_organizacion.php");
	break;


// 	case 'gestion_empresa':
// 		require_once("Gestion_empresa.php");
// 	break;
//
// 	case 'actualizar_usuario':
//
// 		require_once("ActualizarUsuario.php");
// 	break;
//
// 	case 'nuevo_usuario':
//
// 		require_once("nuevo_usuario.php");
// 	break;
//
// 	case 'gestion_producto':
//
// 		require_once("Gestion_productos.php");
// 	break;
//
// 	case 'gestion_proveedor':
//
// 		require_once("Gestion_proveedores.php");
// 	break;
//
// 	case 'nuevo_producto':
//
// 		require_once("nuevo_producto.php");
// 	break;
//
// 	case 'nuevo_proveedor':
//
// 		require_once("nuevo_proveedor.php");
// 	break;
// 	case 'nueva_empresa':
//
// 		require_once("nueva_empresa.php");
// 	break;
//
// 	case 'gestion_servicios':
//
// 		require_once("gestion_servicios.php");
// 	break;
//
// 	case 'nuevo_servicio':
//
// 		require_once("nuevo_servicio.php");
// 	break;
//
// 	case 'nueva_cita_usu':
//
// 		require_once("Registrar_cita.php");
// 	break;
//
// 	case 'actualizar_servicio':
//
// 		require_once("ActualizarServicio.php");
// 	break;
//
// 	case 'nueva_cita':
// 		require_once("Registrar_cita.php");
// 	break;
//
// 	case 'gestion_citas_usu':
// 		require_once("Gest_citas_usuario.php");
// 	break;
//
// 	case 'gestion_citas':
// 		require_once("Gestion_citas.php");
// 	break;
//
// 	case 'actualizar_citas':
// 		require_once("actualizar_citas.php");
// 	break;
//
//
//
// //	case 'ofertas':
// 		//require_once("ofertas.php");
// //	break;
//
// 	case 'registro_usuario':
// 		echo "<div id = 'form'>";
// 		require_once("registrate.php");
// 		echo "</div>";
// 	break;
//
// 	case 'nueva_empresa':
//
// 		require_once("nueva_empresa.php");
// 	break;
//
// 	case 'actualizar_empresa':
//
// 		require_once("ActualizarEmpresa.php");
// 	break;

}
?>
