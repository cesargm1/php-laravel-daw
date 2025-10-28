<?php
include_once 'Contacto.php';
include_once 'Agenda.php';

$agenda = new Agenda();

$agenda->addContacto(new Contacto(1, "juan", "912345678"));
$agenda->addContacto(new Contacto(2, "ramon", "91111111"));
$agenda->addContacto(new Contacto(3, "ana", "9222222222"));
