<?php

namespace App\Core;

use App\Core\Core;
use PDO;

//use App\Core\Core;

class DB
{
    private static $statement;
    private static $params;
    private static $conn;

    public static function getConnection(): ?PDO
    {
        $default = Core::get('config')['default'];
        $host = Core::get('config')['connections'][$default]['host'];
        $db_name = Core::get('config')['connections'][$default]['database'];
        $username = Core::get('config')['connections'][$default]['username'];
        $password = Core::get('config')['connections'][$default]['password'];
        $conn = null;

        try {
            $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("set names utf8");
        } catch (\PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }

        self::$conn = $conn;
        return $conn;
    }

    public static function query($sql, $data = null): static
    {
        $db = self::getConnection();
        $stmt = $db->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
        self::$statement = $stmt;
        return new static();
    }

    public static function run()
    {
        try {
            self::$statement->execute();
            $result = self::$statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

}