<?php

require_once "database.php";

session_start();

if(isset($_POST['conta_agencia']) && empty($_POST['conta_agencia']) == false){
    $agencia = filter_input(INPUT_POST, 'conta_agencia');
    $conta = filter_input(INPUT_POST, 'conta_conta');
    $senha = md5(filter_input(INPUT_POST, 'conta_senha'));    

    $sql = $pdo->prepare("SELECT * FROM conta WHERE conta_agencia = :agencia AND conta_conta = :conta AND conta_senha = :senha");
    $sql->bindValue(":agencia", $agencia);
    $sql->bindValue(":conta", $conta);
    $sql->bindValue(":senha", $senha);
    $sql->execute();

    if($sql->rowCount() > 0){
        $dados = $sql->fetch();
        
        $_SESSION['banco'] = $dados['conta_id'];

        header("Location: index.php");
        exit;
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form method="POST">
        <label>Agência</label><br>
        <input type="text" name="conta_agencia" placeholder="Digite a sua agência..."><br>

        <label>Conta</label><br>
        <input type="text" name="conta_conta" placeholder="Digite a sua conta..."><br>
        
        <label>Senha</label><br>
        <input type="text" name="conta_senha" placeholder="senha***">
        <br>
        <br>
        <br>
        <input type="submit" value="Entrar"><br>
        <a href="cadastrar.php">Cadastrar</a>
    </form>


</body>
</html>