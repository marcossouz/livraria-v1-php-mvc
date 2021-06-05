<?php
require_once __DIR__.'./../config.php';

require_once __ROOT__.'/models/DB.php';

class Livro {
    private $nome;
    private $autor;
    private $editora;
    private $ano;

    public function __construct($values)
    {
        $this->nome = $values[0];
        $this->autor = $values[1];
        $this->editora = $values[2];
        $this->ano = $values[3];

        $db = DB::getDB();
        $sql = 'INSERT INTO livros (nome, autor, editora, ano) VALUES (?, ?, ?, ?)';
        $db->prepare($sql)->execute(array($this->nome, $this->autor, $this->editora, $this->ano));
    }
    public static function getAll() {
        $db = DB::getDB();
        $sql = 'SELECT * FROM livros';
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

}

?>