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
        if(!empty($palavras)){
            $p = explode(",",$palavras);

            $numeros = array();
            
            foreach($p as $ps){
                switch($ps){
                    case 'um':
                        $numeros[] = 1;
                        break;
                    case 'dois':
                        $numeros[] = 2;
                        break;
                    case 'tres':
                        $numeros[] = 3;
                        break;
                    case 'quatro':
                        $numeros[] = 4;
                        break;
                    case 'cinco':
                        $numeros[] = 5;
                        break;
                    case 'seis':
                        $numeros[] = 6;
                        break;
                    case 'sete':
                        $numeros[] = 7;
                        break;
                    case 'oito':
                        $numeros[] = 8;
                        break;
                    case 'nove':
                        $numeros[] = 9;
                        break;
                    
                }
            }
            echo "<p>".implode(",", $numeros)."</p>";
        }

    ?>
</body>
</html>