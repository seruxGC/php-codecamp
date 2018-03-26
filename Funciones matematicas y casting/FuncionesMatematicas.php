<?php

/**
 * Funciones matematicas de php
 * http://php.net/manual/es/ref.math.php
 */

 /**
  * Numero aleatorio 
  */

  $numeroAleatorio = rand(); // numero aleatorio entero

  $numeroAleatorio2 = rand(10,20); // numero aleatorio entero entre 10 y 20

  /**
   * Potencia de un numero
   */

   $potencia = pow(2,4); // 16

   /**
    * Redondeo con precision
    */
    round(3.4);         // 3
    round(3.5);         // 4
    round(3.6);         // 4
    round(3.6, 0);      // 4
    round(1.95583, 2);  // 1.96
    round(1241757, -3); // 1242000
    round(5.045, 2);    // 5.05
    round(5.055, 2);    // 5.06

   /**
    * Redondeo hacia arriba
    */

    ceil(4.3);    // 5
    ceil(9.999);  // 10
    ceil(-3.14);  // -3

    /**
     * Redonde hoacia abajo
     */

     floor(4.3);   // 4
     floor(9.999); // 9
     floor(-3.14); // -4