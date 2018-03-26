<?php


	if (array_key_exists('register', $_POST)) {

		$email = $app['database']->checkIfExists('email', 'users', $_POST['email']);
		$username = $app['database']->checkIfExists('username', 'users', $_POST['username']);

		
		if ($username) {

			$error = "username already exist";

			require 'views/admin/register.view.php';

		}elseif ($email ) {
			
			$error = "email already exist";
			
			require 'views/admin/register.view.php';

		}elseif (strlen($_POST['password']) < 4 ) {
			

			$error = "Password should be atleast 4 characters long";
			
			require 'views/admin/register.view.php';
		}

		else{
			$encrypt = password_hash($_POST['password'], PASSWORD_BCRYPT);

				$app['database']->dbInsert('users',
				[
					"username" => $_POST['username'],
					"email" => $_POST['email'],
					"password" => $_POST['password'],
					"hash"=>$encrypt
				]);

				header("Location: /login");
		}
	}


if (array_key_exists('addcategory', $_POST)) {

	$cat = $app['database']->checkIfExists('categoryName', 'majorCategory', $_POST['category']);
	
	if ($cat) {

		$error = "category name already exist";

		require 'views/admin/addcategory.view.php';

	}else{

		$app['database']->dbInsert('majorCategory', [

			"categoryName" => strtoupper($_POST['category'])
			]);

		 header("Location: /admin");

	}

}



if (array_key_exists('csubcat', $_POST)) 
{
	$subcat = $app['database']->checkIfExists('subcat', 'subcategory', $_POST['subcatname']);
	
	if ($subcat) {

		$error = "sub category  name already exist";

		require 'views/admin/addcategory.view.php';

	}else{

		$app['database']->dbInsert('subcategory', [

			"mcatid" => $_POST['majorcategory'],
			"subcat" => $_POST['subcatname']
		]);

		header("Location: /admin");

	}


}

