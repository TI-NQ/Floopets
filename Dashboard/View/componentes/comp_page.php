<?php

if(isset($_GET["p"])){
	$page = base64_decode($_GET["p"]);
}else{
	$page = "";
}

switch ($page) {
	// componente de pagina para importar los formularios encargados del registro
	case 'registrar_adopcion':
		require_once("registrar_adopcion.php");
	break;

	case 'registrar_animal':
		require_once("registrar_animal.php");
	break;

	case 'registrar_cuidado':
		require_once("registrar_cuidado.php");
	break;

	case 'registrar_denuncia':
		require_once("registrar_denuncia.php");
	break;

	case 'registrar_donacion':
		require_once("registrar_donacion.php");
	break;

	case 'registrar_evento':
		require_once("registrar_evento.php");
	break;

	case 'registrar_organizacion':
		require_once("registrar_organizacion.php");
	break;

	case 'registrar_permisos':
		require_once("registrar_permisos.php");
	break;

	case 'registrar_raza':
		require_once("registrar_raza.php");
	break;

	case 'registrar_roles':
		require_once("registrar_roles.php");
	break;

	case 'registrar_tipo_animal':
		require_once("registrar_tipo_animal.php");
	break;

	case 'registrar_tipo_denuncia':
		require_once("registrar_tipo_denuncia.php");
	break;

	case 'registrar_tipo_donacion':
		require_once("registrar_tipo_donacion.php");
	break;

	case 'registrar_tipo_evento':
		require_once("registrar_tipo_evento.php");
	break;

	case 'registrar_tipo_organizacion':
		require_once("registrar_tipo_organizacion.php");
	break;

	case 'registrar_usuario':
		require_once("registrar_usuario.php");
	break;

	case 'registrar_vacunas':
		require_once("registrar_vacunas.php");
	break;

	case 'registrar_voluntario':
		require_once("registrar_voluntario.php");
	break;
	// componente de pagina para importar los formularios encargados de la gestion
	case 'gestion_adopcion':
		require_once("gestion_adopcion.php");
	break;

	case 'gestion_animal':
		require_once("gestion_animal.php");
	break;

	case 'gestion_cuidado':
		require_once("gestion_cuidado.php");
	break;

	case 'Gestion_denuncia':
		require_once("Gestion_denuncia.php");
	break;

	case 'gestion_donacion':
		require_once("gestion_donacion.php");
	break;

	case 'gestion_evento':
		require_once("gestion_evento.php");
	break;

	case 'gestion_organizacion':
		require_once("gestion_organizacion.php");
	break;

	case 'gestion_permisos':
		require_once("gestion_permisos.php");
	break;

	case 'Gestion_raza':
		require_once("Gestion_raza.php");
	break;

	case 'gestion_roles':
		require_once("gestion_roles.php");
	break;

	case 'gestion_tipo_animal':
		require_once("gestion_tipo_animal.php");
	break;

	case 'gestion_tipo_denuncia':
		require_once("gestion_tipo_denuncia.php");
	break;

	case 'gestion_tipo_donacion':
		require_once("gestion_tipo_donacion.php");
	break;

	case 'gestion_tipo_evento':
		require_once("gestion_tipo_evento.php");
	break;

	case 'gestion_tipo_organizacion':
		require_once("gestion_tipo_organizacion.php");
	break;

	case 'gestion_usuario':
		require_once("gestion_usuario.php");
	break;

	case 'gestion_vacuna':
		require_once("gestion_vacuna.php");
	break;

	case 'gestion_voluntarios':
		require_once("gestion_voluntarios.php");
	break;
	// componente de pagina para importar los formularios encargados de actualizar
	case 'actualizar_adopcion':
		require_once("gestion_adopcion.php");
	break;

	case 'actualizar_animal':
		require_once("gestion_animal.php");
	break;

	case 'actualizar_cuidado':
		require_once("gestion_cuidado.php");
	break;

	case 'actualizar_denuncia':
		require_once("Gestion_denuncia.php");
	break;

	case 'actualizar_donacion':
		require_once("gestion_donacion.php");
	break;

	case 'actualizar_evento':
		require_once("gestion_evento.php");
	break;

	case 'actualizar_organizacion':
		require_once("gestion_organizacion.php");
	break;

	case 'actualizar_permisos':
		require_once("gestion_permisos.php");
	break;

	case 'actualizar_raza':
		require_once("Gestion_raza.php");
	break;

	case 'actualizar_roles':
		require_once("gestion_roles.php");
	break;

	case 'actualizar_tipo_animal':
		require_once("gestion_tipo_animal.php");
	break;

	case 'actualizar_tipo_denuncia':
		require_once("gestion_tipo_denuncia.php");
	break;

	case 'actualizar_tipo_donacion':
		require_once("gestion_tipo_donacion.php");
	break;

	case 'actualizar_tipo_evento':
		require_once("gestion_tipo_evento.php");
	break;

	case 'actualizar_tipo_organizacion':
		require_once("gestion_tipo_organizacion.php");
	break;

	case 'actualizar_usuario':
		require_once("gestion_usuario.php");
	break;

	case 'actualizar_vacunas':
		require_once("gestion_vacunas.php");
	break;

	case 'actualizar_voluntarios':
		require_once("registrar_voluntarios.php");
	break;
}
?>
