<li class="divider" style="margin:30px;"></li>
<ul class="collapsible" data-collapsible="accordion">
  <style media="screen">
    .collapsible-header {
      border-bottom: 1px solid #bbb;
    }
  </style>
<?php
// Menú de usuario publico id_rol 1
if($_SESSION["cod_rol"]==5){
?>
<li>
  <div class="collapsible-header grey lighten-2"><a href="dashboard.php?p=<?php echo base64_encode('mi_perfil')?>"><i class="fa fa-user" aria-hidden="true"></i>Mi perfil</a></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-paw" aria-hidden="true"></i>Mis mascotas</a></div>
  <!-- <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('nueva_mascota')?>" class="item_menu">Nueva Mascota</a></p></div> -->
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('mis_mascotas')?>" class="item_menu">Ver mis Mascotas</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a href="dashboard.php?p=<?php echo base64_encode('fundaciones_usuario')?>"><i class="fa fa-building-o" aria-hidden="true"></i>Fundaciones</a></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-calendar" aria-hidden="true"></i>Eventos</a></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('proximos_eventos')?>" class="item_menu" >Proximos Eventos</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-paw" aria-hidden="true"></i>Cuidados</a></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('cuidados_perros')?>" class="item_menu" >Gatos</a></p></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('cuidados_gatos')?>" class="item_menu" >Perros</a></p></div>
</li>
<?php
// Menú de Administrador publico id_rol 2
}elseif($_SESSION["cod_rol"]==7){
?>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-user" aria-hidden="true"></i>Usuarios</a></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('registrar_usuarios')?>" class="item_menu">Nuevos</a></p></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('gestionar_usuarios')?>" class="item_menu">Gestionar</a></p></div>
</li>
<li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-building-o" aria-hidden="true"></i>Organizaciones</a></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('registrar_organizacion')?>" class="item_menu">Nueva</a></p></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('gestionar_organizacion')?>" class="item_menu">Gestionar</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-paw" aria-hidden="true"></i>Eventos</a></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('gestion_evento')?>" class="item_menu">Gestionar Eventos</a></p></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('historial_eventos')?>" class="item_menu">Historial de Eventos</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-shield" aria-hidden="true"></i>Denuncias</a></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('denuncias_admin')?>" class="item_menu">Gestionar Denuncias</a></p></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('historial_denuncias')?>" class="item_menu">Historial de Denuncias</a></p></div>
</li>
<!-- aqui metan el menu -->
<?php
// Menú de Organización publico id_rol 3
}elseif ($_SESSION["cod_rol"]==6) {
  // require_once ("../Model/conexion.php");
  // require_once ("../Model/organizacion.class.php");
  // $organizacion=Gestion_organizacion::ReadbyID($_SESSION["org_cod_organizacion"]);
  // // print_r($organizacion);
?>
<li>
  <div class="collapsible-header grey lighten-2 tooltipped" data-tooltip="Mi fundacion" data-position="right"><a href="dashboard.php?p=<?php echo base64_encode('mi_organizacion')?>"><i class="fa fa-building-o" aria-hidden="true"></i>Fundacion</a></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-paw" aria-hidden="true"></i>Mascotas</a></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('nueva_mascota')?>" class="item_menu">Nueva</a></p></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('mis_mascotas')?>" class="item_menu">Gestionar</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-paw" aria-hidden="true"></i>Adopciones</a></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('nueva_adopcion')?>" class="item_menu">Nueva</a></p></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('historial_adopciones')?>" class="item_menu">Historial</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-calendar" aria-hidden="true"></i>Eventos</a></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('nuevo_evento')?>" class="item_menu">Nuevo</a></p></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('mis_eventos')?>" class="item_menu">Mis Eventos</a></p></div>
</li>
<!-- <li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-money" aria-hidden="true"></i>Donaciones</a></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('gestion_donaciones')?>" class="item_menu">Gestionar</a></p></div>
</li> -->
<li>
  <div class="collapsible-header grey lighten-2"><a href="#"><i class="fa fa-shield" aria-hidden="true"></i>Denuncias</a></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('denuncias')?>" class="item_menu">Gestionar</a></p></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('denuncias_tomadas')?>" class="item_menu">Mis Denuncias</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-eyedropper" aria-hidden="true"></i>Vacunas</a></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('nueva_vacuna')?>" class="item_menu">Nueva</a></p></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('vacunas_fundacion')?>" class="item_menu">Ver Todas</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-plus" aria-hidden="true"></i>Voluntarios</a></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('voluntarios')?>" class="item_menu">Ver Voluntarios</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-paw" aria-hidden="true"></i>Cuidados</a></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('registro_cuidados')?>" class="item_menu">Nuevo</a></p></div>
  <div class="collapsible-body"><p><a href="dashboard.php?p=<?php echo base64_encode('ver_cuidados')?>" class="item_menu">Ver Todos</a></p></div>
</li>
<?php
}
?>
