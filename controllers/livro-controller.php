<?php 
require_once __DIR__.'./../config.php';

require_once __ROOT__.'/models/Livro.php';

class LivroController {

    public static function listagem() {
        $livros = Livro::getAll();
        require_once __ROOT__.'/views/livros/listagem.php';
    }

    public static function salvar($values) {
        $livro = new Livro($values);
        header('Location: /ms/livraria-v1-php-mvc/views/livros/listagem.php'    );
    }

    public static function novoForm() {
        require_once __ROOT__.'/views/livros/novo.php';
    }
}


?>