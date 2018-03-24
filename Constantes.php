<?php

// Definicion de constantes

// Usando define
define("MI_CONSTANTE", "Hola mundo."); 
echo MI_CONSTANTE . '<br>';

// Usando const (trabaja mas rapido que define)
const OTRA_CONSTANTE = "Adios mundo";
echo OTRA_CONSTANTE . '<br>';

// Incluir Array en una constante usando cons. A partir de PHP 5.6.0
const ANIMALES = array('perro', 'gato', 'pájaro');
echo ANIMALES[1] . '<br>'; // muestra "gato"

// A partir de PHP 7
define('TAMAÑOS', array(
    'pequeño',
    'mediano',
    'grande'
));
echo TAMAÑOS[1] . '<br>'; // muestra mediano




/* Funcionamiento de constantes dentro de las clases

 * Using "define('MY_VAR', 'default value')" INSIDE a class definition does 
 * not work as expected. You have to use the PHP keyword 'const' and initialize
 *  it with a scalar value -- boolean, int, float, string (or array in PHP 5.6+) 
 * -- right away. */

define('MIN_VALUE', '0.0');   // RIGHT - Works OUTSIDE of a class definition. 
define('MAX_VALUE', '1.0');   // RIGHT - Works OUTSIDE of a class definition. 

//const MIN_VALUE = 0.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition. 
//const MAX_VALUE = 1.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition. 

class Constants 
{ 
  //define('MIN_VALUE', '0.0');  WRONG - Works OUTSIDE of a class definition. 
  //define('MAX_VALUE', '1.0');  WRONG - Works OUTSIDE of a class definition. 

  const MIN_VALUE = 0.0;      // RIGHT - Works INSIDE of a class definition. 
  const MAX_VALUE = 1.0;      // RIGHT - Works INSIDE of a class definition. 

  public static function getMinValue() 
  { 
    return self::MIN_VALUE; 
  } 

  public static function getMaxValue() 
  { 
    return self::MAX_VALUE; 
  } 
} 
