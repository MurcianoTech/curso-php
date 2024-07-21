<?php

$modelosPortatiles = [
    'Acer' => [
        'Acer1',
        'Acer2',
        'Acer3',
    ],
    'HP' => [
        'HP1',
        'HP2',
        'HP3',
    ],
    'Asus' => [
        'Asus1',
        'Asus2',
        'Asus3',
    ]
];

/**
 * Condición Break
 * 
 * Esta instrucción nos indica que podemos parar la ejecución del bucle o ciclo siempre y 
 * cuando se cumpla cierta condición que pongamos o directamente cortarlo si lo ponemos en claro en el código.
 */

foreach ($modelosPortatiles as $marca => $modelos) {
    /*if ($marca === 'HP') {
        break;
    }*/

    echo $marca . '<br>';

    foreach ($modelos as $modelo) {
        if ($modelo === 'Asus2') {
            break;
        }

        echo $modelo .'<br>';
    }
}


/**
 * Condición Continue
 * 
 * Esta instrucción nos indica que podemos continuar la ejecución del bucle o ciclo siempre
 * y cuando se cumpla cierta condición que pongamos o directamente continuarlo si lo ponemos en claro en el código.
 */

$booleanos = [
    false,
    false,
    true,
    false,
    false,
];

foreach ($booleanos as $booleano) {

    if ($booleano === true) {
        continue;
    }

    echo 'Es ' . (int) $booleano .'<br>';
}