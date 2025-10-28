<?php
class PContacto extends Contacto {
    private  string $direccion;
    private string $ciudad;
    private string $provincia;

    public function __construct(int $idRegistro, string $nombre, string $telefono, string $direccion, string $ciudad, string $provincia)
    {
        parent::__construct( $idRegistro,  $nombre,  $telefono);
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
        $this->provincia = $provincia;
    }

    public function setCorreo (string $direccion) :void {
      $this->direccion = $direccion;
    }

    public function setUrl (string $ciudad) :void {
        $this->ciudad = $ciudad;
      }

      public function setProvincia (string $provincia) :void {
        $this->provincia = $provincia;
      }

      public function getDireccion (): string {
        return $this->direccion;
      }

      public function getCiudad (): string {
        return $this->ciudad;
      }

      public function getProvincia (): string {
        return $this->provincia;
      }

      public function __toString(): string
      {
        return  parent::__toString() . "$this->direccion  $this->ciudad $this->provincia";
      }
}