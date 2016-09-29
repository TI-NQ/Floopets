<?php
$total = count($_FILES['Logo']['name']);
for($i=0; $i<$total; $i++) {
  $tmpFilePath = $_FILES['Logo']['tmp_name'][$i];
  if ($tmpFilePath != ""){
    $newFilePath = "galeria/" . $_FILES['Logo']['name'][$i];
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
      echo "Los archivos se subieron correctamente";
    }
  }
?>