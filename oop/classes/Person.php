<?php

// The blueprint ( design / class ) of a person
class Person {

	// Properties of a person
	private $name;
	private $dob;
	public $nickname;
	private $height;
	private $weight;
	private $gender;
	private $bankAccountNumber;
	private $tipJar;

	// Constructor ( runs as soon as an instance of this class is made )
	public function __construct( $newName, $newDoB, $newGender, $newWeight=0 ) {

		// Save the new name and dob into the properties above
		$this->name 	= $newName;
		$this->dob 		= $newDoB;
		$this->gender 	= $newGender;
		$this->weight 	= $newWeight;

	}

	// Method: Say my name
	public function sayName() {

		// Say my name
		echo '<p>Hello, my name is '.$this->name.'</p>';

	}

	// Method: to say just my name
	public function getName() {

		return $this->name;

	}

	// Find out the weight of this person
	public function getWeight() {

		return $this->weight;

	}

	public function eat( $nameOfFood, $weightOfFood ) {

		// Say what the person is eating
		echo $this->name.' is now eating '.$nameOfFood;

		// Add the weight of the food to the weight of the person
		$this->weight += $weightOfFood;

	}

	public function beTipped( $tipAmount ) {

		// Make sure the tip is a positive value
		if( $tipAmount > 0 ) {
			$this->tipJar += $tipAmount;
			echo 'Total in Tip Jar: '.$this->tipJar;
		} else {
			echo 'Oi! Get you hands out!@#$#$@$#';
		}

		
		

	}








}