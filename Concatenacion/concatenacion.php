<?php

/**
 * Recordad que estos son ejemplos y que podéis aplicar vuestro ejemplos para ver mayores casos.
 * Si necesitáis cualquier cosa con gusto os contestaré lo que necesitéis :D
 * 
 */

$cadena1 = "Hola Mundo";
$cadena2 = "COmo estas?";

// Concatenacion sencilla
echo $cadena1 . $cadena2;

//Concatenación con variable

$nombre = "Alex";

echo "Tu nombre es " . $nombre;

// Concatenación con variable dentro de cadena

$pais = "Spain";

echo "Tu es nombre es " . $nombre . " del pais $pais";
echo 'Tu es nombre es ' . $nombre . ' del pais $pais';

$verdadero = true;

echo "Boolean " . $verdadero; 

// Concatenación de arrays para mostrar con echo

$arrays = [1,2,3];

echo "Array -> " . json_encode($arrays);