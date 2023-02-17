<?php

    try{
        $pdo = new PDO("mysql:dbname=blog;host=127.0.0.1","root","");
    }catch(PDOException $e){
        echo "Error: {$e->getMessage()}";
    }

    $p = 0;

    $sql = $pdo->query("SELECT * FROM post LIMIT $p, 10");

    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $item){
            echo $item['autor']." - ".$item['titulo'].'<br>';
        }
    }

?>