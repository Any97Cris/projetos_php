<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h2>Inverter String</h2>
    <form method="POST">
    <label>Digitar Frase/Palavra</label><br>
    <input type="text" name="letra">
    <br>
    <br>
    <br>
    <input type="submit" value="Misturar">
    </form>
    <br>
    <hr>
    <?php
    $letra = filter_input(INPUT_POST, 'letra');

    if(!empty($letra)){
        $misturar = str_shuffle($letra);
        echo $misturar;
    }
 

?>
</body>
</html>