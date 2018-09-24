<?php
namespace Names\Model;

require_once "iEscribe.php";

class B implements iEscribe
{

    public function escribe()
    {
        echo 'Escribo desde B <br>';
    }
}
