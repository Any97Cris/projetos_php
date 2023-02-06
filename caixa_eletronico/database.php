<?php

$db = "mysql:dbname=caixa_eletronico;host=127.0.0.1";
$dbuser = "root";
$dbpassword = "";

try{
    $pdo = new PDO($db,$dbuser,$dbpassword);
}catch(Exception $e){
    echo $e->getMessage();
}

?>