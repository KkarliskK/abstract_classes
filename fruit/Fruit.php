<?php

abstract class Fruit{
    public $color;
    protected $weight;

    abstract public function ripen();

    abstract static function becomeHealthy();
}

?>