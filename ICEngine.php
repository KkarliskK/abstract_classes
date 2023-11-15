<?php
include_once 'PropulsionSystem.php';

class ICEngine extends PropulsionSystem{

    public $size;
    private $cylinderCount;
    
    public function work()
    {
        echo "Broom, Broom!";
    }
}

?>