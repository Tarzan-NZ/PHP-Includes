<?php

// Registration page class 
// can register accounta
// has a form
class RegistrationPage extends Page {

	// Properties
	private $usernameErrorMsg;
	private $passwordErrorMsg;
	private $username;

	// Function to display content for the page
	public function contentHTML() {

		// Check if the form has been submitted
		if(isset( $_POST['register-account'])) {

			// Save the form data so PHP can give it back later on
			$this->username = trim($_POST['username']);


			// Process the form
			$this->processNewAccount();

			// If there are no errors at all, display success
			if ($this->usernameErrorMsg == '' && $this->passwordErrorMsg == '') {
				echo 'Congrats on your new account';
				return;
			}

		}
		
		// Include the intro to the reg page
		include 'templates/registration/introRegistration.php';

		// Show the registration Form
		$this->showRegistrationForm();
	}

	public function showRegistrationForm() {
	
		include 'templates/registration/registrationForm.php';

	}

	// Handle a registration request ( Submit the form )
	public function processNewAccount() {

		// List of accounts
		$accounts = ['admin','bennabbott','oriongregg'];

		// Validate the form
		// Check that the user has privided a username
		if( $this->username == '' ) {
			$this->usernameErrorMsg = 'Invalid Username';
		} elseif(in_array($this->username, $accounts)) {
			$this->usernameErrorMsg = 'Username already exists';			
		} else {
			$this->usernameErrorMsg = '';
		}
		
		// Check  and make sure the paswords match
		if ($_POST['password'] == '' || $_POST ['password2'] == '') {
			$this->passwordErrorMsg = '* required';			
		} elseif( $_POST['password'] != $_POST['password2']) {
			$this->passwordErrorMsg = 'Passwords do not match';
		} else {
			$this->passwordErrorMsg = '';
		}
	}






}