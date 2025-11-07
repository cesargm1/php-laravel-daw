<?php

include_once 'Veiculo.php';


$veiculo1 = new Veiculo("Toyota", "modelo guay");
$veiculo2 = new Veiculo("Toyota2", "modelo guay2");

$veiculo1->mostarInfo();
$veiculo2->mostarInfo();
