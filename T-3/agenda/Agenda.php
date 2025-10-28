<?php
include_once 'Contacto.php';
class Agenda
{
    private array $contactos = [];

    public function addContacto(Contacto $contacto): void
    {
        array_push($this->contactos, $contacto);
    }

    public function deleteContacto(int $id)
    {
        foreach ($this->contactos as $key => $contacto) {
            if ($contacto->getIdRegistro() == $id) {
                unset($this->contactos[$key]);
            }
        }
    }

    public function findContacto(int $id): ?Contacto
    {
        foreach ($this->contactos as $key => $contacto) {
            if ($contacto->getIdRegistro() == $id) {
                return $this->contactos[$key];
            }
        }

        return null;
    }

    public function __clone()
    {
        foreach ($this->contactos as  $key => $contacto) {
            $this->contactos[$key] = clone $this->contactos[$key];
        }
    }

    public function __toString()
    {
        $result = '';
        foreach ($this->contactos as $contacto) {
            $result .= $contacto . "<br>" . PHP_EOL;
        }
        return $result;
    }
}
