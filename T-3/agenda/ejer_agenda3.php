<?php
include_once 'Contacto.php';
include_once 'Agenda.php';

$agenda = new Agenda();

$agenda->addContacto(new Contacto(1, "juan", "912345678"));
$agenda->addContacto(new Contacto(2, "ramon", "91111111"));
$agenda->addContacto(new Contacto(3, "ana", "9222222222"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
<?php $agenda->mostrarLista() ?>
</p> 
</body>
</html>