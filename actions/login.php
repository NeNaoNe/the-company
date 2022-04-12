<?php
include "../classes/User.php";

# Collect all form data
$username = $_POST['username'];
$password = $_POST['password'];

# Instantiate the class
$user = new User;

# Call the method
$user->Login($username, $password);