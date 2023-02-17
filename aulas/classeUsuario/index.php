<?php
require_once "Usuarios.php";

$usuario = new Usuarios(4);
$usuario->delete();

echo "Excluido com sucesso";

?>