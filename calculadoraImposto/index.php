<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Imposto</title>
</head>
<body>
    <h2>Calculadora de Imposto</h2>
    <form method="POST">
        <label>Valor do Produto:</label><br>
        <input type="number" name="valor"/>
        <br>
        <br>
        <label>Taxa de imposto(em %):</label><br>
        <input type="number" name="taxa"/>
        <br>
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    
    $valor = filter_input(INPUT_POST, 'valor');
    $taxa = filter_input(INPUT_POST, 'taxa');
    $calc = $taxa * $valor;
    $resultado = $calc / 100;
    $sub = $valor - $resultado;

    if($valor != "" && $taxa != ""){
        echo "<p>Valor Produto: R$".$valor."</p>";
        echo "<p>Taxa de Imposto: ".$taxa."%</p>";
        echo "<hr>";
        echo "<p>Imposto: ".$resultado."</p>";
        echo "<p>Produto: ".$sub."</p>";
    }
    
    ?>
</body>
</html>