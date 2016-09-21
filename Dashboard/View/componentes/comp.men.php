<li class="divider" style="margin:30px;"></li>
<ul class="collapsible" data-collapsible="accordion">
  <style media="screen">
  .collapsible-header {
      border-bottom: 1px solid #bbb;}
  </style>
<?php
// 1=usuario
if($_SESSION["cod_rol"]==1){
?>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-paw" aria-hidden="true"></i>Mi perfil</a></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('actualizar_perfil')?>">Actualizar</a></p></div>
</li>
<li>
  <div class="collapsible-header grey lighten-2"><a><i class="fa fa-paw" aria-hidden="true"></i>Mis mascotas</a></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('registrar_animal')?>">Crear</a></p></div>
  <div class="collapsible-body"><p><a class="item_menu" href="dashboard.php?p=<?php echo base64_encode('gestion_animal')?>">Mascotas actuales</a></p></div>
</li>
  <!-- aqui metan el menu -->
<?php
// 2=administrador
}elseif($_SESSION["cod_rol"]==2){
?>
<!-- aqui metan el menu -->
<?php
// 3=organizacion
  }elseif ($_SESSION["cod_rol"]==3) {

?>
      <!-- aqui metan el menu -->
<?php
}
?>
