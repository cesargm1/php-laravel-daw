<?php
include_once 'Contacto.php';
include_once 'Agenda.php';

$agenda = new Agenda();

$agenda->addContacto(new Contacto(1, "juan", "912345678"));
$agenda->addContacto(new Contacto(2, "ramon", "91111111"));
$agenda->addContacto(new Contacto(3, "ana", "9222222222"));

$agenda2 = clone $agenda;

$agenda2->deleteContacto(1);
$agenda2->findContacto(2)->setNombre("lucas");
echo "AGENDA<br>";
echo $agenda;

echo "AGENDA2<br>";
echo $agenda2;
