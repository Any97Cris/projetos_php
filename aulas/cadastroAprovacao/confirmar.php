<?php

require 'config.php';
$h = $_GET['h'];

if(!empty($h)){
    $pdo->prepary("UPDATE usuarios SET = '1' WHERE MD5(id) = '$h'");
    echo "<h2>Cadastro confirmado com sucesso!</h2>";
}

?>