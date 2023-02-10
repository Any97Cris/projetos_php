<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h2>Substituidor</h2>
    <form method="POST">
        <label>Frase:</label><br>
        <input type="text" name="frase"><br>
        <label>Procurar por:</label><br>
        <input type="text" name="procurar"><br>
        <label>Trocar por:</label><br>
        <input type="text" name="trocar">
        <br>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    
    $frase = filter_input(INPUT_POST, 'frase');
    $procurar = filter_input(INPUT_POST, 'procurar');
    $trocar = filter_input(INPUT_POST, 'trocar');

    if(!empty($frase) && !empty($procurar) && !empty($trocar)){
        $novaFrase = str_replace($procurar,$trocar,$frase);
        echo "<h3>".$novaFrase."<h3>";
    }
    
    
    ?>
</body>
</html>