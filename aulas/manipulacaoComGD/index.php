<?php

$arquivo = "img/girlCode.jpg";
//$arquivo_mini = "img/mini_imagem.jpg";

list($largura_original, $altura_original) = getimagesize($arquivo);
list($largura_mini, $altura_mini) = getimagesize("img/mini_imagem.jpg");

$image_final = imagecreatetruecolor($largura_original, $altura_original);

$imagem_original = imagecreatefromjpeg("img/girlCode.jpg");
$image_mini = imagecreatefromjpeg("img/mini_imagem.jpg");

imagecopy($image_final, $imagem_original, 0, 0, 0, 0,
    $largura_original, $altura_original);

imagecopy($image_final, $image_mini, 960, 200, 0, 0,
    $largura_mini, $altura_mini);

// header("Content-Type: image/jpg");
imagejpeg($image_final, "img/marcadagua.jpg", 100);

echo "Imagem salva com sucesso!";
?>