<?php

/**
 * Estructura For
 * 
 * Bucle que se encarga de realizar una serie de iteraciones definidas, normalment por un índice, en el cual 
 * se van a realizar un conjunto de instrucciones definidas.
 * 
 */

$numero = 0;

for ($i = 0; $i < 10; $i++) {
    $suma += $numero;
    $numero++;

    echo 'La suma total de la iteracion ' . $i . ' es ' . $numero .'<br>';
}

for ($i = 0; $i < 10; $i++) {
    $cadena .= 'Cadena '. $i;

    echo 'Iteracion '.$i.$cadena.'<br>';
}
