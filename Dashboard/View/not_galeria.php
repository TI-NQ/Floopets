<?php
$total = count($_FILES['not_galeria']['name']);
for($i=0; $i<$total; $i++) {
  $tmpFilePath = $_FILES['not_galeria']['tmp_name'][$i];
  if ($tmpFilePath != ""){
    $newFilePath = "galeria/" . $_FILES['not_galeria']['name'][$i];
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
      echo "Los archivos se subieron correctamente";
    }
  }
?>