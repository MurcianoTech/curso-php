<?php

/**
 * Operadores de Asignación
 */

/**
 * Asignación y Suma
 * 
 * Se realiza la suma de los valores y se le asigna a la primera variable
 */
$suma = 1;
$numero = 1;

$suma += $numero;

var_dump('Suma -> ' . $suma);

/**
 * Asignación y Resta
 * 
 * Se realiza la resta de los valores y se le asigna a la primera variable
 */
$resta = 1;
$numero = 1;

$resta -= $numero;

var_dump('Resta -> ' . $resta);

/**
 * Asignación y Multiplicación
 * 
 * Se realiza la multiplicación de los valores y se le asigna a la primera variable
 */
$multiplicacion = 1;
$numero = 2;

$multiplicacion *= $numero;

var_dump('Multiplicacion -> ' . $multiplicacion);

/**
 * Asignación y División
 * 
 * Se realiza la división de los valores y se le asigna a la primera variable
 */
$divison = 4;
$numero = 2;

$divison /= $numero;

var_dump('Division -> ' .  $divison);

/**
 * Asignación y concatenación
 * 
 * Se realiza la concatenación de los valores y se le asigna a la primera variable
 */
$concatenacion = 'Soy Alex';
$restoConcat = ' . Te estoy enseñando.';

$concatenacion .= $restoConcat;

var_dump('Concatenacion -> ' . $concatenacion);
