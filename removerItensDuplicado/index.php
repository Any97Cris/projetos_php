<?php

$numeros = array(1,2,1,6,8,4,6,9,2);

echo "<p style='color:red;font-weight:bold;'>array original</p>";
echo "<pre>";
print_r($numeros);

$unico = array_unique($numeros);

echo "<br>";
echo "<p style='color:red;font-weight:bold;'>array sem itens duplicado</p>";
echo "<pre>";
print_r($unico);

?>