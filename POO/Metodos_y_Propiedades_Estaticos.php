<?php

/**
 * Se caracterizan porque no se necesita crear una instancia.
 *
 * Sirven para definir métodos y propiedades cuyo comportamiento no depende de
 * la creación de un objeto, de ahí que se conozcan como «elementos de clase».
 */

class nombreClase
{

    public static $propeidadEstatica = 'Propiedad estatica';

    public static function metodoEstatico()
    {
        return "Hey, soy un método estático" . '<br>';
    }
        
    /**Los métodos static se pueden utilizar dentro de una clase mediante 
     * la palabra reservada self
     */
    public function miFuncion()
    {
        echo self::metodoEstatico() . ' llamado dentro de una clase' . '<br>';
        echo self::$propeidadEstatica . ' llamada dentro de una clase' . '<br>';
    }
}

// Llamada a un metodo estatico
echo nombreClase::metodoEstatico();

// Llamada a una propidad estatica
echo nombreClase::$propeidadEstatica . '<br>';

/* LLamada una funcion de la clase que hace llamadas a metodos y propiedades
* estaticas */

$miClase = new nombreClase();
$miClase->miFuncion();




