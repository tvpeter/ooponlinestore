<?php

$email = $app['database']->checkIfExists('email', $_POST['email']);
$username = $app['database']->checkIfExists('username', $_POST['username']);

if ($username) {

	$error = "username already exist";

	require 'views/admin/register.view.php';

}elseif ($email ) {
	
	$error = "email already exist";
	

	require 'views/admin/register.view.php';

}elseif ($_POST['password'] < 4 ) {
	
	$error = "Password should be atleast 4 characters long";
	
	require 'views/admin/register.view.php';
}

else{

		 $app['database'] ->registerStaff([

			"username" => $_POST['username'],
			"email" => $_POST['email'],
			"password" => $_POST['password']
		]);

		header("Location: /login");

}