<?php

/**
 * Sentencias Ternarias
 * 
 * Recuerdas de la clase anterior las sentencias IF-ELSE? 
 * Pues en este caso sabemos que para este tipo de sentencias podemos
 * incluir todas las líneas de código que queramos.
 * 
 * Sin embargo, estas sentencias ternarias se traducen como sentencias IF-ELSE con la
 * condición de que solo se va a ejecutar una línea de código o una llamada a función que realice
 * ciertas acciones.
 * 
 * En definitiva, estas sentencias sirven para ejecutar una única instrucción aunque nos puede llevar
 * a bloques de código denominados como funciones por ejemplo para ejecutar diversas instrucciones 
 * adicionales. Esto lo veremos en detalle en lecciones sucesivas.
 */

$cadena = 'cadena';

// IF-ELSE
/*if ($cadena === 'cadena') {
    $cadena = 'Tiene mismo valor';
} else {
    $cadena = 'No tiene mismo valor';
}*/

// Ternaria
$cadena = ($cadena === 'cadena')
    ? 'Tiene mismo valor'
    : 'No tiene mismo valor';

print($cadena);