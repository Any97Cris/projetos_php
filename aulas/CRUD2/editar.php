<?php
require_once "Contato.php";

$contato = new Contato();

$id = $_GET['id'];

if(!empty($id)){
    $info = $contato->getInfo($id);

    if(empty($info['email'])){
        header("Location: index.php");
        exit;
    }

}else{
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dados</title>
</head>
<body>
    <h1>Editar Usuário</h1>
    <form action="editar_submit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $info['id'];?>">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $info['nome']; ?>">
        <br>
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $info['email']; ?>">
        <br>
        <br>
        <br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>