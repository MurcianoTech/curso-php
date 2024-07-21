<?php

/**
 * Estructura Foreach
 * 
 * Esta estructura es parecida al For con la ventaja de que podemos recorrer objetos o arrays y conseguir
 * tanto su valor como su clave sin tener que hacer uso de los índices que
 * nos indicaban en el bucle For.
 */

$frutas = [
    'Manzana',
    'Pera',
    'Fresa',
    'Cereza',
];

/*for ($i = 0; $i < count($frutas); $i++) {
    echo $i . '-> ' . $frutas[$i] . '<br>';
}*/

/*foreach ($frutas as $clave => $fruta) {
    echo $clave . '-> ' . $fruta . '<br>';
}*/

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

foreach ($modelosPortatiles as $clave => $modelos) {
    echo 'Marca Portatil ' . $clave . '<br>';
    foreach ($modelos as $modelo) {
        echo '  Modelo ' . $modelo . '<br>';
    }
}