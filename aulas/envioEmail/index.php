<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    $mensagem = filter_input(INPUT_POST, 'mensagem');

    $para = "criscianysilva1997@gmail.com";
    $assunto = "Pergunta do Contato";
    $corpo = "Nome: {$nome} - Email: {$email} - Mensagem: {$mensagem}";
    $cabecalho = "From: criscianysouza@1997@gmail.com"."\r\n".
                 "Reply-To: ".$email."\r\n".
                 "X-Miler: PHP/".phpversion();

    mail($para, $assunto, $corpo, $cabecalho);

    echo "<h2>Email enviado com sucesso!";
    exit;

}
?>

<html>
    <head>
        <title>Envio Email</title>
    </head>
    <body>
    <h2>Envio de Email</h2>
        <form method="POST">
            <label>Nome:</label><br>
            <input type="text" name="nome"><br>
            <label>E-mail:</label><br>
            <input type="email" name="email"><br>
            <label>Mensagem:</label><br>
            <textarea name="mensagem" cols="30" rows="10"></textarea>
            <br>
            <br>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>