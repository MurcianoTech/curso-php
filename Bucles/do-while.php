<?php

/**
 * Estructura Do-While
 * 
 * Estructura que ejecuta un conjunto de instrucciones secuenciales a partir de que se cumple la condición
 * que se estipula en la clausula while. 
 * 
 * Hay que resaltar que primero se ejecuta ese conjunto de instrucciones y luego, se comprueba que se cumpla 
 * la condición dada en la clausula while
 */

$numero = 0;

do {
    $numero++;
    echo 'El valor del numero '. $numero .'<br>';
} while ($numero < 10);

$booleano = false;

do {
    if ($numero > 10) {
        echo 'El valor del numero en numero > 10 '. $numero .'<br>';
        $booleano = true;
        echo 'Booleano es true';
    } else {
        echo 'El valor del numero '. $numero .'<br>';
        $numero++;
    }
} while ($booleano === false);