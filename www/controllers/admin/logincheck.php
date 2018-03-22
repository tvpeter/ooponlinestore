<?php

$status = $app['database']->adminLogin([
	"email" => $_POST['email'],
	"password" => $_POST['password']
]);


if (empty($_POST['email']) || empty($_POST['password'])) {

	$error = "Supply your email/password";

	require 'views/admin/login.view.php';

}elseif ($status) {
	
	header("Location: /admin");

}else{

	$error = "Invalid username/password. Try again";

	require 'views/admin/login.view.php';
}