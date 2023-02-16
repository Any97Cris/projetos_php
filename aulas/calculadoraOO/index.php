<?php

require_once "Calculadora.php";

$calc = new Calculadora(10);
$calc->somar(2)->subtrair(3)->multiplicar(5)->dividir(2);
$resultado = $calc->resultado();

echo "Resultado = {$resultado}";

?>