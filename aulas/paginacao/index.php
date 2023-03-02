<?php

    try{
        $pdo = new PDO("mysql:dbname=blog;host=127.0.0.1","root","");
    }catch(PDOException $e){
        echo "Error: {$e->getMessage()}";
    }

    $total = 0;
    $sql = "SELECT COUNT(*) as c FROM post";
    $sql = $pdo->query($sql);
    $sql = $sql->fetch();
    $total = $sql['c'];
    $paginas = $total / 10;

    $pg = 1;
    if(isset($_GET['p']) && !empty($_GET['p'])){
        $pg = addslashes($_GET['p']);
    }

    $p = ($pg - 1) * 10;

    $sql = $pdo->query("SELECT * FROM post LIMIT $p, 10");

    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $item){
            echo $item['autor']." - ".$item['titulo'].'<br>';
        }
    }

    echo "<br>";
    echo "<hr>";
    echo "<p>Páginas</p>";

    for($q=0;$q<$paginas;$q++){
        echo '<a href="./?p='.($q+1).'">['.($q+1).']</a>';
    }

?>