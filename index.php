<?php
include 'Car.php';

$carParams = [
    "color" => "black",
    "brand" => "BMW e39",
    "year" => 1999,
    "mileage" => 285738,
    "tireSize" => 19,
    "tirePressure" => 2.2,
    "type" => CarType::Hybrid
];

$car = new Car("black", "BMW e39", 1999, 285738, 19, 2.2, CarType::Hybrid);

echo "<pre>";
print_r($car);
echo "</pre>";

?>