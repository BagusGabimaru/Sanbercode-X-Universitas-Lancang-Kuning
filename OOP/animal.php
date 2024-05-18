<?php

require_once('index.php');

class Animal {
    public $Name;
    public $legs = 4;
    public $cold_blooded = "no";

    public function __construct($hewan)
    {
        $this -> Name = $hewan ;
    }
}

?>