<?php

$numero1 = 10;
$numero2 = 10;
$numero3 = 11;

/**
 * Operador AND -> &&
 * 
 * Operador lógica que compará dos condiciones y comprueba si es V o F
 */

// TRUE && TRUE -> TRUE

var_dump($numero1 == $numero2 && $numero3 > $numero1);

// FALSE && TRUE o TRUE && FALSE -> FALSE

var_dump($numero1 < $numero2 && $numero3 > $numero1);
var_dump($numero1 == $numero2 && $numero3 < $numero1);

// FALSE && FALSE -> FALSE
var_dump($numero1 != $numero2 && $numero3 == $numero1);

/**
 * Operador OR -> ||
 * 
 * Operador lógica que compará dos condiciones y comprueba si es V o F
 */

// TRUE || TRUE -> TRUE
var_dump($numero1 == $numero2 || $numero3 > $numero1);

// FALSE || TRUE o TRUE || FALSE -> TRUE
var_dump($numero1 < $numero2 || $numero3 > $numero1);
var_dump($numero1 == $numero2 || $numero3 < $numero1);

// FALSE || FALSE -> FALSE
var_dump($numero1 != $numero2 || $numero3 == $numero1);