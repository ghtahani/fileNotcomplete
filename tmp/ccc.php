<?php

class config{
	
public function connect (){
$servername = "localhost";
$username = "root";
$password = "";

try {
	
    $conn = new PDO("mysql:host=$servername;dbname=training", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	return $conn;
}


public function validadmin ($admin, $password){
	$con = connect();
	  $stmt = $con->prepare("SELECT AdminID, Admpassword FROM admin where AdminID ='$admin' and Admpassword='$password'"); 
      $stmt->execute();
	  $result = $stmt->fetchAll(PDO::FETCH_OBJ);
	  var_dump($result);
}

}


?>