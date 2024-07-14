<?php

/**
 * Sentencias Condicionales IF
 * 
 * Estas sentencias sirven para definir una condición en nuestro código 
 * a partir de una expresión (Condición vista en las clase de operadores) que se evaluará 
 * si es correcta o no.
 * 
 * Esto es para ejecutar una parte del código de forma específica que solo se ejecutará 
 * en caso de que está condición sea correcta.
 */

/**
 * Sentencia IF
 */

$cadena = 'Cadena';
$cadenaNombre = 'Nombre';

/*if ($cadena != $cadenaNombre) {
    print('Es correcta la condición');
}

if ($cadena != $cadenaNombre && is_string($cadenaNombre)) {
    print('Se cumple la segunda condición');
}*/

/**
 * Sentencia IF-ELSE
 */

$numero = 1;
$numero2 = 2;

/*if ($numero > $numero2) {
    print('Numero2 es mayor que numero');
} else {
    $numero = 3;
    print('El nuevo valor de $numero al ser menor que número 2 es ' . $numero);
}*/


/**
 * Sentencia IF-ELSEIF-ELSE
 */


$numero = 1;
$numero2 = 2;

/*if ($numero === $numero2) {
    print('Se cumple la primera condición');
} else if ($numero < $numero2) {
    print('Se cumple la segunda condición');
} else {
    print('No se ha cumplido ninguna');
}*/

/**
 * IF's Anidados
 */

if ($numero < $numero2) {
    $numero = $numero2;

    if ($numero === $numero2) {
        print('Numero y numero2 tienen ahora el mismo valor');
    }
} else {
    print('No cumple ninguna condición');
}