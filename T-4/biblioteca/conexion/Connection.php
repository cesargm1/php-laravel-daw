<?php

class Connection
{
    const SERVER_NAME = 'localhost';
    const DATABASE = 'dblibros';
    const PORT = 3306;

    public static function conn(): mysqli
    {
        $username =  'root';
        $password =  '';

        $conn = new mysqli(static::SERVER_NAME, $username, $password, static::DATABASE, static::PORT);

        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}