<?php
include 'Tire.php';
include 'ElectricMotor.php';
include 'ICEngine.php';

enum CarType {
    case Electric;
    case Hybrid;
    case Gasoline;
}

class Car{
    private $tires = [];
    private $propulsionSystem = [];
    function __construct(public $color, 
                        public $brand, 
                        private $releaseYear, 
                        private $mileage,
                        $tireSize,
                        $tirePressure,
                        $type
                        )
    {

        switch ($type) {
            case CarType::Electric:
                $this->propulsionSystem[] = new ElectricMotor(500, "electricity", 0.9);
            break;

            case CarType::Hybrid:
                $this->propulsionSystem[] = new ICEngine(380, "gasoline", 0.7);
                $this->propulsionSystem[] = new ElectricMotor(380, "gasoline", 0.7);
            break;

            case CarType::Gasoline:
                $this->propulsionSystem[] = new ElectricMotor(185, "gasoline", 0.4);
            break;

            default:
            echo "Invalid car type given!";
        }
            for($i = 0; $i < 4; $i++){
                $this->tires[] = new Tire($tirePressure, $tireSize);
            } 
    }

    function makeNoise()
    {

    }

    function move()
    {

    }
}

?>