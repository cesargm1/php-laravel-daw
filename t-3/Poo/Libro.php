<?php

class Libro
{
    private $autor;
    private $yearPublish;
    private $editorial;
    private $titulo;
    private $numPaginas;

    public function __construct($autor, $yearPublish, $editorial, $titulo, $numPaginas)
    {
        $this->autor = $autor;
        $this->yearPublish = $yearPublish;
        $this->editorial = $editorial;
        $this->titulo = $titulo;
        $this->numPaginas = $numPaginas;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function setYearPublish($yearPublish)
    {
        $this->yearPublish = $yearPublish;
    }

    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setNumPaginas($numPaginas)
    {
        $this->numPaginas = $numPaginas;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function getYearPublish(): int
    {
        return $this->yearPublish;
    }

    public function getEditorial(): string
    {
        return $this->editorial;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getNumPaginas(): int
    {
        return $this->numPaginas;
    }

    public function mostarInfo()
    {
        echo
        "El autor es: $this->autor \n
         el año de publicacion es: $this->yearPublish \n
        la editorial es: $this->editorial \n
        el titulo del libro es: $this->titulo \n
        El numero de paginas del libro es de: $this->numPaginas ";
    }
}
