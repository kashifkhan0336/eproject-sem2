<?php

class Database{

    private static $connection;
    public static function getConnection(): PDO
    {
        if(empty(self::$connection)){
            try {
                self::$connection = new PDO('mysql:dbname=asd;host=localhost;charset=utf8mb4', 'root', '');
            }catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$connection;
    }
}

