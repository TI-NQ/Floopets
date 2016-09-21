

<?php
// 1=usuario
if($_SESSION["cod_rol"]==1){
?>
 
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
          
   
