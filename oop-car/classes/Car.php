<?php

class Car {

	// Properties of a car
	public $paintColour;
	public $nameOfOwner;
	public $make;
	public $model;
	public $numberOfWheels;
	public $fuelAmount;
	public $odometer;
	public $litresPerKM;
	private $isOn;

	// Constructor
	public function __construct( $make, $model, $litresPerKM, $odometer=0, $fuelAmount=0, $numberOfWheels=4 ) {

		// Save the data!
		$this->make 			= $make;
		$this->model 			= $model;
		$this->litresPerKM 		= $litresPerKM;
		$this->odometer 		= $odometer;
		$this->fuelAmount 		= $fuelAmount;
		$this->numberOfWheels 	= $numberOfWheels;

		// Make the car off by default
		$this->isOn = false;

	}

	public function refuel( $litresToFill ) {

		// Add the new fuel to the tank
		$this->fuelAmount += $litresToFill;

	}

	// Function to say how many kilometers are left based on the fuel in tank
	// and the fuel consumed per KM
	public function kmLeft() {

		return $this->fuelAmount / $this->litresPerKM;

	}

	public function drive( $km ) {

		// Make sure the car is on
		if( $this->isOn == false ) {

			echo '<p>Car is not running!</p>';
			return;

		}

		// Make sure the car has enough fuel for the journey
		if( $km > $this->kmLeft() ) {

			// Not enough fuel for the journey
			echo '<p>Car does not have enough fuel!</p>';

		} else {

			// Car CAN make the journey
			$this->odometer += $km;
			$this->fuelAmount -= $km * $this->litresPerKM;

			// Let the user know how much damage they've done to the car
			echo '<p>You have '.$this->fuelAmount.' litres left.</p>';
			echo '<p>You have driven '.$this->odometer.'KMs since you bought the car.</p>';

		}

	}

	public function startCar() {

		$this->isOn = true;

	}





}