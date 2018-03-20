<?php 


return [
	"database" => [
		"name" => "onlinestore",
		"username" => "root",
		"password" => "mysql",
		"connection" => "mysql:host=localhost",
		"options" =>[
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]

];