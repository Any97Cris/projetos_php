<?php

class Calculadora{
    private $n;

    public function __construct($numeroInicial){
        $this->n = $numeroInicial;
    }


    public function somar($num1){
        $this->n += $num1;
        return $this;
    }

    public function subtrair($num1){
        $this->n -= $num1;
        return $this;
    }

    public function multiplicar($num1){
        $this->n *= $num1;
        return $this;
    }

    public function dividir($num1){
       $this->n /= $num1;
        return $this;
    }

    public function resultado() {
        return $this->n;
    }
}

?>