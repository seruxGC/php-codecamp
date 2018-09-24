<?php
/*
 * COMPOSER AUTOLOAD PSR-4
 * 
 * 1. Crear composer.json
 * 
 * En el terminal: composer init
 * 
 * 2. Especificar en el composer.json las flags 
 * correspondientes de autoloader PSR-4
 * 
   "autoload": {
        "psr-4": {
            "NombreNameSpaceSuperior\\": "ruta/donde/se/encuentra"
        }
    }
 * 
 * 3. Crear namespaces totalmente cualificados siguiendo el estandar PSR-4
 * 
 *      \<NamespaceName>(\<SubNamespaceNames>)*\<ClassName>
 * 
 * 4. Generar el autoload de composer:
 *      En el terminal: composer dump-autoloader -o
 * 
 * 5.Hacer un require del autoloader en el index o 
 * archivo bootstrap de la app(inicializacion)
 *      require_once __DIR__ . '/../vendor/autoload.php';
 * 
 * 6. Cada vez que se apliquen cambios hay que actualizar:
 * 
 * composer dump-autoload -o
 * 
 */

require_once __DIR__ . '/../vendor/autoload.php';

// PHP +7
use Names\Model\{
    Ala,
    B
} ;
use Names\Controller\Controla;

/**
 * PHP <7
 * use Names\Model\Ala;
 * use Names\Model\B;
 * use Names\Controller\Controla;
 */

$modeloA = new Ala();
$modeloB = new B();

$controladorA = new Controla($modeloA);
$controladorB = new Controla($modeloB);

$controladorA->escribe();
$controladorB->escribe();
