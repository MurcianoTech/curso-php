<?php

/**
 * PreIncremento
 * 
 * La función de incrementar el valor de la variable se realiza antes de hacer cualquiera otra operación
 */

// ++$variable
$incremental = 1;

$preIncremento = ++$incremental;
var_dump($preIncremento);

 /**
 * PostIncremento
 * 
 * La función de incrementar el valor de la variable se realiza después de hacer cualquiera otra operación
 */

 // $variable++
$incremental = 1;

$posIncremento = $incremental++;
var_dump($posIncremento);

 /**
 * PreDecremento
 * 
 * La función de decrementar el valor de la variable se realiza antes de hacer cualquiera otra operación
 */

 // --$variable
$decremental = 1;

$preDecremento = --$decremental;
var_dump($preDecremento);

 /**
 * PostDecremento
 * 
 * La función de decrementar el valor de la variable se realiza después de hacer cualquiera otra operación
 */

 // $variable--
$decremental = 1;
$posDecremento = $decremental--;

var_dump($posDecremento);


