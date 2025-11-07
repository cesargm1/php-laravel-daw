<?php
include_once 'Producto.php';
$producto1 = new Producto(12, "juan", 22);

$producto1->setCodigo(13);
$producto1->setCodigo(-2);
$producto1->setCodigo(0);


echo $producto1->mostrarInfo();
