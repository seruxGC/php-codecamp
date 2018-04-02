<?php

class Coche
{
    /** Propiedades
     * Las variables pertenecientes a una clase se llaman "propiedades". También se les puede llamar usando otros términos como "atributos" o "campos"*/
    private $color;
    private $matricula;

    /** Constantes de clase (son siempre estaticas)
     * Es posible definir valores constantes en función de cada clase manteniéndola invariable. La visibilidad predeterminada de las constantes de clase es public.*/
    const NUMERO_RUEDAS = 4; // En mayuscula por convencion

    /** Constructor
     * Aquellas clases que tengan un método constructor lo
     * invocarán en cada nuevo objeto creado, lo que lo hace
     *  idóneo para cualquier inicialización que el objeto
     * pueda necesitar antes de ser usado. */
    public function __construct()
    {
        // $this es una referencia al objeto invocador
        $this->color = 'rojo';
        $this->matricula = '1234abc';
    }

    // Metodos
    public function pintar(string $color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function getNumeroRuedas()
    {
        return self::NUMERO_RUEDAS;
    }
}