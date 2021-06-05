<?php 
require_once __DIR__.'./../../config.php';

require_once __ROOT__.'/controllers/livro-controller.php';
    $livros = Livro::getAll();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/ms/livraria-v1-php-mvc/views/livros/novo.php"> Novo</a>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Autor</th>
            <th>Editora</th>
            <th>Ano</th>
            <th colspan="2"></th>
        </tr>
        <?php foreach($livros as $livro): ?>
        <tr>
            <td><?php echo $livro['nome'] ?></td>
            <td><?php echo $livro['autor'] ?></td>
            <td><?php echo $livro['editora'] ?></td>
            <td><?php echo $livro['ano'] ?></td>
            <td><a href="/ms/livraria-v1-php-mvc/views/livros/detalhes.php?id=<?php echo $livro['id'] ?>"> Detalhes</a></td>
            <td><a href="<?php echo $livro['id'] ?>"> Excluir</a></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>