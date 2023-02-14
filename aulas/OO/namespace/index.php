<?php

//Conceito página imaginária

require_once "sobre1.php";
require_once "sobre2.php";

$sobre = new aplicacao\v2\Sobre();

echo $sobre->getVersao();

?>