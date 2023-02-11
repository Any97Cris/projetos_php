<?php
#1920 x 1920 - tamanho imagem

$arquivo = "img/codeGirl.jpg";

$largura = 200;
$altura = 200;

list($largura_original, $altura_original) = getimagesize($arquivo);

$ratio = $largura_original / $altura_original;

if($largura/$altura > $ratio) {
    $largura = $altura * $ratio;
}else{
    $altura = $largura / $ratio;
}

//Criando uma nova imagem
$imagem_final = imagecreatetruecolor($largura, $altura);

$imagem_original = imagecreatefromjpeg($arquivo);
// $imagem_original = imagecreatefrompng($arquivo);

imagecopyresampled($imagem_final, $imagem_original, 
    0, 0, 0, 0,
    $largura, $altura, $largura_original, $altura_original);

//Mostrar imagem na tela
//header("Content-Type: image/jpg");


imagejpeg($imagem_final, "img/mini_imagem.jpg", 100);
//imagepng($imagem_final, null);

?>