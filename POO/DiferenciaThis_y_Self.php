hat is the difference between  $this  and  self ?

Inside a class definition, $this refers to the current object,
 while  self  refers to the current class.

It is necessary to refer to a class element using  self ,
and refer to an object element using  $this .
Note also how an object variable must be preceded by a keyword
 in its definition.

The following example illustrates a few cases:

<?php
class Classy {

const       STAT = 'S' ; // no dollar sign for constants (they are always static)
static     $stat = 'Static' ;
public     $publ = 'Public' ;
private    $priv = 'Private' ;
protected  $prot = 'Protected' ;

function __construct( ){  }

public function showMe( ){
    print '<br> self::STAT: '  .  self::STAT ; // refer to a (static) constant like this
    print '<br> self::$stat: ' . self::$stat ; // static variable
    print '<br>$this->publ: '  . $this->publ ; // refer to an object variable like this
    print '<br>' ;
}
}
$me = new Classy( ) ;
$me->showMe( ) ;

/* Produces this output:
self::STAT: S
self::$stat: Static
$this->stat:
$this->publ: Public
*/
?>