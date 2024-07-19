<?php

/**
 * Estructura While
 * 
 * Estructura que ejecuta un conjunto de instrucciones secuenciales a partir de que se cumple la condición
 * que se estipula en la clausula while. En caso contrario, este terminará de ejecutarse y por consiguiente, 
 * se saldrá de la ejecución en bucle de este conjunto de instrucciones.
 */


$numero = 0;

while ($numero < 10) {
    //echo $numero . '<br>';
    $numero++;
}

$numero2 = 0;
$suma = 0;

while ($numero2 < 10) {
    $suma += $numero2;

    //echo 'Suma -> ' . $suma . '<br>';

    $numero2++;
}

$booleano = false;
$numero3 = 0;

while (false === $booleano) {
    if ($numero3 > 10 ) {
        $booleano = true;
        echo 'Booleano ya es true';
    } else {
        $numero3++;
        echo 'Valor de Numero3 -> ' . $numero3;
    }
}

echo 'Fin';