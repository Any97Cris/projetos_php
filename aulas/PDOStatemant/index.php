<?php
require_once "usuarios.php";

$u = new Usuarios();

// $res = $u->selecionar(1);
// echo "<pre>";
// print_r($res);

//$res = $u->inserir("Crisciany", "crisciany@gmail.com", "123456");

//$res = $u->atualizar("Cris Souza", "criscianysouza@gmail.com", "Cris123", 3);

$res = $u->excluir(3);

// $senha = md5("Sam123");
// echo $senha;


?>