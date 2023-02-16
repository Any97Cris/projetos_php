<?php

class Usuarios {
    private $pdo;

    public function __construct(){
        try{
            $this->pdo = new PDO("mysql:dbname=blog;host=127.0.0.1","root","");
        }catch(PDOException $e){
            echo "Falha: {$e->getMessage()}";
        }
        $this->pdo = new PDO();
    }

}

?>