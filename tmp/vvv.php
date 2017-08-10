<?php

class config {
	
function connect (){
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=training", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"
	; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	return $conn;
}
// Ijust skip this function beacuse it's not work correctly 
Public function showinfooo ($sql){
	if(empty($id)) {
            return null;
        }
	$con = $this->connect();
	$stmt = $con->prepare("SELECT supEmail, OfficeNO FROM supervisor where SuperID='1'"); 
	$stmt->execute();
	$result =$stmt->fetchAll() ;
	foreach ($result as $results){
	
	//while( $row = $result->fetchAll()){
	echo $results['supEmail'];
	echo $results['OfficeNO'];
	
}
	//return $result;
	
	//$stmt->setFetchMode(PDO::FETCH_ASSOC);
	//foreach (new TableRows (new recursivArrayIterator($stmt->fetchAll())as $k)){
	//echo $v; }
	//while( $row = $stmt->fetchAll()) {
	//echo $row['supEmail'];
	//echo $row['OfficeNO'];
 //}
	////$result = $stmt->fetchAll(PDO::FETCH_OBJ);
	//if ( $result){
		//return $result;
	//}
	//foreach (new TableRows (new recursivArrayIterator($stmt->fetchAll())as $k=>$v)
	//$result = $stmt->fetchAll();
	//$stmt->fetchAll(PDO::FETCH_OBJ) 
	//return $result;
	//var_dump($result);
}
//function validadmin ($admin, $password){
	//$con = connect();
	  //$stmt = $con->prepare("SELECT AdminID, Admpassword FROM admin where AdminID ='$admin' and Admpassword='$password'"); 
      //$stmt->execute();
	  //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	  //var_dump($result);
//}

}


?>