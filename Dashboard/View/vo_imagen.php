<?php
$total = count($_FILES['vo_imagen']['name']);
for($i=0; $i<$total; $i++) {
  $tmpFilePath = $_FILES['vo_imagen']['tmp_name'][$i];
  if ($tmpFilePath != ""){
    $newFilePath = "galeria/" . $_FILES['vo_imagen']['name'][$i];
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
      echo "Los archivos se subieron correctamente";
    }
  }
?>