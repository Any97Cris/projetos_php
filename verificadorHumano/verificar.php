<?php

$resultado = filter_input(INPUT_POST, 'resultado');
$num = filter_input(INPUT_POST, 'num');
$ndois = filter_input(INPUT_POST, 'ndois');

$soma = $num + $ndois;

if($soma == $resultado){
    echo "HUMANO";
}else{
    echo "FAKE";
}

?>

<br>
<a href="index.php">retornar</a>