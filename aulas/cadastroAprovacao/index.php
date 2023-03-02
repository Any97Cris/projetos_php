<?php

require_once "config.php";

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');

if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $pdo->query("INSERT INTO usuarios SET nome = '$nome', email = '$email'");
    $id = $pdo->lastInsertId();

    $md5 = md5($id);
    //$link = 'colocar link servidor de email'.$md5;

    $assunto = "Confirmar seu Cadastro";
    $msg = "Clique no link abaixo para confirmar seu cadastro:\n\n";#.$link;
    $headers = "Form: teste@teste.com"."\r\n"."X-Mailer: PHP/".phpversion();

    mail($email, $assunto, $msg, $headers);

    echo "<h2>OK! Confirme seu cadastro agora!</h2>";
    exit;
}

?>

<form method="POST">
    Nome: <br>
    <input type="text" name="nome"><br><br>

    Email: <br>
    <input type="email" name="email"><br><br>

    <br>
    <br>
    <input type="submit" value="Cadastrar">
</form>

