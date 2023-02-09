<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h2>Tabuada</h2>
    <table border="1">
    <?php 
    for($x=1;$x<=9;$x++){ 
        echo "<tr>";
        for($y=1;$y<=9;$y++){
            echo "<td>".($x*$y)."</td>";
        }
        echo "</tr>";    
    }    
    ?>
    </table>    
</body>
</html>