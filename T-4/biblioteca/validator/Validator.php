<?php
include_once 'ValidatorException.php';
class Validator
{
    private $value;
    private $field;

    public function __construct(string $value = '', string $field = '')
    {
        $this->value = $value;
        $this->field = $field;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setField($field)
    {
        $this->field = $field;
    }

    public function getField()
    {
        return $this->field;
    }

    public function require(): self
    {
        if (empty($this->value)) {
            throw new ValidatorException("El campo {$this->field} es requerido");
        }
        return $this;
    }

    public function validateField(): self
    {
        if (empty($this->value)) {
            throw new ValidatorException("El campo {$this->field} está vacío");
        }
        return $this;
    }

    public  function validatePages (): self 
    {
    if ($this->value <= 0) {
        throw new ValidatorException("Pon un numero de {$this->field} mayor a 0");
    }
    return $this;
}
}
