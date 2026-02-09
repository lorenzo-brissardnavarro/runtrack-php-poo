<?php

class Operation {
    public int $nombre1;
    public int $nombre2;

    function __construct(){
        $this->nombre1 = 1;
        $this->nombre2 = 2;
    }

    function addition(){
        return $this->nombre1 + $this->nombre2;
    }
}

$var = new Operation();
echo "L'addition de " . $var->nombre1 . " + " . $var->nombre2 . " = " . $var->addition();


?>