<?php
require_once "Contato.php";
$contato = new Contato();
?>

<h1>Contatos</h1>
<a href="cadastrar.php">Cadastrar Contato</a>
<hr>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php
    $lista = $contato->getAll();
    foreach($lista as $l){    
    ?>
        <tr>
            <td><?php echo $l['nome'] ?></td>
            <td><?php echo $l['email'] ?></td>
            <td>
                <a href="editar.php?id=<?php echo $l['id']?>">[ Editar ]</a>
                <a href="deletar.php?id=<?php echo $l['id'] ?>" onclick="return confirm('Deseja realmente excluir?')">[ Deletar ]</a>
            </td>
        </tr>
    <?php } ?>
</table>