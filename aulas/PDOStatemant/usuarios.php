<?php

class Usuarios {
    private $pdo;

    public function __construct(){
        try{
            $this->pdo = new PDO("mysql:dbname=blog;host=127.0.0.1","root","");
        }catch(PDOException $e){
            echo "Falha: {$e->getMessage()}";
        }
        
    }

    public function selecionar($id){

        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        $array = array();
        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function inserir($nome, $email, $senha){
        $sql = $this->pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha");
        $sql->bindParam("nome", $nome);
        $sql->bindParam(":email", $email);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();
    }

    public function atualizar($nome, $email, $senha, $id){
        $sql = $this->pdo->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?");
        $sql->execute(array($nome, $email, md5($senha), $id));
    }

    public function excluir($id){
        $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        $sql->bindValue(1, $id);
        $sql->execute();
    }

}

?>