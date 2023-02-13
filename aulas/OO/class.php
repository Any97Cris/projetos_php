<?php

class Post {
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    private $qtComentarios;

    // public function __construct($titulo, $corpo){
    //     $this->setTitulo($titulo);
    //     $this->setCorpo($corpo);
    // }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function setCorpo($corpo){
        $this->corpo = $corpo;
    }

    public function addComentario($msg){
        $this->comentarios[] = $msg;
        $this->contarComentarios();
    }

    public function getQuantosComentarios(){
        return $this->qtComentarios;
    }

    private function contarComentarios(){
        $this->qtComentarios = count($this->comentarios);
    }
}

$post = new Post();
$post->addComentario("c1");
$post->addComentario("c2");
$post->addComentario("c3");
$post->addComentario("c4");
$post->addComentario("c5");

echo "Quantidade: ".$post->getQuantosComentarios();

?>