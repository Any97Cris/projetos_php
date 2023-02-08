<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h3>Qual o seu nome?</h3>
    <form method="POST">
        <input type="text" name="nome">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php

        $nome = filter_input(INPUT_POST, 'nome');
        if($nome != ""){
            echo "<h3>Oi, ".$nome."</h3>";
        }

    ?>
</body>
</html>