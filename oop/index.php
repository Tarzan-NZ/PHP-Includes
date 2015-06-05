<?php

// We need the Person class available in this file
require 'classes/Person.php';

// Create a new person based on out class ( blueprint )
$ben 	= new Person('Ben Abbott', '23-08-1991', 'male', 80);
$mary 	= new Person('Mary Jane', '01-01-1989', 'female');

// // Find out the weight of Ben
// echo '<p>Ben weighs: '.$ben->getWeight().'</p>';
// echo '<p>Mary weighs: '.$mary->getWeight().'</p>';

// // Make Ben eat
// $ben->eat( 'Pizza', 1 );
// $mary->eat( 'Icecream', .5 );

// // Find out the weight of Ben now after eating
// echo '<p>Ben weighs: '.$ben->getWeight().'</p>';
// echo '<p>Mary weighs: '.$mary->getWeight().'</p>';

$ben->beTipped( 10 );
$ben->beTipped( 20 );
$ben->beTipped( -35 );



