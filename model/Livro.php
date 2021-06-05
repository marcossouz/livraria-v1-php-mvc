<?php


class Livro {

    private $nome;
    private $autor;
    private $editora;
    private $ano;


    public function __construct($nome, $autor, $editora, $ano)
    {
        $this->nome = $nome;
        $this->autor = $autor;
        $this->editora = $editora;
        $this->ano = $ano;
    }

    public function getNome() {

        return $this->nome;
    }

    public function getAutor() {

        return $this->autor;
    }

    public function getEditora() {

        return $this->editora;
    }

    public function getAno() {

        return $this->ano;
    }
}


?>