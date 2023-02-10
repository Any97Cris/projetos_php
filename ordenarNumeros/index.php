<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h2>Ordenar Números</h2>
    <form method="POST">
        <label>Digite os números</label><br>
        <input type="text" name="numeros">
        <br>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
        <br>
    <hr>
    <br>
    <?php
        $numeros = filter_input(INPUT_POST, 'numeros');

        if(!empty($numeros)){
            
            $array = explode(",",$numeros); 
            sort($array);          
            echo "<pre>";
            print_r($array);

        }
    ?>
</body>
</html>