<?php

class QueryMaster 
{
	protected $link;
	function __construct($link)
	{
		$this->link = $link;
	}


	public function registerStaff($staffDetails)
	{
		$encrypt = password_hash($staffDetails['password'], PASSWORD_BCRYPT);

		try{

		$stmt = $this->link->prepare("INSERT INTO users (username, email, password, hash) 
			VALUES (:username, :email, :password, :encrypt)");

		$data = [
			":username" => $staffDetails['username'],
			":email" => $staffDetails['email'],
			":password" => $staffDetails['password'],
			":encrypt" => $encrypt
		];

			$stmt -> execute($data);

		} catch(Exception $e)
		{
			die($e->getMessage());
			//header("Location: /register");
		}
	}


	public function checkIfExists($col, $val)
	{
		$result = false;
	try{
		  $stmt = $this->link->prepare("SELECT {$col} FROM users WHERE {$col}=:val");

		  	 $stmt ->bindParam(":val", $val);

		   	$stmt ->execute();
	   } catch(Exception $e)
		{
			die($e->getMessage());
		}
	  	 $count = $stmt->rowCount();

	   	if ($count > 0) {
	     $result = true;
	  	 }

	   	return $result;
	}

  public function adminLogin($data)
	{		
		$result = false;
		try{
		  $stmt = $this->link->prepare("SELECT * FROM users WHERE email = :email");

		  $stmt ->bindParam(':email', $data['email']);

		  $stmt ->execute();

		  	}catch( Exception $e)
		  	{
		  		die($e->getMessage());
		  	}

		  $count = $stmt->rowCount();

		  $row = $stmt->fetch(PDO::FETCH_BOTH);
	
		  if ($count == 1 && password_verify($data['password'], $row['hash'])) {

		    $result  = true;

		  }

		  return $result;
	}



}