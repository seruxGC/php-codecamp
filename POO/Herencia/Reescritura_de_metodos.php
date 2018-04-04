<?php

class PADRE
{
    public function unaFuncion()
    {
        echo 'Texto original';
    }
}

class HIJA extends PADRE
{
    /**
     * Al definir la clase hija una funcion con el mismo nombre que la clase padre
     * la sobreescribe.
     */
    public function unaFuncion() 
    {
        echo 'Sobreescribe el texto original';
    }
}

$hija = new HIJA();
echo $hija->unaFuncion(); // Sobreescribe el texto original
