CREATE DATABASE dblibros;

USE dblibros;

CREATE TABLE libros (
    id int (100) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(100) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    paginas int(100) NOT NULL
);