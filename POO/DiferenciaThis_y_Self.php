¿ Cual es la diferencia entre $this y self:: ?

 Dentro de una definicion de una clase, $this se refiere al
 objeto actual mientras que self:: se refiere a la clase actual.

 Es necesario referirse a un elemento de una clase (elementos
 estaticos) usando self:: y referirse a un elemento de un
 objeto (como las propiedades y funciones de una clase) 
 usando $this.

El siguiente ejemplo demuestra unos cuantos casos:

<?php
class Classy {

const      MI_CONSTANTE = 'Valor de la constante' ; // no hace falta simbolo de dolar , las constantes son siempre estaticas
static     $variableEstatica = 'La variable estatica' ;
public     $publ = 'Public' ;
private    $priv = 'Private' ;
protected  $prot = 'Protected' ;

function __construct( ){  }

public function mostrar(){
    print '<br> self::MI_CONSTANTE: '  .  self::MI_CONSTANTE ; // referiencia a una constante (son estaticas)
    print '<br> self::$variableEstatica: ' . self::$variableEstatica ; // variable estatica
    print '<br>$this->publ: '  . $this->publ ; // referencia a una variable del objeto (propiedad)
    print '<br>' ;
}
}
$me = new Classy( ) ;
$me->mostrar() ;

/* Produces this output:
self::STAT: S
self::$stat: Static
$this->stat:
$this->publ: Public
*/
?>