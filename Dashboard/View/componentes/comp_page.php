<?php

if(isset($_GET["p"])){
	$page = base64_decode($_GET["p"]);
}else{
	$page = "";
}

switch ($page) {
	//Componente de pagina encargado de vincular datos de la fundacion que tiene la sesion activa
	case'mi_organizacion':
		require_once("organizacion.php");
	break;
	//Componente de pagina encargado de vincular formulario para el registro de una nueva mascota
	case'nueva_mascota':
		require_once("registrar_animal.php");
	break;
	//Componente de pagina encargado de vincular informacion de mascotas segun fundacion o usuario que se encuentra con la sesion activa
	case'mis_mascotas':
		require_once("gestion_animal.php");
	break;
	//Componente de pagina encargado de vincular formulario para registro de nueva adopcion
	case 'nueva_adopcion':
		require_once("registrar_adopcion.php");
	break;
	//Componente de pagina encargado de vincular todas las adopciones creadas por la fundacion que tiene la sesion activa
	case 'historial_adopciones':
		require_once ("gestion_adopcion.php");
	break;
	//Componente de pagina encargado de vincular formulario de nuevo evento
	case 'nuevo_evento':
			require_once("registrar_evento.php");
	break;
	//Componente de pagina encargado de vincular informacion de eventos creados por la fundacion que tiene la sesion activa
	case 'mis_eventos':
			require_once("gestion_evento.php");
	break;
	//Componente de pagina encargado de vincular la informacion sobre las donaciones que los usuarios realizaron a la fundacion que tiene la sesion activa
	case 'gestion_donaciones':
		require_once ("gestion_donacion.php");
	break;
	//Componente de pagina que vinculara informacion sobre todas las denuncias realizadas y en esta las fundaciones podran escoger si dan seguimiento a la denuncia
	case 'denuncias':
		require_once("Gestion_denuncia.php");
	break;
	//Componente de pagina que vinculara el formulario para crear una nueva vacuna
	case 'nueva_vacuna':
		require_once("registrar_vacunas.php");
	break;
	//Componente de pagina que vinculara la informacion de las vacunas que tiene registradas la fundacion
	case 'vacunas_fundacion':
		require_once("gestion_vacunas.php");
	break;
	//Componente de pagina que vinculara la informacion de los usuarios que desean ser voluntarios
	case 'voluntarios':
		require_once("gestion_voluntarios.php");
	break;
	//Componente de pagina ue vinculara el formulario para registrar nuevo cuidado
	case 'registro_cuidados':
		require_once("registrar_cuidado.php");
	break;
	//Componente de pagina que vinculara la informacion de los cuidados
	case 'ver_cuidados':
		require_once("gestion_cuidado.php");
	break;
	//Componente de pagina que vinculara formulario para crear nueva organizacion
	case 'registrar_organizacion':
		require_once("registrar_organizacion.php");
	break;
	//Componente de pagina que vinculara la informacion de todas las fundaciones
	case 'gestionar_organizacion':
		require_once("gestion_organizacion.php");
	break;
	//Componente de pagina que cargara la informacion de los eventos para cambiar el estado
	case 'gestion_evento':
		require_once("gestion_evento.php");
	break;
	//componente de pagina que cargara la informacion de todos los eventos
	case 'historial_eventos':
		require_once("historial_eventos.php");
	break;
	//Componente de pagina que cargara la informacion de las denuncias para cambiar el estado
	case 'gestion_denuncia_estado':
		require_once("Gestion_denuncia_estado.php");
	break;
	//componente de pagina que cargara la informacion de todas las denuncias
	case 'historial_denuncias':
		require_once("historial_denuncias.php");
	break;
	//Componente de pagina que cargara la informacion del usuario(perfil) para poder editarlo
	case 'mi_perfil':
		require_once("perfil.php");
	break;
	//Componente de pagina que cargara toda la informacion de las fundaciones, pero sin ninguna accion(editar, eliminar, etc...)
	case 'fundaciones_usuario':
		require_once("fundaciones.php");
	break;
	//Componente de pagina que cargara la informacion de los eventos PROXIMOS al usuario
	case 'proximos_eventos':
		require_once("eventos_proximos.php");
	break;
	//Componente que cargara las informacion sobre los cuidados para perros
	case 'cuidados_perros':
		require_once("cuidados_perros.php");
	break;
	//Componente que cargara las informacion sobre los cuidados para gatos
	case 'cuidados_gatos':
		require_once("cuidados_gatos.php");
	break;
	case 'actualizar_adopcion':
		require_once("actualizar_adopcion.php");
	 break;

	 case 'actualizar_animal':
	 	require_once("actualizar_animal.php");
	 break;

	 case 'actualizar_cuidado':
	 	require_once("actualizar_cuidado.php");
	 break;

	 case 'actualizar_denuncia':
	 	require_once("actualizar_denuncia.php");
	 break;

	 case 'actualizar_donacion':
	 	require_once("actualizar_donacion.php");
	 break;

	 case 'actualizar_evento':
	 	require_once("actualizar_evento.php");
	 break;

	 case 'actualizar_organizacion':
	 	require_once("actualizar_organizacion.php");
	 break;

	 case 'actualizar_permisos':
	 	require_once("actualizar_permisos.php");
	 break;

	 case 'actualizar_raza':
	 	require_once("actualizar_raza.php");
	 break;

	 case 'actualizar_roles':
	 	require_once("actualizar_roles.php");
	 break;

	 case 'actualizar_tipo_animal':
	 	require_once("actualizar_tipo_animal.php");
	 break;

	 case 'actualizar_tipo_denuncia':
	 	require_once("actualizar_tipo_denuncia.php");
	 break;

	 case 'actualizar_tipo_donacion':
	 	require_once("actualizar_tipo_donacion.php");
	 break;

	 case 'actualizar_tipo_evento':
	 	require_once("actualizar_tipo_evento.php");
	 break;

	 case 'actualizar_tipo_organizacion':
	 	require_once("actualizar_tipo_organizacion.php");
	 break;

	 case 'actualizar_usuario':
	 	require_once("actualizar_usuario.php");
	 break;

	 case 'actualizar_vacunas':
	 	require_once("actualizar_vacuna.php");
	 break;

	 case 'actualizar_voluntarios':
	 	require_once("actualizar_voluntarios.php");
	 break;

	 case 'actualizar_perfil':
	 	require_once("actualizar_usuario.php");
	 break;

	 case 'gestionar_usuarios':
	 	require_once("gestion_usuarios.php");
	 break;

	 case 'registrar_usuarios':
	 require_once("registrar_usuario.php");
	break;

}
?>
