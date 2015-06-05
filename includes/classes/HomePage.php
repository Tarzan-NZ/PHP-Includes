<?php

// Class specifically for the home page
// Based off the home page
class HomePage extends Page {

	// Method to show latest 5 products
	public function latestProducts() {
		
	}

	// Method to show content for the home page
	public function contentHTML() {
		
		// Show iamge slider
		include 'templates/home/imageslider.php';

		// Show a greeting
		include 'templates/home/greeting.php';
	}


}