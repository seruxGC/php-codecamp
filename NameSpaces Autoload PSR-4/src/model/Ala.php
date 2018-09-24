<?php
namespace Names\Model;

require_once "iEscribe.php";

class Ala implements iEscribe
{

    public function escribe()
    {
        echo 'Escribo desde A <br>';
    }
}
