<?php

/**
 * Switch-Case
 * 
 * Sentencia Switch-Case se trata de una estructura condicional la cual evalua una condición
 * y da varias alternativas para ejecutar una serie de línea de código por cada resultado, es decir,
 * establecemos una condición que va a ser evaluada y que puede dar distintos resultados y que se tratará
 * con esta sentencia únicamente.
 */

$numero = 4;

switch ($numero) {
    case 0:
        print('Valor numero = ' . $numero .'');
        break;
    case 1:
        print('Valor numero = ' . $numero .'');
        break;
    case 2:
        print('Valor numero = ' . $numero .'');
        break;
    default:
        print(''. $numero .'');
        break;
}

$cadena = 'cadna';

switch (strlen($cadena)) {
    case 0:
        print('Cadena Vacia');
        break;
    case 6:
        print(''. $cadena .'');
        break;
    default:
        print('Sin hacer nada');
        break;
}