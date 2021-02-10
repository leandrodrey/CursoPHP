<?php

require_once 'EngineDiesel.php';
require_once 'EngineElectric.php';
require_once 'Wheel.php';
require_once 'Vehicle.php';
require_once 'Motorcycle.php';
require_once 'Car.php';

$carEngine = new EngineDiesel();
$carWheels = [new Wheel(), new Wheel(), new Wheel(), new Wheel()];
$carDoor = [new Door(), new Door(), new Door(), new Door()];
$car = new Car($carEngine, $carWheels, $carDoor);

$motoEngine = new EngineElectric();
$moto = new Motorcycle($motoEngine, [new Wheel(), new Wheel()],[]);

function testVehicle(Vehicle $vehicle)
{
    echo 'Starting Test: ' . get_class($vehicle) . "\n";
    $vehicle->start();
    echo "\n";
    $vehicle->accelerate();
    echo "\n";
    $vehicle->stop();
    echo "\n";
}

testVehicle($car);
testVehicle($moto);