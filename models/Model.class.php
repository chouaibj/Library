<?php

abstract class Model{
    private static $pdo;

    private static function setBdd(){
        try {
            // Utilisation de WampServer (local)
            self::$pdo = new PDO("mysql:host=localhost;dbname=cjh1_biblio;charset=utf8", "root", "");
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erreur de connexion : ' . $e->getMessage());
        }
    }

    protected function getBdd(){
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }
}
