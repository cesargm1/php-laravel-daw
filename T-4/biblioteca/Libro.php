<?php

include_once './conexion/Connection.php';

class Libro {
public static function addBook ( string $titulo, string $autor, int $paginas ) : bool {
    $conn = Connection::conn();
    $query = "INSERT INTO libros (titulo, autor, paginas) VALUES (?, ?, ?) ";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssi', $titulo, $autor, $paginas);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}

 public static function getAll () : array  {
    $conn = Connection::conn();
    $query = "SELECT * FROM libros";
    $result = $conn->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);

 } 

}