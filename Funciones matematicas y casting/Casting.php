Los siguientes forzados de tipos están permitidos:

Castings explicitos

(int), (integer) - forzado a integer
(bool), (boolean) - forzado a boolean
(float), (double), (real) - forzado a float
(string) - forzado a string
(array) - forzado a array
(object) - forzado a object
(unset) - forzado a NULL (PHP 5)

<?php
/**
 * Castings implicitos o dinamicos
 */

$foo = "0";  // $foo es string (ASCII 48)
$foo += 2;   // $foo es ahora un integer (2)
$foo = $foo + 1.3;  // $foo es ahora un float (3.3)
$foo = 5 + "10 Cerditos pequeñitos"; // $foo es integer (15)
$foo = 5 + "10 Cerdos pequeños";     // $foo es integer (15)
?>