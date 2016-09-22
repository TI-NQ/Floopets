<li class="divider" style="margin:30px;"></li>
<ul class="collapsible" data-collapsible="accordion">
  <style media="screen">
  .collapsible-header {
      border-bottom: 1px solid #bbb;}
  </style>
<?php
// Menú de usuario publico id_rol 1
if($_SESSION["cod_rol"]==1){
?>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-user" aria-hidden="true"></i>Mi perfil</a></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('actualizar_perfil')?>">Actualizar</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-paw" aria-hidden="true"></i>Mis mascotas</a></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('registrar_animal')?>">Crear Nueva</a></p></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('gestion_animal')?>">Ver mis Mascotas</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a href=""><i class="fa fa-building-o" aria-hidden="true"></i>Fundaciones</a></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-calendar" aria-hidden="true"></i>Eventos</a></div>
  <div class="collapsible-body"><p><a class="item_menu" >Proximos Eventos</a></p></div>
  <div class="collapsible-body"><p><a class="item_menu">Historial Eventos</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-paw" aria-hidden="true"></i>Cuidados</a></div>
  <div class="collapsible-body"><p><a class="item_menu" >Gatos</a></p></div>
  <div class="collapsible-body"><p><a class="item_menu" >Perros</a></p></div>
</li>
<?php
// Menú de Administrador publico id_rol 1
}elseif($_SESSION["cod_rol"]==2){
?>
<!-- aqui metan el menu -->
<?php
// Menú de Organización publico id_rol 1
}elseif ($_SESSION["cod_rol"]==3) {
?>
<!-- <li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-building-o" aria-hidden="true"></i>Organizacion</a></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('registrar_organizacion')?>">Nueva</a></p></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('gestion_organizacion')?>">Gestionar</a></p></div>
</li> -->
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-paw" aria-hidden="true"></i>Mascotas</a></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('registrar_animal')?>">Nueva</a></p></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('gestion_animal')?>">Gestionar</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-paw" aria-hidden="true"></i>Adopciones</a></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('registrar_adopcion')?>">Nueva</a></p></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('gestion_adopcion')?>">Historial</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-calendar" aria-hidden="true"></i>Eventos</a></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('registrar_evento')?>">Nuevo</a></p></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('gestion_evento')?>">Mis Eventos</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-money" aria-hidden="true"></i>Donaciones</a></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('gestion_donacion')?>">Gestionar</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a href="dashboard.php?p=<?php echo base64_encode('Gestion_denuncia')?>"><i class="fa fa-shield" aria-hidden="true"></i>Denuncias</a></div>
  <!-- <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('Gestion_denuncia')?>">Gestionar</a></p></div> -->
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-eyedropper" aria-hidden="true"></i>Vacunas</a></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('registrar_vacunas')?>">Nueva</a></p></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('gestion_vacunas')?>">Ver Todas</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-plus" aria-hidden="true"></i>Voluntarios</a></div>
  <!-- <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('registrar_voluntarios')?>">Crear</a></p></div> -->
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('gestion_voluntarios')?>">Ver Voluntarios</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-paw" aria-hidden="true"></i>Cuidados</a></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('registrar_cuidado')?>">Nuevo</a></p></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('gestion_cuidado')?>">Ver Todos</a></p></div>
</li>
      <!-- aqui metan el menu -->
<?php
}
?>
