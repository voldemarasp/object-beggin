<?php

spl_autoload_register(function ($class_name) {
    include "classes/" . $class_name . '.php';
});

// require ("classes/TransportInterface.php");
// require ("classes/Car.php");
// require ("classes/ElectricCar.php");


$petro_automobilis = new Car(4,2,1500,1199);
$jono_automobilis = new ElectricCar(4,2,1500,1199);

$petro_automobilis->go();
$jono_automobilis->go();