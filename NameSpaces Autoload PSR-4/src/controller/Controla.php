<?php
namespace Names\Controller;

use Names\Model\iEscribe;

class Controla
{
    private $modeloA;
    
    public function __construct(iEscribe $modeloA)
    {
       $this->modeloA = $modeloA; 
    }
    
    
    public function escribe()
    {
        $this->modeloA->escribe();
    }
}
