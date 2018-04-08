<?php

/**
 * Un array en PHP es en realidad un mapa ordenado. Un mapa es un tipo de datos
 *  que asocia valores con claves. Este tipo se optimiza para varios usos
 *  diferentes; se puede emplear como un array, lista (vector), tabla asociativa
 *  (tabla hash - una implementación de un mapa), diccionario, colección, pila, 
 * cola, y posiblemente más. Ya que los valores de un array pueden ser otros 
 * arrays, también son posibles árboles y arrays multidimensionales.
 */

 // ARRAY ASOCIATIVO (clave-valor)  a partir de PHP 5.4

$arrayAsociativo = [
    'clave1' => 'valor1',
    'clave2' => 'valor2'
    // etc
];

// La clave puede ser un integer o un string. El valor puede ser de cualquier tipo.



/**
 * ARRAYS INDEXADOS
 * 
 * La clave es opcional. Si no se especifica, PHP usará el incremento de la
 *  clave de tipo integer mayor utilizada anteriormente.
 */

 $arrayIndexado = array('valor1', 'valor2', 'valor3');

 /**
  * ACCESO A LOS ELEMENTOS DE UN ARRAY

  * Los elementos de array se pueden acceder utilizando la sintaxis array[key].
  */

  echo $arrayAsociativo['clave1'] . '<br>';
  echo $arrayAsociativo['clave2'] . '<br>';

  echo $arrayIndexado[0] . '<br>';
  echo $arrayIndexado[1] . '<br>';

  /**
   * COMPROBAR SI UNA VARIABLE ES UN ARRAY
   */

  if(is_array($arrayAsociativo)){
    echo '$arrayAsociativo es un array <br>';
  }else{
    echo '$arrayAsociativo no es un array <br>'; 
  }

  /**
   * RECORRER UN ARRAY
   */

   // Foreach Array asociativo usando clave y valor
   foreach($arrayAsociativo as $clave => $valor){
       echo '$arrayAsociativo ' . $clave . ' tiene -> ' . $valor . '<br>';
   }

   // Foreach Array indexado (o asociativo) usando solo valor
   foreach($arrayIndexado as $valor){
    echo '$arrayIndexado ' . $valor . '<br>';
   }

   // For Array indexado

   $longitudArray = count($arrayIndexado);

   for($i = 0; $i < $longitudArray; $i+=1){
       echo '$arrayIndexado' . $arrayIndexado[$i] . '<br>';
   }


   /**
    * AÑADIR ELEMENTOS A UN ARRAY
    */
    $arrayAsociativo['clave3'] = 'valor3';
    $arrayIndexado[] = 'valor4';

    /**
     * ORDENAR ELEMENTOS DE UN ARRAY
     */

     $diasSemana = array(
         'Lunes',
         'Martes',
         'Miercoles',
         'Jueves',
         'Viernes',
         'Sabado',
         'Domingo'
     );

     // Ordenar valores de menor a mayor
     sort($diasSemana);


     foreach($diasSemana as $dia){
         echo $dia . '<br>';
     }

     /**
      * Mas formas de ordenar arrays
      * http://php.net/manual/es/array.sorting.php
      */