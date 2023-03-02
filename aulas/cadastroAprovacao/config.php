<?php

try{
$db = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

$pdo = new PDO($db, $dbuser, $dbpass);
}catch(PDOException $e){
    echo "Erro " . $e->getMessage();
}


?>