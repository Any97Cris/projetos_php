<?php
session_start();
require_once "database.php";

    $tipo = filter_input(INPUT_POST, 'historico_tipo');
    $valor = str_replace(",",".",filter_input(INPUT_POST, "historico_valor"));
    $valor = floatval($valor);

if(isset($tipo)){    

    $sql = $pdo->prepare("INSERT INTO historico(historico_conta_id, historico_tipo, historico_valor, historico_data_operacao) VALUES (:id,:tipo,:valor,NOW())");
    $sql->bindValue(":id", $_SESSION['banco']);
    $sql->bindValue("tipo", $tipo);
    $sql->bindValue("valor", $valor);
    $sql->execute();

    if($tipo == '0'){
        $sql = $pdo->prepare("UPDATE conta SET conta_saldo = conta_saldo + :valor WHERE conta_id = :id");
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":id", $_SESSION['banco']);
        $sql->execute();
    }else{
        $sql = $pdo->prepare("UPDATE conta SET conta_saldo = conta_saldo - :valor WHERE conta_id = :id");
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":id", $_SESSION['banco']);
        $sql->execute();
    }

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Transação</title>
</head>
<body>
    <h1>Transação</h1>
    <form method="POST">
        <select name="historico_tipo">
            <option value="0">Deposito</option>
            <option value="1">Saque</option>
        </select>
        <br>
        <br>
        <input type="text" name="historico_valor" pattern="[0-9.,]{1,}" placeholder="digite o valor">
        <br>
        <br>
        <br>
        <input type="submit" value="Efetuar Transação">
        <br>
    </form>
</body>
</html>