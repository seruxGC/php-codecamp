<?php

/**
 * La visibilidad de una propiedad, un método o (a partir d PHP 7.1.0) una 
 * constante se puede definir anteponiendo a su declaración una de las palabras
 * reservadas public, protected o private.
 * 
 * A los miembros de clase declarados como 'public' se puede acceder desde donde sea
 * 
 * A los miembros declarados como 'protected', solo desde la misma clase o 
 * mediante clases heredadas.
 * 
 * A los miembros declarados como 'private' únicamente se puede acceder desde
 * la clase que los definió.
 */


 // Visibilidad de las propiedades

 /**
 * Definición de MyClass
 */
class MyClassX
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClassX();
echo $obj->public;    // Funciona bien
echo $obj->protected; // Error Fatal
echo $obj->private;   // Error Fatal
$obj->printHello();   // Muestra Public, Protected y Private


/**
 * Definición de MyClass2
 */
class MyClass2 extends MyClass
{
    // Se pueden redeclarar las propiedades pública y protegida, pero no la privada
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public;    // Funciona bien
echo $obj2->protected; // Error Fatal
echo $obj2->private;   // Undefined
$obj2->printHello();   // Muestra Public2, Protected2, Undefined


// Visibilidad de los metodos

/**
 * Los métodos de clases pueden ser definidos como public, private, o protected. 
 * Aquellos declarados sin ninguna palabra clave de visibilidad explícita serán
 *  definidos como public.
 */


/**
 * Definición de MyClass
 */
class MyClass
{
    // Declaración de un constructor public
    public function __construct() { }

    // Declaración de un método public
    public function MyPublic() { }

    // Declaración de un método protected
    protected function MyProtected() { }

    // Declaración de un método private
    private function MyPrivate() { }

    // Esto es public
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MyClass;
$myclass->MyPublic(); // Funciona
$myclass->MyProtected(); // Error Fatal
$myclass->MyPrivate(); // Error Fatal
$myclass->Foo(); // Public, Protected y Private funcionan


/**
 * Definición de MyClass3
 */
class MyClass3 extends MyClass
{
    // Esto es public
    function Foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate(); // Error Fatal
    }
}

$myclass3 = new MyClass2;
$myclass3->MyPublic(); // Funciona
$myclass3->Foo2(); // Public y Protected funcionan, pero Private no


// Visibilidad de las constantes

/**
 * A partir de PHP 7.1.0, las constantes de clase se pueden definir como
 *  públicas, privadas o protegidas. Las constantes declaradas sin una 
 * visibilidad explítica serán definidas como públicas.
 */

class MiClase
{
    // Declarar una constante pública
    public const MY_PUBLIC = 'public';

    // Declarar una constante protegida
    protected const MY_PROTECTED = 'protected';

    // Declarar una constante privada
    private const MY_PRIVATE = 'private';

    public function foo()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE;
    }
}

$myclass = new MiClase();
MiClase::MY_PUBLIC; // Funciona
MiClase::MY_PROTECTED; // Error fatal
MiClase::MY_PRIVATE; // Error fatal
$myclass->foo(); // Funcionan Public, Protected y Private


/**
 * Definir MiClase2
 */
class MiClase2 extends MiClase
{
    // Esta es pública
    function foo2()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE; // Error fatal
    }
}

$myclass2 = new MiClase2;
echo MiClase2::MY_PUBLIC; // Funciona
$myclass2->foo2(); // Funcionan Public y Protected, pero no Private