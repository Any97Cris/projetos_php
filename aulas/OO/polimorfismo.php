<?php

class Animal{

    public function getNome(){
        echo "getNome da Class Animal";
    }
}

class Cachorro extends Animal {
    public function getNome(){
        echo "getNome da Class Cachorro";
    }
}


// $animal = new Animal();
// echo $animal->getNome();

$animal = new Cachorro();
echo $animal->getNome();

?>