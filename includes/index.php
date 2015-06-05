<?php

// Load the content for the page

// Display any content that is inside the GET array (data from address bar)
// print_r( $_GET );

// If the user has NOT requested a "page" in the GET array
if( isset( $_GET['page'] ) == false ) {
	// User has not requested a page, so then we want to load the home page
	$pageToLoad = 'home';
} else {
	// User HAS requested a page
	$pageToLoad = $_GET['page'];
}

// We need the Page class
require 'classes/Page.php';


// Load the appropriate content
switch( $pageToLoad ) {
	// Home page
	case 'home':
		require 'classes/homepage.php';
		$page = new homePage('Home Page', 'Welcome to our product site!');
	break;

	// About page
	case 'about':

		$page = new Page('About Us', 'Everything you want to know about our company');
	break;

	// Contact page
	case 'contact':
		$page = new Page('Contact Page', 'Contact us for more information');
	break;

	// Registration
	case 'registration':
		require 'classes/registrationPage.php';
		$page = new RegistrationPage('Registration Page', 'Register a new account with us!');
	break;

	case 'login':
		// Create an instance of the Page class, specifically for the login page
		$page = new Page('Login Page', 'Use an existing account to log in');
	break;

	// 404
	default:
		$page = new Page('404 Page not found', 'You broke the internet');
	break;
}


$page->headerHTML();
$page->contentHTML();
$page->footerHTML();

// // Include the header of the website
// include 'header.php';

// include $pageData['file'];

// // Include the footer content
// include 'footer.php';















