<?php

class Operation {
    public int $nombre1;
    public int $nombre2;

    function __construct(){
        $this->nombre1 = 1;
        $this->nombre2 = 2;
    }
}

$var = new Operation();
echo "La valeur de nombre1 est : " . ($var->nombre1) . "<br>";
echo "La valeur de nombre2 est : " . ($var->nombre2) . "<br>";


?>