<?php
include_once  'Agenda.php';
include_once 'Econtacto.php';
include_once 'PContacto.php';

$agenda = new Agenda();

$agenda->addContacto(new Econtacto(1, "Laura", "600111222", "laura@mail.com", "www.laura.com"));
$agenda->addContacto(new Econtacto(2, "Carlos", "600333444", "carlos@mail.com", "www.carlos.com"));
$agenda->addContacto(new Econtacto(3, "Sofía", "600555666", "sofia@mail.com", "www.sofia.com"));

$agenda->addContacto(new PContacto(4, "Miguel", "611111222", "Calle Luna 5", "Barcelona", "Cataluña"));
$agenda->addContacto(new PContacto(5, "Elena", "622222333", "Avenida Sol 12", "Sevilla", "Andalucía"));
$agenda->addContacto(new PContacto(6, "Diego", "633333444", "Plaza Estrella 8", "Valencia", "Comunidad Valenciana"));


$contactos = $agenda->getContactos();

foreach ($contactos as $contacto) {
    echo " $contacto <br>";
}
    
?>