<?php

/*
 * Una variable estática existe sólo en el ámbito local de la función,
 * pero no pierde su valor cuando la ejecución del programa abandona 
 * este ámbito. 
 * 
 */

function test()
{
    static $contador = 0;
    echo $contador;
    $contador++;
}

test(); // salida 0
test(); // salida 1
test(); // salida 2


// Sin variable estatica

function test2()
{
    $contador = 0;
    echo $contador;
    $contador++;
}

test2(); // salida 0
test2(); // salida 0
test2(); // salida 0
