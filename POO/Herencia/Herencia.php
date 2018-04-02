<?php

class PersonaBase
{
    public $nombre;
    protected $apellido;
    protected $correo;

    public function __construct(string $nombre, string $apellido, string $correo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCorreo()
    {
        return $this->correo;
    }
}

//--------------------------------------------------------------------
/**
 * Al extender la clase base la clase Director cuenta con todos sus atributos
 * y metodos ademas de los que se defina en su propia clase.
 */
class Director extends PersonaBase
{
    private $rango;
    private $funciones;

    public function __construct()
    {
        $this->rango = 'Director';
        $this->funciones = 'Encargado de administrar la empresa';
    }

    public function getRango()
    {
        return $this->rango;
    }

    public function getFunciones()
    {
        return $this->funciones;
    }
}

$director = new Director();
$director->nombre = 'Jose';
echo 'Nombre del director: ' . $director->getNombre() . '<br>';
echo 'Rango: ' . $director->getRango() . '<br>';
echo 'Funciones: ' . $director->getFunciones() . '<br>';

//-----------------------------------------------------------------------
/**
 *  Se puede usar el constructor de la clase padre para inicializar el objeto
 * usando parent::
 */
class Jefe extends PersonaBase
{
    private $personal_a_cargo;


    public function __construct(string $nombre, string $apellido, string $correo)
    {
        $this->personal_a_cargo = 0;
        parent::__construct($nombre, $apellido, $correo); // usando parent::
    }

    public function getPersonalCargo()
    {
        return $this->personal_a_cargo;
    }

    public function setPersonalCargo(int $personas)
    {
        $this->personal_a_cargo = $personas;
    }
}


$jefe = new Jefe('Sara', 'Martel', 'sara@martel.com'); // Usando el constructor de la clase padre
$jefe->setPersonalCargo(5);
echo '<br>Nombre del jefe: ' . $jefe->getNombre() . '<br>'; 
echo  'correo: '. $jefe->getCorreo() . '<br>';
echo 'Personal a cargo: ' . $jefe->getPersonalCargo() . '<br>';

