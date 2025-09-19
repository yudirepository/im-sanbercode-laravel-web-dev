<?php
require_once 'Animal.php';

Class Ape extends Animal 
{
    public $legs = 2;
    
    function yell(){
        return "Auooo";
    }
}
?>
