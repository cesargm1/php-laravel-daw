<?php
class Econtacto extends Contacto {
    private string $correo;
    private string $url;

    public function __construct(int $idRegistro, string $nombre, string $telefono, string $correo, string $url)
    {
        parent::__construct( $idRegistro,  $nombre,  $telefono);
        $this->correo = $correo;
        $this->url = $url;
    }

    public function setCorreo (string $correo) :void {
      $this->correo = $correo;
    }

    public function setUrl (string $url) :void {
        $this->url = $url;
      }

      public function getCorreo (): string {
        return $this->correo;
      }

      public function geturl (): string {
        return $this->url;
      }

      public function __toString(): string
      {
        return  parent::__toString() . $this->correo . $this->url;
      }
  }
