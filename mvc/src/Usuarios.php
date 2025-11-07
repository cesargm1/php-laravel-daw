<?php


include_once 'Connection.php';

class Usuarios
{
    public static function insert($user, $password): int
    {
        $conn = Connection::conn();
        $query = "INSERT INTO usuarios (nombre, pass) VALUES(?,?)";
        $prepare = $conn->prepare($query);
        $passwordHash = sha1($password);
        $prepare->bind_param("ss", $user, $passwordHash);
        $prepare->execute();
        return $prepare->insert_id;
    }
}
