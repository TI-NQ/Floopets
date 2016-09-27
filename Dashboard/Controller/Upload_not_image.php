<?php
$total = count($_FILES['not_galeria']['name']);

$directorio = "../View/img/imagen_noticias/".$nombre_not_galeria."/";


if (!file_exists($directorio)) { 
  echo "El archivo no existe";
  mkdir($directorio, 0777, true);
}

for($i=0; $i<$total; $i++) { 

  $archivo     = $directorio.basename(str_replace(" ", "",$_FILES["not_galeria"]["name"][$i]));
  $uploadOk    = 0;
  $extension_archivo = pathinfo($archivo,PATHINFO_EXTENSION);
  
  $check = getimagesize($_FILES["not_galeria"]["tmp_name"][$i]);
      if($check !== false) {
          echo "El archivo si es una imagen <br>";
          $uploadOk = 1;
      }else{
          echo "El archivo no es una imagen  <br>";
          $uploadOk = 0;
      }

// ASIGNAMOS UN LIMITE DE PESO A NUESTRO ARCHIVO ASIGNANDO UN VALOR EN Bytes
  if($_FILES["not_galeria"]["size"][$i] > 7000000){
    echo "Ooops! tu imagen no puede superar mas de 700Kb  <br>";
    $uploadOk = 0;
  }
// VALIDAMOS EL TIPO DE ARCHIVO
  if($extension_archivo != "jpg" && $extension_archivo != "png" && $extension_archivo != "jpeg" && $extension_archivo != "gif" ) {
      echo "El archivo no tiene un formato valido de imagen  <br>";
      $uploadOk = 0;
  }

   // COMPROBAMOS QUE EL ARCHIVO NO EXISTA
  if(file_exists($archivo)){
    echo "Lo siento, el archivo ya existe en nuestra aplicación!  <br>";
    $uploadOk = 0;
  }
 
// VALIDAMOS SI $UPLOADOK ESTA EN 1 DE ESA FORMA SE PUEDE SUBIR


  if($uploadOk == 1){
      if (move_uploaded_file($_FILES["not_galeria"]["tmp_name"][$i], $archivo)) {
          echo "El archivo ". basename( $_FILES["not_galeria"]["name"][$i]). " se subio correctamente.  <br>";
      } else {
          echo "Oops! ha ocurrido un error.  <br>";
      }
  } else {
    echo "Lo sentimos su archivo no se puede subir.  <br>";
  }
}
 ?>