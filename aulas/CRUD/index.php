<?php

require_once "Contato.php";

$contato = new Contato();

//$contato->create("criscianysilva1997@gmail.com","Crisciany Silva");
// $nome = $contato->getNome('criscianysilva1997@gmail.com');
// echo $nome;

//$contato->editar('Crisciany Silva', 'criscianysilva1997@gmail.com');

$contato->excluir("criscianysilva1997@gmail.com");

?>