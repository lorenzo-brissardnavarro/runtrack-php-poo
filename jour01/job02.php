<?php

class Operation {
    public int $nombre1;
    public int $nombre2;

    function __construct(){
        $this->nombre1 = 1;
        $this->nombre2 = 2;
    }

    function addition(){
        echo "L'addition de " . $this->nombre1 . " + " . $this->nombre2 . " = " . $this->nombre1+$this->nombre2;
    }
}

$var = new Operation();
echo($var->addition());


?>