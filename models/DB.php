<?php 

require_once __DIR__.'./../config.php';

abstract class DB {

    public static function getDB() {

        static $db = null;

        if($db === null) {
            
            $dsn = "mysql:host=" . Config::DB_HOST . ";dbname=" . Config::DB_NAME . ";charset=utf8";
            $db = new PDO($dsn, Config::DB_USER, Config::DB_PASS);

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $db;
    }
}

?>