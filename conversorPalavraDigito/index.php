<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice</title>
</head>
<body>
    <h3>Conversor Palavra em Dígito</h3>
    <form method="POST">
        <input type="text" name="palavras">
        <input type="submit" value="Enviar">
        <br>
        <br>
        <hr>
    </form>
    <?php
        $palavras = filter_input(INPUT_POST, 'palavras');
        
        $p = Array();
        $p = Array($palavras);
        
        foreach($p as $pa){
            switch(){
                case 'um':
                echo 1;
                break;
            }
        }
    ?>
</body>
</html>