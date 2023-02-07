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
    <p>Saldo: <?php echo $info['conta_saldo'] ?></p>
    <a href="logout.php">sair</a>
    <hr>
    <h3>Movimentações/Extrato</h3>
    <a href="addCache.php">Adicionar Transação</a>
    <br>
    <br>
    <table border="1" width="400">
        <tr>
            <th>Data</th>
            <th>Valor</th>
        </tr>
        <?php 
            $sql = $pdo->prepare("SELECT * FROM historico WHERE historico_conta_id = :id ");
            $sql->bindValue(":id",$id);
            $sql->execute();
            foreach($sql->fetchAll() as $itens){            
        ?>
        <tr>
            <td><?php echo date('d/m/Y H:i', strtotime($itens['historico_data_operacao'])) ?></td>
            <td>
                <?php if($itens['historico_tipo'] == '0'){ ?>
                    <span style="color:green;"><?php echo $itens['historico_valor'] ?></span>
                <?php }else{?>
                    <span style="color:red;"><?php echo $itens['historico_valor'] ?></span>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>