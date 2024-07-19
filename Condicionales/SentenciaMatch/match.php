<?php

/**
 * Match
 * 
 * Sentencia Match se trata de una estructura condicional la cual evalua una condición
 * y da varias alternativas para ejecutar una serie de línea de código por cada resultado, es decir,
 * establecemos una condición que va a ser evaluada y que puede dar distintos resultados y que se tratará
 * con esta sentencia únicamente.
 * 
 * Lo mismo que switch-case, pero con una mejora de eficiencia y mejor compresión lectora del código
 * 
 */

$edad = 18;

$resultado = match(true) {
    $edad == 0 => 'Eres mayor desde que naciste',
    $edad >= 10 && $edad < 18 => 'Eres casi un adolescente',
    $edad >= 18 => 'Dejaste de ser niño'
};

var_dump($resultado);
