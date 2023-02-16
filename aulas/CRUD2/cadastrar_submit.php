<?php

require_once "Contato.php";
$contato = new Contato();

$nome = $_POST['nome'];
$email = $_POST['email'];

if(!empty($email)){
    $contato->create($email, $nome);

    header("Location: index.php");
    exit;
}else{
    header("Location: cadastrar.php");
    exit;
}
?>