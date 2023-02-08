<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Humano</title>
</head>
<body>
    <h2>Verificador de Humano</h2>
    <form method="POST" action="verificar.php">        
        <?php
        $num = rand(5, 15);
        $ndois = rand(5, 15);
        echo $num." + ".$ndois;
        $soma = $num+$ndois;
        ?>
        <input type="hidden" name="num" value="<?php echo $num?>">
        <input type="hidden" name="ndois" value="<?php echo $ndois?>">
        <input type="number" name="resultado"/>
        <input type="submit" value="Verificar">
    </form>
</body>
</html>