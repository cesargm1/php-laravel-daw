<?php

use Exception;
use mysqli;


class Connection
{
    const SERVER_NAME = 'localhost';
    const DATABASE = 'login';
    const PORT = 3306;

    public static function conn(): mysqli
    {
        $username = $_ENV['DB_USERNAME'] ?? 'root';
        $pasword = $_ENV['DB_PASSWORD'] ?? 'root';

        $conn = new mysqli(static::SERVER_NAME, $username, $pasword, static::DATABASE, static::PORT);

        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
