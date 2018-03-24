<?php


// Declaracion de bucle for
for ($i = 0; $i<10; $i+=1){
    echo $i;
}

// Declaracion bucle foreach

/* 
 * foreach ($array as $value) {
 *    code to be executed;
 * }
 * 
 */

$colores = array('rojo', 'azul' , 'verde');

foreach($colores as $color){
    echo $color;
}