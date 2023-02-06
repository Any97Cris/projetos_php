<?php

session_start();

require_once "database.php";

if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false){
    $id = $_SESSION['banco'];

    $sql = $pdo->prepare("SELECT * FROM conta WHERE conta_id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $info = $sql->fetch();
    }else{
        header("Location: login.php");
        exit;
    }

}else{
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
    <title>Caixa Eletrônico</title>
</head>
<body>
    <h1>Banco XYZ</h1>
    <p>Agência: <?php echo $info['conta_agencia'] ?></p>
    <p>Conta: <?php echo $info['conta_conta'] ?></p>
    <a href="logout.php">sair</a>
</body>
</html>