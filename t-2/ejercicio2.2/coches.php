<?php


$coches = [
    "111BCD" => ["Ford", "Focus", 5],
    "222XYZ" => ["Toyota", "Corolla", 4],
    "333LMN" => ["Seat", "Ibiza", 3],
    "444GHJ" => ["Subaru", "Impreza", 5],
    "255JKL" => ["Volkswagen", "Golf", 5]
];

ksort($coches);

foreach ($coches as $key => $value) {
     echo "$key = " . implode(", ", $value);
}