<?php
$db = "mysql:dbname=projeto_tags;host=127.0.0.1";
$dbuser = "root";
$dbpassword = "";

try{

$pdo = new PDO($db,$dbuser,$dbpassword);

}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
}

$sql = "SELECT caracteristica FROM usuario";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
    $list = $sql->fetchAll();
    $carac = array();

    foreach($list as $lista){
        $palavra = explode(",",$lista['caracteristica']);
        foreach($palavra as $p){
            $p = trim($p);

            if(isset($carac[$p])){
                $carac[$p]++;
            }else{
                $carac[$p] = 1;
            }
        }
    }
    
    arsort($carac); //ordenar array

    $palavra = array_keys($carac); //mostra chave e o que esta dentro do array 
    $contagens = array_values($carac); //retorna a quantidade

    $maior = max($contagens);

    $tamanho = array(11, 15, 20, 30);

    for($x=0;$x<count($palavra);$x++){
        $n = $contagens[$x] / $maior;
        $h = ceil($n * count($tamanho));

        echo "<p style = 'font-size:".$tamanho[$h-1]."px'>".$palavra[$x]." (".$contagens[$x].")</p>";
    }
    

}

?>