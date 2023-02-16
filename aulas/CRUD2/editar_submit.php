<?php

require_once "Contato.php";

$contato = new Contato();

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

if(!empty($id)){
    $contato->editar($nome, $id, $email);

    header("Location: index.php");
    exit;
}

?>