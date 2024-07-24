<?php

/**
 * Funciones
 * 
 * Las funciones son estructuras que contienen partes de código que serán 
 * utilizadas en varias partes de nuestro código, facilitando la reutilización del
 * código y no estar escribiendo el mismo código en las diferentes partes que hagan falta en nuestro proyecto.
 * Digamos que tiene una única responsabilidad por cada función como serialización de clases, cálculos 
 * repetitivos, comprobaciones de variables, etc.
 */

function sumar(int $numero1, int $numero2): int 
{
    return $numero1 + $numero2;
}

function multiplicacion(int $numero1, int $numero2): int
{
    return $numero1 * $numero2;
}

$numero = 10;
$numero2 = 13;

$suma = sumar($numero, $numero2);
$multiplicacion = multiplicacion($numero, $numero2);

$operacionRestante = multiplicacion($suma, $multiplicacion);

echo 'Suma -> ' . $suma . '<br>';
echo 'Multiplicación -> ' . $multiplicacion . '<br>';
echo 'Operacion Conjunta -> ' . $operacionRestante . '<br>';
