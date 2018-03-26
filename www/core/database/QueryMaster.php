<?php

class QueryMaster 
{
	protected $link;
	function __construct($link)
	{
		$this->link = $link;
	}


	public function checkIfExists($col, $tablename, $val)
	{
		$result = false;
	try{
		  $stmt = $this->link->prepare("SELECT {$col} FROM {$tablename} WHERE {$col}=:val");

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


	public function dbInsert($table, $parameters)
    {
        $sql = sprintf(
          'insert into %s (%s) values (%s)',
          $table,
          implode(',', array_keys($parameters)),
          ':' .implode(', :', array_keys($parameters))
        );

        try {
          $statement = $this->link->prepare($sql);

          $statement ->execute($parameters);

        } catch (Exception $e) {
          die($e->getMessage());
        }


    }

	public function selectAll($table)
    {
      $statement = $this->link->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

  public function getCategoryById($id)
{
  $result = " ";
  $stmt = $this->link->prepare("SELECT * FROM majorCategory WHERE id= :catId");
  $stmt ->bindParam(':catId', $id);
  $stmt ->execute();
  $result = $stmt->fetch(PDO::FETCH_BOTH);
  return $result;
}

public function uploadFile($files, $name, $loc)
{
$result = [];
$rnd = rand(0000000000, 9999999999);
  $strip_name = str_replace(' ', '_', $files[$name]['name']);
  $filename = $rnd.$strip_name;
  $destination = $loc.$filename;

  if (!move_uploaded_file($files[$name]['tmp_name'], $destination)) {
    $result [] = false;
  }else {    $result [] = true;
    $result [] = $destination;
  }
  return $result;
}


}