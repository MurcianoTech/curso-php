<?php

$numero1 = 10;
$numero2 = 10;
$cadena = "10";

/**
 * Igualdad ==
 * 
 * Se realiza la igualdad sin comparar el tipo de lo que contiene la variable
 */

//var_dump($numero1 == $numero2);
//var_dump($numero1 == $cadena);

/**
 * Igualdad estricta ===
 * 
 * Se realiza la comparación, incluyendo el tipo de la variable
 */

//var_dump($numero1 === $numero2);
//var_dump($numero1 === $cadena);

/**
 * Diferencia <> o !=
 * 
 * Se realiza la diferencia sin comparar el tipo de lo que contiene la variable
 */

//var_dump($numero1 <> $numero2);
//var_dump($numero1 != $cadena);


/**
 * Diferencia estricta !==
 * 
 * Se realiza la comparación, incluyendo el tipo de la variable
 */

 $numero3 = 10;
 $cadena = "11";
// var_dump($numero3 !== $cadena);


/**
 * Mayor que >
 * 
 * Compara que una variable sea mayor que otra
 */
$cadena2 = "11";
//var_dump($numero1 > $numero2);
//var_dump($numero1 > $cadena);
//var_dump($numero1 > $cadena2);

/**
 * Menor que <
 * 
 * Compara que una variable sea menor que otra
 */

 $cadena2 = "11";
 //var_dump($numero1 < $numero2);
 //var_dump($numero1 < $cadena);
 //var_dump($numero1 < $cadena2);

/**
 * Mayor o igual que >=
 * 
 * Compara que una variable sea mayor o igual que otra
 */
$cadena2 = "11";
//var_dump($numero1 >= $numero2);
//var_dump($numero1 >= $cadena);
//var_dump($numero1 >= $cadena2);


/**
 * Mayor o igual que >=
 * 
 * Compara que una variable sea menor o igual que otra
 */
$cadena2 = "11";
var_dump($numero1 <= $numero2);
var_dump($numero1 <= $cadena);
var_dump($numero1 <= $cadena2);

