<?php 

// Recordatorio -> Los arrays no empiezan en la posición 1 SINO en la posición 0

/**
 * Recordad que estos son ejemplos sencillos y que debéis de practicar vosotros haciendo distintas pruebas.
 * En caso de tener algunda duda, con mucho gusto responderé a todo lo que necesites :D
 */

// Tipo 1 -> Arrays Escalar

//$numeros = array(1,2,3);
$numeros = [
    1,
    2,
    3
];

var_dump($numeros);
var_dump($numeros[0]);

// Tipo 2 -> Arrays Clave-Valor

$numeros = [
    'primero' => 1,
    'segundo' => 2,
    'tercero' => 3
];

var_dump($numeros);
var_dump($numeros['segundo']);

// Tipo 3 -> Arrays Multidimensionales

/*$numeros = [
    [
        'primero' => 1,
        'segundo' => 2,
        'tercero' => 3
    ],
    [
        1,
        2,
        3
    ]
];

var_dump($numeros);
var_dump($numeros[0]);
var_dump($numeros[1]);*/

$numeros = [
    'primera' => [
        'primero' => 1,
        'segundo' => 2,
        'tercero' => 3
    ],
    'segunda' => [
        1,
        2,
        3
    ]
];

var_dump($numeros);
var_dump($numeros['primera']);
var_dump($numeros['segunda']);

var_dump(count($numeros));
var_dump(count($numeros, COUNT_RECURSIVE));
var_dump(count($numeros['primera']));