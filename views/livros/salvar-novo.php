<?php

require_once './../../controllers/livro-controller.php';


if(!empty($_POST)) {
    LivroController::salvar(Array($_POST['nome'], $_POST['autor'], $_POST['editora'], $_POST['ano']));
}
?>