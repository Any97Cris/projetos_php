<?php

$num = filter_input(INPUT_POST, 'numUm');
$ndois = filter_input(INPUT_POST, 'numDois');
$operacao = filter_input(INPUT_POST, 'operacao');

if($num != "" && $ndois != "" ){
    if($operacao == '0'){
    $soma = $num + $ndois;
    echo $num." + ".$ndois." = ".$soma;
    }else if($operacao == '1'){
        $subtracao = $num - $ndois;
        echo $num." - ".$ndois." = ".$subtracao;
    }else if($operacao == '2'){
        $mult = $num * $ndois;
        echo $num." * ".$ndois." = ".$mult;
    }else if($operacao == '3'){
        $div = $num/$ndois;
        echo $num." / ".$ndois." = ".$div;
    }else{
        header("Location: index.php");
        exit;
    }
}else{
    header("Location: index.php");
    exit;
}
?>
<br>
<br>
<a href="index.php">Realizar outra operação</a>