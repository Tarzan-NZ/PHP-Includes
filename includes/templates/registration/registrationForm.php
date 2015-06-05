<form action="index.php?page=registration" method="POST">
	<h2>Stuff on da page</h2>
	<div>
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" value="<?php echo $this->username; ?>">
		<span><?php echo $this->usernameErrorMsg; ?></span>
	</div>
	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" id="password">
	</div>
	<div>
		<label for="password2">Confirm Password:</label>
		<input type="password" name="password2" id="password2">
		<span><?php $this->passwordErrorMsg; ?></span>
	</div>
	<div>
		<input type="submit" name="register-account" value="Register Account">
	</div>
</form>

