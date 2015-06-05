<?php

// Require the Car class
require 'classes/Car.php';

// Create an instance of a car
$prius = new Car('Toyota', 'Prius', .5);

// Find out how much fuel the car has
//echo $prius->fuelAmount;

// Fill our new car!
$prius->refuel( 10 );

// Find out how much fuel the car has
//echo $prius->kmLeft();
$prius->startCar();
$prius->drive( 10 );
$prius->drive( 9 );
$prius->drive( 10 );