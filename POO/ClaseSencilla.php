Una clase en programación es un esquema/modelo o plantilla 
para crear variables (objetos) basados en ella, básicamente
es un conjunto de variables (llamadas tambien propiedades)
e instrucciones con un fin especifico.

<?php

// Definicion de una clase

class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';

    // Declaración de un método
    public function mostrarVar() {
        echo $this->var;
    }
}


/** 
 * Para crear una instancia de una clase, se debe emplear la 
 * palabra reservada new. */
$instanciaClaseSencilla = new ClaseSencilla();

/** 
 * Otra forma de instanciar clases es a partir de un String
 * que contenga el nombre de la clase */
$nombreClase = 'ClaseSencilla';
$instanciaClaseSencilla = new $nombreClase(); // new ClaseSencilla()


// Uso de la instancia
$instanciaClaseSencilla->mostrarVar();
$instanciaClaseSencilla->var;
