<?php 

require_once 'model/Livro.php';

class LivroController {

    public function index() {
        $livro = new Livro("Paternidade Bem Resolvida", "Fabiano Ribeiro", "Inspire", "2012");

        require_once('views/livro_view.php');
    }
}


?>