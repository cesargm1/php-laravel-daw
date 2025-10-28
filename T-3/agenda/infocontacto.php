<?php
include_once 'Agenda.php';
include_once 'Contacto.php';
$agenda = new Agenda();

$agenda->addContacto(new Contacto(1, "juan", "912345678"));
$agenda->addContacto(new Contacto(2, "ramon", "91111111"));
$agenda->addContacto(new Contacto(3, "ana", "9222222222"));

$id = intval($_GET['id']  ?? '') + 1 ;

$contactos = $agenda->getContactos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
   
     <?php foreach ($contactos as $contacto) {
        if($contacto->getIdRegistro() == $id)
         echo $contacto;
     } ?>
</body>
</html>