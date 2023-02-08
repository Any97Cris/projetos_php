<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calc</title>
</head>
<body>
    <h3>Calculadora em <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="40px" heigth="40px"/></h3>
    <form method="POST" action="calc.php">
        <input type="number" name="numUm" placeholder="Digite um número"/>
        
        <select name="operacao">
            <option value="0">+</option>
            <option value="1">-</option>
            <option value="2">*</option>
            <option value="3">/</option>
        </select>
        <input type="number" name="numDois" placeholder="Digite um número"/>
        <input type="submit" value="Calcular">
    </form>
          
</body>
</html>