<?php

class Usuarios {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

   public function __construct($i = ''){
        try{
            $this->pdo = new PDO("mysql:dbname=blog;hosy=127.0.0.1","root","");
           }catch(PDOException $e){
                echo "Erro: {$e->getMessage()}";
            }

        if(!empty($i)){          

            $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
            $sql->execute(array($i));

            if($sql->rowCount() > 0){
                $data = $sql->fetch();
                $this->id = $data['id'];
                $this->nome = $data['nome'];
                $this->email = $data['email'];
                $this->senha = $data['senha'];
            }
        }
    }


    public function getId(){
        return $this->id;
    }

    public function setNome($n){
        $this->nome = $n;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setEmail($e){
        $this->email = $e;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setSenha($s){
        $this->senha = md5($s);
    }

    public function getSenha(){
        return $this->senha;
    }

    public function salvar(){
        if(!empty($this->id)){
            $sql = $this->pdo->prepare("UPDATE usuarios SET 
                nome = ?, 
                email = ?, 
                senha = ? 
                WHERE id = ?");
            $sql->execute(array(
                $this->nome, 
                $this->email, 
                $this->senha, 
                $this->id));
        }else{
            $sql = $this->pdo->prepare("INSERT INTO usuarios SET 
                nome = ?, 
                email = ?, 
                senha = ? ");
            $sql->execute(array(
                $this->nome, 
                $this->email, 
                $this->senha));
        }
    }

    public function delete(){
        $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        $sql->execute(array($this->id));
    }

} 

?>