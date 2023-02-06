<?php
require_once "database.php";

if(isset($_POST['conta_agencia']) && empty($_POST['conta_agencia']) == false){
    $titular = filter_input(INPUT_POST, "conta_titular");
    $agencia = filter_input(INPUT_POST, "conta_agencia");
    $conta = filter_input(INPUT_POST, "conta_conta");
    $senha = md5(filter_input(INPUT_POST, "conta_senha"));

    $sql = $pdo->prepare("INSERT INTO conta(conta_titular,conta_agencia,conta_conta,conta_senha,conta_saldo) VALUES(:titular,:agencia,:conta,:senha,0.0)");
    $sql->bindValue(":titular", $titular);
    $sql->bindValue(":agencia",$agencia);
    $sql->bindValue(":conta", $conta);
    $sql->bindValue(":senha", $senha);
    $sql->execute();

    header("Location: login.php");
    exit;
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Cadastrar</h1>
    <form method="POST">
        <label>Titular</label><br>
        <input type="text" name="conta_titular" placeholder="digite o nome..."/><br>
        <label>Agencia</label><br>
        <input type="text" name="conta_agencia" placeholder="digite número da agencia..."/><br>
        <label>Conta</label><br>
        <input type="text" name="conta_conta" placeholder="digite nome da conta..."/><br>
        <label>Senha</label><br>
        <input type="text" name="conta_senha" placeholder="senha***..."/>
        <br>
        <br>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>